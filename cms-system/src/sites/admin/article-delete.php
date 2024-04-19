<?php

is_admin( $session->role );

if ( ! $id ) {
	redirect( 'articles', [ 'error' => 'Article not found (id)' ] );
}

$article = $cms->getArticle()->fetch( $id );
if ( ! $article ) {
	redirect( 'articles', [ 'error' => 'Article not found' ] );
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	try {
		if ( $article['images_id'] ) {
			$cms->getArticle()->update( $id );
			$cms->getImage()->delete( $article['images_id'] );
			unlink( UPLOAD_DIR . $article['filename'] );
		}
		$cms->getArticle()->delete( $id );
		redirect( DOC_ROOT . 'articles', [ 'success' => 'Article deleted' ] );
	} catch ( PDOException $e ) {
		redirect( DOC_ROOT . 'articles', [ 'error' => 'Article could not be deleted' ] );
	}
}

echo $twig->render( 'admin/article-delete.html', [
	'article' => $article,
	'id'      => $id,
] );




