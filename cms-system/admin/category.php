<?php
require '../includes/validate.php';
require '../includes/db-connect.php';
require '../includes/functions.php';

$id     = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ) ?? null;
$errors = [
	'issue'       => '',
	'name'        => '',
	'description' => '',
];

$category = [
	'id'          => '',
	'name'        => '',
	'description' => '',
	'navigation'  => false
];

// Wenn eine ID vorhanden ist, dann wird die Kategorie aus der Datenbank geladen
if ( $id ) {
	$sql      = "SELECT id, name, description, navigation FROM category WHERE id = :id";
	$category = pdo_execute( $pdo, $sql, [ 'id' => $id ] )->fetch();
	// Wenn die Kategorie nicht gefunden wurde, wird der Benutzer zur Auflistung aller Kategorien umgeleitet
	// und über eine Fehlermeldung informiert.
	if ( ! $category ) {
		redirect( 'categories.php', [ 'error' => 'category not found' ] );
	}
}

// Wenn das Formular mit Daten abgeschickt wurde, dann werden die Daten validiert und gespeichert
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	// Die Daten werden aus dem Formular ausgelesen und validiert
	$category['name']        = filter_input( INPUT_POST, 'name' );
	$category['description'] = filter_input( INPUT_POST, 'description' );
	$category['navigation']  = filter_input( INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN );
	// Die Daten werden auf Länge und vorhanden validiert
	$errors['name']        = is_text( $category['name'], 1, 50 ) && ( ! empty( $category['name'] ) ) ? '' : 'Name must be between 1 and 50 characters';
	$errors['description'] = is_text( $category['description'], 1, 254 ) && ( ! empty( $category['description'] ) ) ? '' : 'Description must be between 1 and 254 characters';
	// Fehler werden in eine Zeichenkette zusammengefasst
	$problems = implode( array_filter( $errors ) );

	// Wenn es keine Fehler gibt, wird die Kategorie gespeichert und der Benutzer zur Kategorie-Liste umgeleitet
	if ( ! $problems ) {
		// Wenn die ID vorhanden ist, wird die Kategorie aktualisiert (UPDATE), ansonsten wird eine neue Kategorie in der Datenbank erstellt
		$sql = "INSERT INTO category (name, description, navigation) VALUES (:name, :description, :navigation)";
		if ( $id ) {
			$sql = "UPDATE category SET name = :name, description = :description, navigation = :navigation WHERE id = :id";
		}
		// Die zu speichernden Daten werden in ein Array zusammengefasst um später die Platzhalter zu ersetzten
		$bindings = [
			'name'        => $category['name'],
			'description' => $category['description'],
			'navigation'  => $category['navigation']
		];
		if ( $id ) {
			$bindings['id'] = $id;
		}
		// Die Daten werden in die Datenbank gespeichert und der Benutzer wird zur Kategorie-Liste umgeleitet
		try {
			pdo_execute( $pdo, $sql, $bindings );
			redirect( 'categories.php', [ 'success' => 'category successfully saved' ] );
		} catch ( PDOException $e ) {
			$errors['issue'] = 'Name already in use';
		}
	} else {
		$errors['issue'] = 'Please correct the following issues: ' . $problems;
	}
}

?>

<?php include '../includes/header-admin.php' ?>
<main class="container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5">
    <form class="w-full grid" action="category.php?id=<?= $id ?? '' ?>" method="POST">
        <h2 class="text-3xl text-blue-500 mb-8"><?= $id ? 'Edit ' : 'New ' ?>Category</h2>
			<?php if ( $errors['issue'] ): ?>
          <p class="error text-red-500 bg-red-200 p-5 rounded-md"><?= $errors['issue'] ?></p>
			<?php endif ?>

        <div class="p-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Name</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   type="text" id="name" name="name" value="<?= e( $category['name'] ) ?>">
            <span class="text-red-500"><?= $errors['name'] ?></span>
        </div>
        <div class="p-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="description">Description</label>
            <textarea
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    id="description" name="description"><?= e( $category['description'] ) ?></textarea>
            <span class="text-red-500"><?= $errors['description'] ?></span>
        </div>
        <div class="p-4">
            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600" type="checkbox"
                   id="navigation" name="navigation" <?= $category['navigation'] ? 'checked' : '' ?>>
            <label class="ms-2 text-sm font-medium text-gray-900" for="navigation">Navigation</label>
        </div>
        <button type="submit" class="text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600">Save</button>
    </form>
</main>
<?php include '../includes/footer-admin.php' ?>


