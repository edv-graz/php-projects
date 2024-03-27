<?php
require_once __DIR__ . '/../inc/all.php';
// Wenn jemand schon eingeloggt ist, wird er auf die Admin-Seite weitergeleitet.
if ( $login->logged_in ) {
	header( 'Location: /image-gallery/image-gallery/admin/admin.php' );
	exit;
}
// Wenn jemand nicht eingeloggt ist, wird er auf die Login-Seite weitergeleitet.
renderLogin( __DIR__ . '/views/login.view.php' );

// Wenn jemand das Formular abschickt, wird geprüft, ob die eingegebenen Daten korrekt sind.
// Die Hardcoded Logindaten sind in der Datei LoginSession.php in der Eigenschaft login_data gespeichert (admin, password).
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$user_name = $_POST['username'] ?? '';
	$password  = $_POST['password'] ?? '';
	if ( $user_name === $login->login_data['username'] && $password === $login->login_data['password'] ) {
		// die Methode login() wird aufgerufen, die die Session startet.
		$login->login();
		// Wenn die Daten korrekt sind, wird der Benutzer auf die Admin-Seite weitergeleitet.
		header( 'Location: /image-gallery/image-gallery/admin/admin.php' );
		exit;
	} else {
		echo '<p style="color: red;">Benutzername oder Passwort falsch.</p>';
	}
}

