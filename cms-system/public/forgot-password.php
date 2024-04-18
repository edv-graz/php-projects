<?php

require '../src/bootstrap.php';

use EdvGraz\Mail\Email;

$navigation = $cms->getCategory()->fetchNavigation();
$sent       = false;
$error      = '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
	if ( empty( $email ) ) {
		$error = 'Please enter a valid email address';
	}
	if ( $error === '' ) {
		$user_id = $cms->getUser()->getUserIdByEmail( $email );
		if ( $user_id ) {
			$token   = $cms->getToken()->save_token( $user_id );
			$link    = DOMAIN . DOC_ROOT . 'reset-password.php?token=' . $token;
			$to      = $email;
			$subject = 'Password reset';
			$message = 'Please click on the following link to reset your password: <a href"' . $link . '">' . $link . '</a>';
			$mail    = new Email( $mail_config );
			$sent    = $mail->send_mail( $mail_config['admin_mail'], $to, $subject, $message );
		}
	}
}

echo $twig->render( 'forgot-password.html', [
	'navigation' => $navigation,
	'error'      => $sent,
	'sent'       => $sent,
] );


