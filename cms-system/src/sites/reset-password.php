<?php

use EdvGraz\Mail\Email;
use EdvGraz\Validation\Validate;


$errors = [];

$token = filter_input( INPUT_GET, 'token' );
if ( ! $token ) {
	redirect( 'index.php' );
}

$user_id = $cms->getToken()->get_user_id( $token );
if ( ! $user_id ) {
	redirect( 'index.php' );
}
var_dump( $user_id );
var_dump( $token );
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$password = filter_input( INPUT_POST, 'password' );
	$confirm  = filter_input( INPUT_POST, 'confirm' );

	$errors['password'] = Validate::is_password( $password ) ? '' :
		'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number';
	$errors['confirm']  = $password === $confirm ? '' : 'Passwords do not match';
	$problems           = implode( $errors );

	if ( ! $problems ) {
		$cms->getUser()->updatePassword( $user_id, $password );
		$user = $cms->getUser()->fetch( $user_id );
		var_dump( $user );
		$subject = 'Password Reset';
		$message = 'Your password has been reset. If you did not request this, please contact us.';
		$mail    = new Email( $mail_config );
		$mail->send_mail( $mail_config['admin_mail'], $user['email'], $subject, $message );
		redirect( 'login.php', [ 'success' => 'password updated' ] );
	}
}

echo $twig->render( 'reset-password.html', [
	'errors' => $errors,
	'token'  => $token,
] );

