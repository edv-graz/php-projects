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
