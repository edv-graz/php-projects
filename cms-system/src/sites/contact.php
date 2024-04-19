<?php


use EdvGraz\Mail\Email;
use EdvGraz\Validation\Validate;

$from    = '';
$text    = '';
$errors  = [];
$success = '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );
	$text = filter_input( INPUT_POST, 'text' );
	if ( ! $from ) {
		$errors['mail'] = 'E-Mail is not valid';
	}
	$errors['text'] = Validate::is_text( $text, 1, 1000 ) ? null : 'Text must be between 1 and 1000 characters';
	$problems       = implode( $errors );
	if ( empty( $problems ) ) {
		$subject = "Contact Mail from {$from}";
		$mail    = new Email( $mail_config );
		$mail->send_mail( $from, $mail_config['admin_mail'], $subject, $text );
		$success = 'Mail sent';
	} else {
		$errors['issue'] = 'Mail not sent';
	}
}

$data['navigation'] = $cms->getCategory()->fetchNavigation();
$data['from']       = $from;
$data['text']       = $text;
$data['errors']     = $errors;
$data['success']    = $success;

echo $twig->render( 'contact.html', $data );

