<?php
require_once __DIR__ . '/inc/all.php';

$images = new ImageGalleryCall( $pdo );

render( __DIR__ . '/views/index.view.php', [
	'images' => $images->fetchAll()
] );



