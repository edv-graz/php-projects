<?php
require_once __DIR__ . '/../inc/all.php';
$image_gallery_caller = new ImageGalleryCall( $pdo );

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$id = $_POST['id'] ?? null;
	if ( $id ) {
		$image_gallery_caller->deleteImage( $id );
	} else {
		$delete_error = 'Es gab einen Fehler beim Löschen';
	}
	renderAdmin( __DIR__ . '/views/admin.view.php', [
		'images'       => $image_gallery_caller->fetchAll(),
		'delete_error' => $elete_error ?? ''
	] );
}

