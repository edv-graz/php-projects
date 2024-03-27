<?php
require_once __DIR__ . '/../inc/all.php';
// Die Methode logout() wird aufgerufen und die Session wird zerstört
$login->logout();
// Die Methode renderLogin() wird aufgerufen und die login.view.php wird gerendert
renderLogin( __DIR__ . '/views/login.view.php' );

