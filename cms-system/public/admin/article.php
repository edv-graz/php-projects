<?php
require '../../src/bootstrap.php';

use EdvGraz\Validation\Validate;

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
	'image_id'    => null,
	'image_file'  => '',
	'image_alt'   => '',
];

$errors = [
	'issue'      => '',
	'title'      => '',
	'summary'    => '',
	'content'    => '',
	'user'       => '',
	'category'   => '',
	'image_file' => '',
	'image_alt'  => '',
];
if ( $id ) {
	$article = $cms->getArticle()->fetch( $id, false );
	if ( ! $article ) {
		redirect( 'articles.php', [ 'error' => 'article not found' ] );
	}
}
$categories = $cms->getCategory()->getAll();
$users      = $cms->getUser()->getAll();

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	// Bild auslesen
	if ( isset( $_FILES['image_file'] ) ) {
		$image = $_FILES['image_file'];
		// Bildgröße validieren
		$errors['filename'] = $image['error'] === 1 ? 'The image is to large ' : '';
		// Wenn ein Bild hochgeladen wurde, dann wird es validiert
		if ( $tmp_path && $image['error'] === UPLOAD_ERR_OK ) {
			// Alt-Text wird gesetzt
			$article['image_alt'] = filter_input( INPUT_POST, 'image_alt' );
			// Alt-Text validieren
			$errors['image_alt'] = Validate::is_text( $article['image_alt'], 1, 254 ) ? '' : 'Alt text must be between 1 and 254 characters';
			// Bildtyp wird validiert
			$typ                  = mime_content_type( $tmp_path );
			$errors['image_file'] .= in_array( $typ, MEDIA_TYPES ) ? '' : 'The file type is not allowed';
			// Bildendung wird validiert
			$extension            = pathinfo( strtolower( $image['name'] ), PATHINFO_EXTENSION );
			$errors['image_file'] .= in_array( $extension, FILE_EXTENSIONS ) ? '' : 'The file extension is not allowed';
			// Bildgröße wird validiert
			$errors['image_file'] .= $image['size'] > MAX_FILE_SIZE ? 'The image exceeds the maximum upload size' : '';
			// Wenn es keine Fehler gibt, wird ein Speicherort für das Bild festgelegt
			if ( $errors['image_file'] === '' && $errors['image_alt'] === '' ) {
				$article['image_file'] = $image['name'];
				$save_to               = get_file_path( $image['name'], UPLOAD_DIR );
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

	// HTML-Code wird bereinigt
	$purifier = new HTMLPurifier();
	// Es werden nur die in der set Methode genannten HTML-Tags zugelassen
	$purifier->config->set( 'HTML.Allowed', 'p,br,strong,em,a[href],i,u,ul,ol,li,img[src|alt]' );
	// Purifier wird auf den Content angewendet
	$article['content'] = $purifier->purify( $article['content'] );

	// Error-Meldung erstellen und zusätzliche Validierung
	$errors['title']    = Validate::is_text( $article['title'] ) ? '' : 'Title must be between 1 and 100 characters';
	$errors['summary']  = Validate::is_text( $article['summary'], 1, 200 ) ? '' : 'Summary must be between 1 and 200 characters';
	$errors['content']  = Validate::is_text( $article['content'], 1, 10000 ) ? '' : 'Content must be between 1 and 10.000 characters';
	$errors['user']     = Validate::is_user_id( $article['user_id'], $users ) ? '' : 'User not found';
	$errors['category'] = Validate::is_category_id( $article['category_id'], $categories ) ? '' : 'Category not found';

	$problems = implode( $errors );

	if ( ! $problems ) {
		// bindings beinhaltet alle Variablen die der Funktion Statement::bindValue übergeben werden (oder auch Statement::execute als Array)
		$bindings = $article;
		unset( $bindings['author'], $bindings['category'], $bindings['created'] );
		if ( $save_to ) {
			scale_and_copy( $tmp_path, $save_to );
			$image_id             = $cms->getImage()->save( $bindings['image_file'], $bindings['image_alt'] );
			$bindings['image_id'] = $image_id;
		}
		unset( $bindings['image_file'], $bindings['image_alt'] );
		if ( $id ) {
			$cms->getArticle()->update( $bindings );
			redirect( 'articles.php', [ 'success' => 'Article successfully updated ' ] );
		} else {
			unset( $bindings['id'] );
			$cms->getArticle()->push( $bindings );
			redirect( 'articles.php', [ 'success' => 'Article successfully saved' ] );
		}
	}
}

echo $twig->render( 'admin/article.html', [
	'article'    => $article,
	'categories' => $categories,
	'users'      => $users,
	'errors'     => $errors,
	'id'         => $id,
] );








