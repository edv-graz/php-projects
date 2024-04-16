<?php
require '../src/bootstrap.php';

$search_term = filter_input( INPUT_GET, 'search' );
$per_page    = filter_input( INPUT_GET, 'per_page', FILTER_VALIDATE_INT ) ?? 3;
$offset      = filter_input( INPUT_GET, 'offset', FILTER_VALIDATE_INT ) ?? 0;
$articles    = [];
$count       = 0;

if ( ! empty( $search_term ) ) {
	$count = $cms->getArticle()->count( $search_term );
	if ( $count > 0 ) {
		$articles = $cms->getArticle()->limit( $search_term, $per_page, $offset );
	}
}
$total_pages  = '';
$current_page = '';
if ( $count > $per_page ) {
	$total_pages  = ceil( $count / $per_page );
	$current_page = ceil( $offset / $per_page ) + 1;
}

$navigation  = $cms->getCategory()->fetchNavigation();
$section     = '';
$title       = 'Search Results for ' . $search_term;
$description = 'Search Results for ' . $search_term . ' the IT-News-Blog';

echo $twig->render( 'search.html', compact( 'navigation', 'section', 'title', 'description', 'search_term', 'articles', 'count', 'per_page', 'offset', 'total_pages', 'current_page' ) );









