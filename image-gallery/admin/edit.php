<?php

require_once __DIR__ . '/../inc/all.php';
$image_gallery_caller = new ImageGalleryCall( $pdo );

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	if ( isset( $_POST['id'] ) ) {
		$id    = $_POST['id'];
		$image = $image_gallery_caller->fetchImageById( $id );
		renderAdmin( __DIR__ . '/views/edit.view.php', [
			'image' => $image,
		] );
	} else {
		$alt     = $_POST['alt'];
		$id      = $_POST['img-id'];
		$changed = $image_gallery_caller->handleChange( $alt, $id );
		if ( ! $changed ) {
			$edit_error = 'Es gab einen Fehler beim Ändern des Alt-Textes';
		}
		renderAdmin( __DIR__ . '/views/admin.view.php', [
			'images'     => $image_gallery_caller->fetchAll(),
			'edit_error' => $edit_error ?? '',
		] );
	}
}


