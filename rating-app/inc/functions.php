<?php

function e( $string ) {
	return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
}

function render( $path, array $data = [] ): void {
	ob_start();
	extract( $data );
	require $path;
	$content = ob_get_contents();
	ob_end_clean();
	require __DIR__ . '/../views/layouts/main.view.php';
}

function renderAdmin( $path, array $data = [] ): void {
	ob_start();
	extract( $data );
	require $path;
	$content = ob_get_contents();
	ob_end_clean();
	require __DIR__ . '/../admin/views/layouts/main.view.php';
}

function renderLogin( $path, array $data = [] ): void {
	ob_start();
	extract( $data );
	require $path;
	$content = ob_get_contents();
	ob_end_clean();
	require __DIR__ . '/../login/views/layouts/main.view.php';
}

function get_file_path( string $filename, string $path ): string {
	$basename  = pathinfo( $filename, PATHINFO_FILENAME );
	$extension = pathinfo( $filename, PATHINFO_EXTENSION );
	$basename  = preg_replace( '/[^A-z0-9]/', '-', $basename );
	$i         = 0;
	while ( file_exists( $path . $filename ) ) {
		$i ++;
		$filename = $basename . $i . '.' . $extension;
	}

	return dirname( __DIR__ ) . $path . $filename;
}

function scale_and_copy( string $filename, string $save_to, $max_width = 1024, $max_height = 1024 ): bool {
	$width  = $max_width;
	$height = $max_height;

	// Get new sizes
	[ $orig_width, $orig_height, $mime_type ] = getimagesize( $filename );
	if ( $orig_width === null || $orig_height === null ) {
		return false;
	}

	// Calculate new size
	$ratio = $orig_width / $orig_height;
	if ( $width / $height > $ratio ) {
		$width = (int) round( $height * $ratio );
	} else {
		$height = (int) round( $width / $ratio );
	}

	$source = match ( $mime_type ) {
		IMAGETYPE_JPEG => imagecreatefromjpeg( $filename ),
		IMAGETYPE_PNG => imagecreatefrompng( $filename ),
		default => false,
	};

	$thumb = imagecreatetruecolor( $width, $height );

	// Resize
	imagecopyresampled( $thumb, $source, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height );

	// Output
	match ( $mime_type ) {
		IMAGETYPE_JPEG => imagejpeg( $thumb, $save_to ),
		IMAGETYPE_PNG => imagepng( $thumb, $save_to ),
		default => false,
	};
	imagejpeg( $thumb, $save_to );
	imagedestroy( $thumb );
	imagedestroy( $source );

	return true;
}
