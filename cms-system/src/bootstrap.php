<?php

use EdvGraz\CMS\CMS;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;


define( 'APP_ROOT', dirname( __DIR__, 1 ) );

require APP_ROOT . '/config/config.php';
require APP_ROOT . '/src/functions.php';
require APP_ROOT . '/vendor/autoload.php';


// Definiere Objekt zum Speichern von Erweiterungen und Konfigurationen
$loader = new FilesystemLoader( APP_ROOT . '/templates' );
// Erstelle eine neue Instanz von Twig
$twig = new Environment( $loader, [
	'cache' => APP_ROOT . '/templates/cache',
	'debug' => DEV_MODE,
] );
// Konstante mit public Ordner (config.php) als globale Variable verfügbar machen
$twig->addGlobal( 'doc_root', DOC_ROOT );
// Wenn DEV_MODE aktiv ist, wird das Debug-Plugin hinzugefügt
if ( DEV_MODE ) {
	$twig->addExtension( new DebugExtension() );
}

$cms = new CMS( $dsn, $user_name, $password );
unset( $dsn, $user_name, $password );

$session = $cms->getSession();
$twig->addGlobal( 'session', $session );


