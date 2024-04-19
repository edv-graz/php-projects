<?php


is_admin( $session->role );

if ( ! $id ) {
	redirect( 'categories', [ 'error' => 'Category not found (id)' ] );
}

$category = $cms->getCategory()->fetch( $id );

if ( ! $category ) {
	redirect( 'categories', [ 'error' => 'Category not found' ] );
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	try {
		$cms->getCategory()->delete( $id );
		redirect( DOC_ROOT . 'admin/categories/', [ 'success' => 'Category deleted' ] );
	} catch ( PDOException $e ) {
		if ( $e->errorInfo[1] === 1451 ) {
			redirect( DOC_ROOT . 'admin/categories/', [ 'error' => 'Category ' . $category['name'] . ' can not be removed, there are Articles in the Category' ] );
		}
	}
}

echo $twig->render( 'admin/category-delete.html', [
	'category' => $category,
	'id'       => $id,
] );




