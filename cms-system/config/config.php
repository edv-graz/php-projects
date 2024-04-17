<?php

const DEV_MODE    = true;
const DOC_ROOT    = '/cms-system/public/';
const ROOT_FOLDER = '/public/';
//Database connection
$type      = 'mysql';
$host      = 'localhost';
$port      = '8889';
$dbname    = 'cms_edvgraz';
$user_name = 'cms_edvgraz';
$password  = '';
$dsn       = "$type:host=$host:$port;dbname=$dbname";

// File upload
const MEDIA_TYPES     = [ 'image/jpeg', 'image/png' ];
const FILE_EXTENSIONS = [ 'jpg', 'jpeg', 'png' ];
const MAX_FILE_SIZE   = 1024 * 1024 * 2;
define( "UPLOAD_DIR", dirname( __DIR__, 1 ) . ROOT_FOLDER . 'uploads/' );

$mail_config = [
	'host'       => 'vela.ssl.hosttech.eu',     // smtp server - Postausgangsserver
	'port'       => 465,                        // Port kann auch 587 sein
	'username'   => 'cms@mitterwallner.net',    // Benutzername des Mail Accounts
	'password'   => 'kuv!ueh4gvm0jpn4EMB',  // Passwort des Mail Accounts
	'sec'        => 'ssl',                      // Verschlüsselung kann auch tls sein
	'admin_mail' => 'cms@mitterwallner.net',    // Empfänger der Mail
	'debug'      => ( DEV_MODE ? 2 : 0 )        // Debug Level, zeigt nach dem Senden Bericht auf der Webseite an
];



