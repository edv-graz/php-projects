<?php


use EdvGraz\CMS\CMS;

define( 'APP_ROOT', dirname( __DIR__, 1 ) );
require APP_ROOT . '/config/config.php';
require APP_ROOT . '/src/functions.php';

spl_autoload_register( function ( $class ) {
	// project-specific namespace prefix
	$prefix = 'EdvGraz\\CMS\\';
	// base directory for the namespace prefix
	$base_dir = __DIR__ . '/classes/CMS/';
	// does the class use the namespace prefix?
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		// no, move to the next registered autoloader
		return;
	}

	// get the relative class name
	$relative_class = substr( $class, $len );

	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';
	var_dump( $file );
	// if the file exists, require it
	if ( file_exists( $file ) ) {
		require $file;
	}
	//require APP_ROOT . '/src/classes/CMS/' . $class . '.php';
} );

$cms = new CMS( $dsn, $user_name, $password );
unset( $dsn, $user_name, $password );



