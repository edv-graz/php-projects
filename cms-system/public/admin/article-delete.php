<?php
require '../../src/bootstrap.php';

$id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $id ) {
	redirect( 'articles.php', [ 'error' => 'Article not found (id)' ] );
}

$sql     = "SELECT a.title, a.images_id, i.filename FROM articles a LEFT JOIN images i ON a.images_id = i.id WHERE a.id = :id";
$article = $cms->getArticle()->fetch( $id );
if ( ! $article ) {
	redirect( 'articles.php', [ 'error' => 'Article not found' ] );
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	try {
		if ( $article['images_id'] ) {
			$sql = "UPDATE articles SET images_id = NULL WHERE id = :id";
			$cms->getArticle()->update( $id );
			$sql = "DELETE FROM images WHERE id = :id";
			$cms->getImage()->delete( $article['images_id'] );
			unlink( UPLOAD_DIR . $article['filename'] );
		}
		$cms->getArticle()->delete( $id );
		redirect( 'articles.php', [ 'success' => 'Article deleted' ] );
	} catch ( PDOException $e ) {
		redirect( 'articles.php', [ 'error' => 'Article could not be deleted' ] );
	}
}

?>
<?php include '../includes/header-admin.php' ?>
<main class="container mx-auto p-10 flex flex-col items-center">
    <form method="post" action="article-delete.php?id=<?= $id ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <p class="text-blue-600 text-2xl mb-4">Are you sure you want to delete this article?</p>
        <button type="submit" class="bg-pink-600 text-white p-3 rounded-md w-1/3">Yes</button>
        <button type="submit" formaction="articles.php" class="bg-blue-500 text-white p-3 rounded-md w-1/3">No</button>
    </form>
</main>
<?php include '../includes/footer-admin.php' ?>
