<?php

is_admin( $session->role );
$data['categories_count'] = $cms->getCategory()->count();
$data['articles_count']   = $cms->getArticle()->count();
$data['users_count']      = $cms->getUser()->count();


echo $twig->render( 'admin/index.html', $data );


