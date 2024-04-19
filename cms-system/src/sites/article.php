<?php


if ( ! $id ) {
	include APP_ROOT . '/public/page_not_found';
}


$data['article'] = $cms->getArticle()->fetch( $id );
if ( ! $data['article'] ) {
	include APP_ROOT . '/public/page_not_found.php';
}

$data['navigation']  = $cms->getCategory()->fetchNavigation();
$data['title']       = $data['article']['title'];
$data['description'] = $data['article']['summary'];
$data['section']     = $data['article']['category_id'];

echo $twig->render( 'article.html', $data );







