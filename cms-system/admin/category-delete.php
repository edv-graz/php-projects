<?php

require '../includes/db-connect.php';
require '../includes/functions.php';

// kontrolliere, ob eine ID übergeben wurde
$id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $id ) {
	redirect( 'categories.php', [ 'error' => 'Category not found (id)' ] );
}
// kontrolliere, ob die ID bzw. Kategorie in der Datenbank existiert
$sql = "SELECT id, name FROM category WHERE id = :id";
// fetchColumn gibt die erste Spalte der gefundenen Zeile zurück (id).
$category = pdo_execute( $pdo, $sql, [ 'id' => $id ] )->fetch();

if ( ! $category ) {
	redirect( 'categories.php', [ 'error' => 'Category not found' ] );
}
// wenn die Kategorie existiert, Lösche Daten aus der Datenbank
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$sql = "DELETE FROM category WHERE id = :id";
	try {
		pdo_execute( $pdo, $sql, [ 'id' => $id ] );
		redirect( 'categories.php', [ 'success' => 'Category deleted' ] );
	} catch ( PDOException $e ) {
		if ( $e->errorInfo[1] === 1451 ) {
			redirect( 'categories.php', [ 'error' => 'Category ' . $category['name'] . ' can not be removed, there are Articles in the Category' ] );
		}
	}
}

?>

<?php include '../includes/header-admin.php' ?>
<main class="container mx-auto p-10 flex flex-col items-center">
    <form method="post" action="category-delete.php?id=<?= $id ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <p class="text-blue-600 text-2xl mb-4">Are you sure you want to delete this category?</p>
        <button type="submit" class="bg-pink-600 text-white p-3 rounded-md w-1/3">Yes</button>
        <button type="submit" formaction="categories.php" class="bg-blue-500 text-white p-3 rounded-md w-1/3">No</button>
    </form>
</main>
<?php include '../includes/footer-admin.php' ?>
