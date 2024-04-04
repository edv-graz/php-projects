<?php
$dsn       = 'mysql:host=localhost:8889;dbname=cms_edvgraz';
$user_name = 'cms_edvgraz';
$password  = '';
$options   = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
	$pdo = new PDO( $dsn, $user_name, $password, $options );
} catch ( PDOException $e ) {
	throw new PDOException( $e->getMessage(), $e->getCode() );
}