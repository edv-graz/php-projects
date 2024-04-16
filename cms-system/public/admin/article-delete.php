<?php
require '../../src/bootstrap.php';

$id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $id ) {
	redirect( 'articles.php', [ 'error' => 'Article not found (id)' ] );
}

$article = $cms->getArticle()->fetch( $id );
if ( ! $article ) {
	redirect( 'articles.php', [ 'error' => 'Article not found' ] );
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	try {
		if ( $article['images_id'] ) {
			$cms->getArticle()->update( $id );
			$cms->getImage()->delete( $article['images_id'] );
			unlink( UPLOAD_DIR . $article['filename'] );
		}
		$cms->getArticle()->delete( $id );
		redirect( 'articles.php', [ 'success' => 'Article deleted' ] );
	} catch ( PDOException $e ) {
		redirect( 'articles.php', [ 'error' => 'Article could not be deleted' ] );
	}
}

echo $twig->render( 'admin/article-delete.html', [
	'article' => $article,
	'id'      => $id,
] );




