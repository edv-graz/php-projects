<?php
require '../includes/functions.php';
require '../includes/db-connect.php';
require '../includes/validate.php';

// Variablen initialisieren für Bildupload
$path_to_img   = '/uploads/';
$allowed_types = [ 'image/jpeg', 'image/png' ];
$allowed_ext   = [ 'jpg', 'jpeg', 'png' ];
$max_size      = 1080 * 1920 * 2;

$id       = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ) ?? '';
$tmp_path = $_FILES['image_file']['tmp_name'] ?? '';
$save_to  = '';

$article = [
	'id'          => $id,
	'title'       => '',
	'summary'     => '',
	'content'     => '',
	'published'   => false,
	'category_id' => 0,
	'user_id'     => 0,
	'images_id'   => null,
	'filename'    => '',
	'alttext'     => '',
];

$errors = [
	'issue'    => '',
	'title'    => '',
	'summary'  => '',
	'content'  => '',
	'user'     => '',
	'category' => '',
	'filename' => '',
	'alttext'  => '',
];
if ( $id ) {
	$sql     = "SELECT a.id, a.title, a.summary, a.content, a.category_id, 
	            a.user_id, a.images_id, a.published, 
	            i.filename, i.alttext FROM articles a 
	            LEFT JOIN images i ON a.images_id = i.id 
	            WHERE a.id = :id";
	$article = pdo_execute( $pdo, $sql, [ 'id' => $id ] )->fetch( PDO::FETCH_ASSOC );
	if ( ! $article ) {
		redirect( 'articles.php', [ 'error' => 'article not found' ] );
	}
}

// Lade alle Kategorien von der Datenbank
$sql        = "SELECT id, name FROM category";
$categories = pdo_execute( $pdo, $sql )->fetchAll( PDO::FETCH_ASSOC );
$sql        = "SELECT id, forename, surname FROM user";
$users      = pdo_execute( $pdo, $sql )->fetchAll( PDO::FETCH_ASSOC );

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	// Bild auslesen
	if ( isset( $_FILES['image_file'] ) ) {
		$image = $_FILES['image_file'];
		// Bildgröße validieren
		$errors['filename'] = $image['error'] === 1 ? 'The image is to large ' : '';
		// Wenn ein Bild hochgeladen wurde, dann wird es validiert
		if ( $tmp_path && $image['error'] === UPLOAD_ERR_OK ) {
			// Alt-Text wird gesetzt
			$article['alttext'] = filter_input( INPUT_POST, 'image_alt' );
			// Alt-Text validieren
			$errors['alttext'] = is_text( $article['alttext'], 1, 254 ) ? '' : 'Alt text must be between 1 and 254 characters';
			// Bildtyp wird validiert
			$typ                = mime_content_type( $tmp_path );
			$errors['filename'] .= in_array( $typ, $allowed_types ) ? '' : 'The file type is not allowed';
			// Bildendung wird validiert
			$extension          = pathinfo( strtolower( $image['name'] ), PATHINFO_EXTENSION );
			$errors['filename'] .= in_array( $extension, $allowed_ext ) ? '' : 'The file extension is not allowed';
			// Bildgröße wird validiert
			$errors['filename'] .= $image['size'] > $max_size ? 'The image exceeds the maximum upload size' : '';
			// Wenn es keine Fehler gibt, wird ein Speicherort für das Bild festgelegt
			if ( $errors['filename'] === '' && $errors['alttext'] === '' ) {
				$article['filename'] = $image['name'];
				$save_to             = get_file_path( $image['name'], $path_to_img );
			}
		}
	}
	// Daten aus dem Formular auslesen
	$article['title']       = filter_input( INPUT_POST, 'title' );
	$article['summary']     = filter_input( INPUT_POST, 'summary' );
	$article['content']     = filter_input( INPUT_POST, 'content' );
	$article['user_id']     = filter_input( INPUT_POST, 'user', FILTER_VALIDATE_INT );
	$article['category_id'] = filter_input( INPUT_POST, 'category', FILTER_VALIDATE_INT );
	$article['published']   = filter_input( INPUT_POST, 'published', FILTER_VALIDATE_BOOLEAN ) ? 1 : 0;
	// Error-Meldung erstellen und zusätzliche Validierung
	$errors['title']    = is_text( $article['title'] ) ? '' : 'Title must be between 1 and 100 characters';
	$errors['summary']  = is_text( $article['summary'], 1, 200 ) ? '' : 'Summary must be between 1 and 200 characters';
	$errors['content']  = is_text( $article['content'], 1, 10000 ) ? '' : 'Content must be between 1 and 10.000 characters';
	$errors['user']     = is_user_id( $article['user_id'], $users ) ? '' : 'User not found';
	$errors['category'] = is_category_id( $article['category_id'], $categories ) ? '' : 'Category not found';

	$problems = implode( $errors );

	if ( ! $problems ) {
		// bindings beinhaltet alle Variablen die der Funktion Statement::bindValue übergeben werden (oder auch Statement::execute als Array)
		$bindings = $article;
		try {
			// Transaktion starten
			$pdo->beginTransaction();
			// Wenn ein Bild hochgeladen wurde, wird es gespeichert
			if ( $save_to ) {
				scale_and_copy( $tmp_path, $save_to );

				$sql  = "INSERT INTO images (filename, alttext) VALUES (:filename, :alttext)";
				$stmt = pdo_execute( $pdo, $sql, [ 'filename' => $article['filename'], 'alttext' => $article['alttext'] ] );
				// lastInsertId gibt die ID des zuletzt eingefügten Datensatzes zurück
				$bindings['images_id'] = $pdo->lastInsertId();
			}
			// Da ab hier die Bildtabelle aktualisiert wurde, werden die Bilddaten aus dem bindings Array entfernt.
			// Für das INSERT (Anlegen eines neuen Datensatzes) wird die id automatisch mit autoinkrement erstellt
			// und muss deshalb hier aus den bindings entfernt werden.
			unset( $bindings['filename'], $bindings['alttext'], $bindings['id'] );
			$sql = "INSERT INTO articles (title, summary, content, category_id, user_id, published, images_id) 
                    VALUES (:title, :summary, :content, :category_id, :user_id, :published, :images_id)";
			// Block, wenn ein Artikel bearbeitet wurde.
			if ( $id ) {
				// Wenn die ID vorhanden ist, wird ein Update durchgeführt und die id wird wieder in das bindings Array aufgenommen.
				$bindings['id'] = $id;
				$sql            = "UPDATE articles SET title = :title, summary = :summary, content = :content, 
                                category_id = :category_id, user_id = :user_id, published = :published, images_id = :images_id WHERE id = :id";
			}
			$stmt = pdo_execute( $pdo, $sql, $bindings );
			// Transaktion abschließen
			$pdo->commit();
			redirect( 'articles.php', [ 'success' => 'article successfully saved' ] );
		} catch ( PDOException $e ) {
			// Wenn ein Fehler auftritt, wird die Transaktion zurückgerollt und der Fehler ausgegeben
			$pdo->rollBack();
			$errors['issue'] = $e->getMessage();
		}
	}
}


