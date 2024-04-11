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
if ( $count > $per_page ) {
	$total_pages  = ceil( $count / $per_page );
	$current_page = ceil( $offset / $per_page ) + 1;
}

$navigation  = $cms->getCategory()->fetchNavigation();
$section     = '';
$title       = 'Search Results for ' . $search_term;
$description = 'Search Results for ' . $search_term . ' the IT-News-Blog';

?>

<?php include 'includes/header.php'; ?>
<main class="container mx-auto">
    <section class="flex flex-col justify-center items-center p-10">
        <h1 class="text-3xl font-bold mt-4">Search Results</h1>
        <form action="search.php" method="GET" class="mt-4">
            <label for="search" class="sr-only">Search</label>
            <input type="search" name="search" id="search" class="border p-2" value="<?= $search_term ?>">
            <button type="submit" class="bg-blue-500 text-white p-2">Search</button>
        </form>
        <!-- ... -->
    </section>
    <section class="flex flex-wrap p-8" id="content">
			<?php foreach ( $articles as $article ) : ?>
          <article class="w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4">
              <a href="article.php?id=<?= $article['id'] ?>">
                  <img src="uploads/<?= e( $article['image_file'] ?? 'blank.png' ) ?>"
                       alt="<?= e( $article['image_alt'] ) ?>">
                  <h2 class="text-blue-500 text-2xl pt-3 pb-1.5"><?= e( $article['title'] ) ?></h2>
                  <p class="text-gray-500 pb-2.5"><?= e( $article['summary'] ) ?></p>
              </a>
              <p class="credit text-xs">
                  Posted in
                  <a class="text-pink-400" href="category.php?id=<?= $article['category_id'] ?>">
										<?= e( $article['category'] ) ?>
                  </a>
                  by <a class="text-pink-400" href="user.php?id=<?= $article['user_id'] ?>">
									<?= e( $article['author'] ) ?>
                  </a>
              </p>
          </article>
			<?php endforeach; ?>
    </section>
	<?php if ( $count > $per_page ) : ?>
      <section class="flex justify-center items-center p-4">
          <nav>
              <ul class="flex justify-center items-center">
								<?php if ( $current_page > 1 ) : ?>
                    <li class="m-2">
                        <a href="search.php?search=<?= $search_term ?>&per_page=<?= $per_page ?>&offset=<?= $offset - $per_page ?>"
                           class="p-2 bg-blue-500 text-white">Previous</a>
                    </li>
								<?php endif; ?>
								<?php for ( $i = 1; $i <= $total_pages; $i ++ ) : ?>
                    <li>
                        <a href="search.php?search=<?= $search_term ?>&per_page=<?= $per_page ?>&offset=<?= ( $i - 1 ) * $per_page ?>"
                           class="p-2 text-white  <?= ( $i == $current_page ? 'bg-pink-600' : 'bg-blue-500' ) ?>"><?= $i ?></a>
                    </li>
								<?php endfor; ?>
								<?php if ( $current_page < $total_pages ) : ?>
                    <li class="m-2">
                        <a href="search.php?search=<?= $search_term ?>&per_page=<?= $per_page ?>&offset=<?= $offset + $per_page ?>"
                           class="p-2 bg-blue-500 text-white">Next</a>
                    </li>
								<?php endif; ?>
              </ul>
          </nav>
      </section>
	<?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>




