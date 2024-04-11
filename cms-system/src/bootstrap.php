<?php

define( 'APP_ROOT', dirname( __DIR__, 1 ) );
require APP_ROOT . '/config/config.php';
require APP_ROOT . '/src/functions.php';

spl_autoload_register( function ( $class ) {
	require APP_ROOT . '/src/classes/' . $class . '.php';
} );

$cms = new CMS( $dsn, $user_name, $password );
//$cms = new CMS( $dsn, $user_name, $password );
unset( $dsn, $user_name, $password );



