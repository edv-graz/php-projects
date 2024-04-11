<?php
require '../src/bootstrap.php';

$articles = $cms->getArticle()->getAll( null, true, null, 6 );

$navigation = $cms->getCategory()->fetchNavigation();

// Variablen für die Header-Ausgabe
$title       = 'IT-News';
$description = 'All about IT and New from Software Development and Hardware';
$section     = '';
?>

<?php include './includes/header.php'; ?>
<main class="flex flex-wrap p-8" id="content">
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
</main>
<?php include './includes/footer.php'; ?>