?>

<?php include '../includes/header-admin.php'; ?>
<main class="p-10">
    <h2 class="text-3xl text-blue-500 mb-8 text-center"><?= $article['id'] ? 'Edit ' : 'New ' ?>Article</h2>
	<?php if ( $errors['issue'] ): ?>
      <p class="error text-red-500 bg-red-200 p-5 rounded-md"><?= $errors['issue'] ?></p>
	<?php endif ?>
    <form action="article.php?id=<?= e( $id ) ?>" method="POST" enctype="multipart/form-data" class="grid gap-6 mb-6 md:grid-cols-2 md:w-full">
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="title">Title</label>
            <input type="text" id="title" name="title" value="<?= e( $article['title'] ) ?>"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <span class="text-red-500"><?= $errors['title'] ?></span>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="summary">Summary</label>
            <textarea id="summary" name="summary"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= e( $article['summary'] ) ?></textarea>
            <span class="text-red-500"><?= $errors['summary'] ?></span>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="content">Content</label>
            <textarea id="content" rows="10" name="content"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= e( $article['content'] ) ?></textarea>
            <span class="text-red-500"><?= $errors['content'] ?></span>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="category">Category</label>
            <select id="category" name="category"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                <option>select category</option>
							<?php foreach ( $categories as $category ): ?>
                  <option value="<?= $category['id'] ?>" <?= $category['id'] === $article['category_id'] ? 'selected' : '' ?>><?= e( $category['name'] ) ?></option>
							<?php endforeach; ?>
            </select>
            <span class="text-red-500"><?= $errors['category'] ?></span>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="user_id">User</label>
            <select id="user_id" name="user"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                <option>select user</option>
							<?php foreach ( $users as $user ): ?>
                  <option value="<?= $user['id'] ?>" <?= $user['id'] === $article['user_id'] ? 'selected' : '' ?>><?= e( $user['forename'] ) ?> <?= e( $user['surname'] ) ?></option>
							<?php endforeach; ?>
            </select>
            <span class="text-red-500"><?= $errors['user'] ?></span>
					<?php if ( ! $article['filename'] ) : ?>
              <label class="block mb-2 text-sm font-medium text-gray-900" for="image_file pt-2">Image</label>
              <input type="file" id="image_file" accept="image/jpeg, image/png" name="image_file"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <span class="text-red-500"><?= $errors['filename'] ?></span>
					<?php else: ?>
              <img src="../uploads/<?= e( $article['filename'] ) ?>" alt="<?= e( $article['alttext'] ) ?>" class="w-full h-auto"/>
              <span>Alt Text: <?= e( $article['alttext'] ) ?></span>
              <a href="alt-text-edit.php?id=<?= e( $article['id'] ) ?>" class="text-blue-500">Edit Alt Text</a>
              <a href="img-delete.php?id=<?= e( $article['id'] ) ?>" class="text-red-500">Delete Image</a>
					<?php endif; ?>

            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="image_alt">Image Alt</label>
            <input type="text" id="image_alt" name="image_alt" value="<?= e( $article['alttext'] ?? '' ) ?>"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <span class="text-red-500"><?= $errors['alttext'] ?></span>
            <label class="block mb-2 text-sm font-medium text-gray-900 pt-2" for="published">Published</label>
            <input type="checkbox" id="published" name="published" <?= $article['published'] ? 'checked' : '' ?>
                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600">
        </div>
        <button type="submit" class="text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600">Save</button>
    </form>
</main>

<?php include '../includes/footer-admin.php'; ?>


