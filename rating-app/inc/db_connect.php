<?php
try {
	$dsn       = 'mysql:host=localhost:8889;dbname=edvgraz_products';
	$user_name = 'edvgraz_products';
	$password  = '';
	$options   = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	];

	$pdo = new PDO( $dsn, $user_name, $password, $options );
} catch ( PDOException $e ) {
	echo 'Datenbank Verbindung gescheitert: ' . $e->getMessage();
}



