<?php
require_once __DIR__ . '/../inc/all.php';

$image_gallery_caller = new ImageGalleryCall( $pdo );
const MAX_FILE_SIZE = 1024 * 1024 * 2;
$allowed_extensions = [ 'jpg', 'jpeg', 'png' ];
$allowed_types      = [ 'image/jpeg', 'image/jpg', 'image/png' ];

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$image = $_FILES['image'] ?? null;
	$error = $image['error'] === 1 ? 'Das Bild ist zu Groß ' : '';
	if ( $image['error'] === UPLOAD_ERR_OK ) {
		$error     = $image['size'] > MAX_FILE_SIZE ? 'Das Bild überschreitet die maximale Uploadgröße ' : '';
		$typ       = mime_content_type( $image['tmp_name'] );
		$error     .= in_array( $typ, $allowed_types, true ) ? '' : 'Der Dateityp ist nicht erlaubt';
		$extension = pathinfo( strtolower( $image['name'] ), PATHINFO_EXTENSION );
		$error     .= in_array( $extension, $allowed_extensions, true ) ? '' : 'Die Dateierweiterung ist nicht erlaubt ';
		if ( ! $error ) {
			$image_gallery_caller->handleUpload( $image['name'], $_POST['alt'], $image['tmp_name'] );
		}
	} else {
		$error .= 'Es gabe einen Fehler beim Upload ';
	}
	renderAdmin( __DIR__ . '/views/admin.view.php', [
		'images' => $image_gallery_caller->fetchAll(),
		'error'  => $error
	] );
}

