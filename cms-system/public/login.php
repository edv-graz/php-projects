<?php

use EdvGraz\Validation\Validate;

require '../src/bootstrap.php';

$data['navigation'] = $cms->getCategory()->fetchNavigation();
$mail               = '';
$errors             = [];

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$mail     = filter_input( INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL );
	$password = filter_input( INPUT_POST, 'password' );
	if ( ! $mail ) {
		$errors['email'] = 'Please enter a valid email address';
	}
	$errors['password'] = Validate::is_password( $password ) ? '' : 'Please enter a valid password';
	$problems           = implode( $errors );
	if ( empty( $problems ) ) {
		$user = $cms->getUser()->login( $mail, $password );
		if ( $user and $user['role'] == 'disabled' ) {
			$errors['login'] = 'Your account is disabled';
		} elseif ( $user ) {
			$cms->getSession()->createSession( $user );
			redirect( 'user.php', [ 'id' => $user['id'] ] );

		} else {
			$errors['login'] = 'Login failed';
		}
	}
}
$data['email']  = $mail;
$data['errors'] = $errors;

echo $twig->render( 'login.html', $data );

