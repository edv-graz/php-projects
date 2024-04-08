<?php
require 'includes/db-connect.php';
require 'includes/functions.php';

$cat_id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $cat_id ) {
	include 'page_not_found.php';
}

$sql      = "SELECT id, name, description FROM category WHERE id = :id;";
$category = pdo_execute( $pdo, $sql, [ 'id' => $cat_id ] )->fetch( PDO::FETCH_ASSOC );
if ( ! $category ) {
	include 'page_not_found.php';
}

$sql = "SELECT a.id, a.title, a.summary, a.category_id, a.user_id, c.name as category,
				CONCAT(u.forename, ' ', u.surname) as author, i.filename as image_file, i.alttext as image_alt
				FROM articles as a
				JOIN category as c ON a.category_id = c.id
				JOIN user as u ON a.user_id = u.id
				LEFT JOIN images as i ON a.images_id = i.id
				WHERE a.published = 1 AND a.category_id = :id
				ORDER BY a.id DESC;";

$articles = pdo_execute( $pdo, $sql, [ 'id' => $cat_id ] )->fetchAll( PDO::FETCH_ASSOC );


$sql         = "SELECT id, name FROM category WHERE navigation = 1;";
$navigation  = pdo_execute( $pdo, $sql )->fetchAll();
$title       = $category['name'];
$description = $category['description'];
$section     = $cat_id;
?>

<?php include './includes/header.php'; ?>
<aside class="flex justify-center items-center flex-col p-8">
    <h1 class="text-4xl text-blue-500 mb-8"><?= e( $category['name'] ) ?></h1>
    <p class="text-gray-500"><?= e( $category['description'] ) ?></p>
</aside>
<!-- ab hier gleich wie die index.php -->
<main class="flex flex-wrap p-8" id="content">
	<?php foreach ( $articles as $article ) : ?>
      <article class="w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4">
          <a href="article.php?id=<?= $article['id'] ?>">
              <img src="uploads/<?= e( $article['image_file'] ?? 'placeholder.png' ) ?>"
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


