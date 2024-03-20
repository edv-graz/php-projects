<?php
require_once 'my_custom_zoo.php';
global $zoo;
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
    <h1>Zoo</h1>
    <div class="grid">
			<?php
			foreach ( $zoo->getAnimals() as $animal ) {
				?>
          <div>
              <h2><a href="single_animal.php?name=<?= $animal->getName() ?>"><?= $animal->getName() ?></a></h2>
              <p>Weight:
                  <progress value="<?= $animal->getWeight() ?>" max="<?= $animal->getMaxWeight() ?>"></progress>
              </p>
              <p><?= $animal->pet() ?></p>
          </div>
				<?php
			}
			?>
    </div>
</main>
<footer>
    <p>© 2024 |edvgraz|</p>
</footer>
</body>
</html>