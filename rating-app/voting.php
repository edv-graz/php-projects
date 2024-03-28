<?php
require_once 'inc/all.php';
$product_caller  = new ProductDatabaseCaller( $pdo ) ?? null;
$errors = '';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	//extract( $_POST );
	// Validate and sanitize input
	$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
	$vote = isset($_POST['vote']) ? $_POST['vote'] : '';
	$product = $product_caller->fetchProductById( $product_id );

	$errors .= $product ? '' : 'Product not found';

	if ( $product ) {
		if ( $vote === 'up' ) {
			$product->upVote();
		} elseif ( $vote === 'down' ) {
			$product->downVote();
		}
	}
	$changed = $product_caller->handleChange( $product->getUpVotes(), $product->getDownVotes(), $product_id );
	$errors .= $changed ? '' : 'Error updating product';
}
render( __DIR__ . '/views/index.view.php', [
	'products' => $product_caller->fetchAll() ?? [],
	'login'    => $login,
	'errors' => $errors
] );
/*require_once 'inc/all.php';

// Check for existing cookie data
$products_cookie = isset( $_COOKIE['products'] ) ? json_decode( $_COOKIE['products'], true ) : null;

// Initialize product caller only if needed
$product_caller = null;

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	extract( $_POST );

	// Ensure product caller is available for database interaction
	if ( ! $product_caller ) {
		$product_caller = new ProductDatabaseCaller( $pdo );
	}
	var_dump( $products_cookie );
	$product = $product_caller->fetchProductById( $product_id );

	if ( $product ) {
		if ( $vote === 'up' ) {
			$product->upVote();
		} elseif ( $vote === 'down' ) {
			$product->downVote();
		}

		// Update database and cookie
		$product_caller->handleChange( $product->getUpVotes(), $product->getDownVotes(), $product_id );
		$products_cookie[ $product_id ] = $product;
		setcookie( 'products', json_encode( $products_cookie ) );
	}
} else {
	// Fetch products from database only if cookie is not present
	if ( ! $products_cookie ) {
		$product_caller = new ProductDatabaseCaller( $pdo );
		$products       = $product_caller->fetchAll();
		setcookie( 'products', json_encode( $products ) );
	} else {
		$products = $products_cookie;
	}
}

render( __DIR__ . '/views/index.view.php', [
	'products' => $products ?? '',
	'login'    => $login
] );*/
