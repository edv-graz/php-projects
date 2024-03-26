<?php
declare( strict_types=1 );
require_once 'inc/all.php';

$form   = [
	'sex'       => '',
	'firstname' => '',
	'lastname'  => '',
	'age'       => '',
	'email'     => '',
	'phone'     => '',
	'street'    => '',
	'city'      => '',
	'zip'       => '',
];
$errors = [
	'sex'       => '',
	'firstname' => '',
	'lastname'  => '',
	'age'       => '',
	'email'     => '',
	'phone'     => '',
	'street'    => '',
	'city'      => '',
	'zip'       => '',
];
$sex    = [ 'm', 'w', 'd' ];
$data   = [];
// Bild Upload ***************************************
$upload_dir         = __DIR__ . '/uploads/img/';
$max_file_size      = 1920 * 1080 * 2; // 4MB
$allowed_types      = [ 'image/jpeg', 'image/png' ];
$allowed_extensions = [ 'jpg', 'jpeg', 'png' ];
$img_error          = '';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	// Formular Validierung ***************************************
	$filters['firstname'] = FILTER_UNSAFE_RAW;
	$filters['lastname']  = FILTER_UNSAFE_RAW;
	$filters['email']     = FILTER_VALIDATE_EMAIL;
	$filters['phone']     = FILTER_SANITIZE_NUMBER_INT;
	$filters['age']       = [
		'filter'  => FILTER_VALIDATE_INT,
		'options' => [ 'min_range' => 12, 'max_range' => 100 ],
	];
	$filters['street']    = FILTER_UNSAFE_RAW;
	$filters['city']      = FILTER_UNSAFE_RAW;
	$filters['zip']       = FILTER_SANITIZE_NUMBER_INT;
	$form                 = filter_input_array( INPUT_POST );
	$data                 = filter_var_array( $form, $filters );
	$form_sex             = $_POST['sex'] ?? '';
	$sex_valid            = in_array( $form_sex, $sex );
	$data['sex']          = $sex_valid;
	foreach ( $data as $key => $value ) {
		if ( empty( $value ) ) {
			$errors[ $key ] = 'Invalid Input in ' . $key . ' field';
		} else {
			$errors[ $key ] = '';
		}
	}
	if ( $sex_valid === false ) {
		$errors['sex'] = 'please select a gender';
	}
	$invalid = trim( implode( $errors ) );
	// Bild Upload ***************************************
	// Auslesen des Bildes
	$image = $_FILES['image'] ?? null;
	// Kontrolle, ob das Bild zu groß ist
	$img_error = $image['error'] === 1 ? 'Image is too big ' : '';
	if ( $image['error'] === UPLOAD_ERR_OK ) {
		$img_error = $image['size'] > $max_file_size ? 'File too large ' : '';
		// Kontrolle ob der Mime-Type des Bildes erlaubt ist
		$typ       = mime_content_type( $image['tmp_name'] );
		$img_error .= in_array( $typ, $allowed_types, true ) ? '' : 'File type not allowed';
		// Kontrolle, ob die Dateierweiterung erlaubt ist
		$extension = pathinfo( strtolower( $image['name'] ), PATHINFO_EXTENSION );
		$img_error .= in_array( $extension, $allowed_extensions, true ) ? '' : 'File extension not allowed ';
		// Verschieben des Bildes in den Upload-Ordner
		if ( ! $img_error ) {
			$filename    = $image['name'];
			$destination = get_file_path( $filename, $upload_dir );
			$moved       = move_uploaded_file( $image['tmp_name'], $destination );
		}
	}
	if ( $invalid !== '' || $img_error !== '' ) {
		render( __DIR__ . '/views/index.view.php', [
			'data'      => $data,
			'errors'    => $errors,
			'img_error' => $img_error,
		] );
	} else {

		render( __DIR__ . '/views/cv.view.php', [
			'data'     => $data,
			'img_name' => $filename
		] );
	}


}


