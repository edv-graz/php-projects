<?php
require '../src/bootstrap.php';

$id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $id ) {
	include APP_ROOT . '/public/page_not_found.php';
}

$user = $cms->getUser()->fetch( $id );
if ( ! $user ) {
	include APP_ROOT . '/public/page_not_found.php';
}
$articles    = $cms->getArticle()->getAll( null, true, $id );
$navigation  = $cms->getCategory()->fetchNavigation();
$title       = $user['forename'] . ' ' . $user['surname'] . ' - IT-News';
$description = $title;
$section     = '';
?>


<?php include './includes/header.php'; ?>
<main class="container mx-auto mt-10 mb-10">
    <section>
        <h1 class="text-3xl text-center"><?= e( $user['forename'] ) ?> <?= e( $user['surname'] ) ?></h1>
        <p class="text-center text-gray-500">Joined: <?= e( format_date( $user['joined'] ) ) ?></p>
        <img class="mx-auto" src="uploads/<?= $user['profile_pic'] ?? 'placeholder.jpg' ?>" alt="Profile Picture">
    </section>
    <!-- Ab hier gleich wie in der index.php -->
    <section class="flex flex-wrap p-8">
			<?php foreach ( $articles as $article ) : ?>
          <article class="w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4">
              <a href="article.php?id=<?= $article['id'] ?>">
                  <img src="uploads/<?= e( $article['image_file'] ?? 'blank.png' ) ?>"
                       alt="<?= e( $article['image_alt'] ) ?>">
                  <h2 class="text-blue-500 text-2xl pt-3 pb-1.5"><?= e( $article['title'] ) ?></h2>
                  <p class="text-gray-500 pb-2.5"><?= e( $article['summary'] ) ?></p>
              </a>
              <p class="credit text-xs">
                  Posted in <a class="text-pink-400" href="category.php?id=<?= $article['category_id'] ?>">
									<?= e( $article['category'] ) ?></a>
                  by <a class="text-pink-400" href="user.php?id=<?= $article['user_id'] ?>">
									<?= e( $article['author'] ) ?></a>
              </p>
          </article>
			<?php endforeach; ?>
    </section>
</main>
<?php include './includes/footer.php'; ?>


