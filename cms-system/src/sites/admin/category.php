<?php

is_admin( $session->role );

use EdvGraz\Validation\Validate;

//$id     = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ) ?? '';
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

if ( $id ) {
	$category = $cms->getCategory()->fetch( $id );
	if ( ! $category ) {
		redirect( 'categories.php', [ 'error' => 'category not found' ] );
	}
}
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$category['name']        = filter_input( INPUT_POST, 'name' );
	$category['description'] = filter_input( INPUT_POST, 'description' );
	$category['navigation']  = filter_input( INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN ) ?? 0;
	$category['seo_title'] = create_seo_name( $category['name'] );
	// Die Daten werden auf Länge und vorhanden validiert
	$errors['name']        = Validate::is_text( $category['name'], 1, 50 ) && ( ! empty( $category['name'] ) ) ? ''
		: 'Name must be between 1 and 50 characters';
	$errors['description'] = Validate::is_text( $category['description'], 1, 254 ) && ( ! empty( $category['description'] ) ) ? ''
		: 'Description must be between 1 and 254 characters';

	$problems = implode( $errors );

	if ( ! $problems ) {
		$bindings = [
			'name'        => $category['name'],
			'description' => $category['description'],
			'navigation'  => $category['navigation'],
			'seo_title' => $category['seo_title'],
		];
		try {
			if ( $id ) {
				$bindings['id'] = $id;
				$cms->getCategory()->update( $bindings );
				redirect( DOC_ROOT . 'admin/categories/', [ 'success' => 'category successfully saved' ] );
			} else {
				$cms->getCategory()->push( $bindings );
				redirect( DOC_ROOT . 'admin/categories/', [ 'success' => 'category successfully saved' ] );
			}
		} catch ( PDOException $e ) {
			$errors['issue'] = 'Name already in use';
		}
	} else {
		$errors['issue'] = 'Please correct the following issues: ' . $problems;
	}
}

echo $twig->render( 'admin/category.html', [
	'category' => $category,
	'errors'   => $errors,
	'id'       => $id
] );






