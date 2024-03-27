<?php
require_once __DIR__ . '/../inc/all.php';

if ( ! $login->logged_in ) {
	header( 'Location: /image-gallery/image-gallery/login/login.php' );
	exit;
}

$images = new ImageGalleryCall( $pdo );

renderAdmin( __DIR__ . '/views/admin.view.php', [
	'images' => $images->fetchAll()
] );

