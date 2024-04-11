<?php

use JetBrains\PhpStorm\NoReturn;

function e( $string ): string {
	return htmlspecialchars( $string, ENT_QUOTES, 'UTF-8', false );
}


function format_date( string $string ): string {
	$date = date_create_from_format( 'Y-m-d H:i:s', $string );

	return $date->format( 'd M. Y' );
}

#[NoReturn] function redirect( string $url, array $params = [], $status_code = 302 ): void {
	$query = $params ? '?' . http_build_query( $params ) : '';
	header( "Location: $url$query", $status_code );
	exit;
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

	return $path . $filename;
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


