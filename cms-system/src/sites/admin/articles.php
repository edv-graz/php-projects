<?php

is_admin( $session->role );
$articles = $cms->getArticle()->getAll( null, false );
$error    = filter_input( INPUT_GET, 'error' ) ?? '';
$success  = filter_input( INPUT_GET, 'success' ) ?? '';

echo $twig->render( 'admin/articles.html', [
	'articles' => $articles,
	'error'    => $error,
	'success'  => $success,
] );




