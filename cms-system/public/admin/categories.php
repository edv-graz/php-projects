<?php
require '../../src/bootstrap.php';

$data['categories'] = $cms->getCategory()->getAll();

$data['error']   = filter_input( INPUT_GET, 'error' ) ?? '';
$date['success'] = filter_input( INPUT_GET, 'success' ) ?? '';

echo $twig->render( 'admin/categories.html', $data );



