<?php
declare( strict_types=1 );
require_once 'my_custom_zoo.php';
$animal = null;

if ( isset( $_GET['name'] ) && isset( $zoo ) ) {
	$animal = $zoo->getAnimalByName( $_GET['name'] );
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/pico.css">
    <link rel="stylesheet" href="./css/pico.classless.min.css">
    <title>Zoo</title>
</head>
<body>
<main>
    <h1><?= $animal->getName() ?></h1>

	<?php if ( $animal instanceof Cats ) : ?>
      <p>
          How Dangerous is <?= $animal->getName() ?>? (0-100):
      </p>
      <progress value="<?= $animal->getDanger() ?>" max="100"></progress>
	<?php else: ?>
      <p>
          No Danger Parameter for this Kind of Animal
      </p>
	<?php endif; ?>

    <p><?= $animal->pet() ?></p>
    <p><?= $animal->eat() ?></p>
    <article>
        Min weight (<?= $animal->getMinWeight() ?>):
        <progress value="<?= $animal->getMinWeight() ?>" max="<?= $animal->getMaxWeight() ?>"><?= $animal->getMinWeight() ?></progress>
        Actual weight (<?= $animal->getWeight() ?>):
        <progress value="<?= $animal->getWeight() ?>" max="<?= $animal->getMaxWeight() ?>"><?= $animal->getWeight() ?></progress>
        Max weight (<?= $animal->getMaxWeight() ?>):
        <progress value="<?= $animal->getMaxWeight() ?>" max="<?= $animal->getMaxWeight() ?>"><?= $animal->getMaxWeight() ?></progress>
    </article>

</main>
</body>
</html>