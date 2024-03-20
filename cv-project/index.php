<?php
require_once 'inc/all.php';

render( __DIR__ . '/views/index.view.php', [
	'data'   => $data ?? '',
	'errors' => $errors ?? ''
] );