<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/pico.css"/>
    <link rel="stylesheet" href="../../css/pico.classless.min.css"/>
    <title>Rating App</title>
</head>
<body>
<header>
    <h1>Rate the Product</h1>
	<?= $login->logged_in ? 'you are logged in' : '' ?>
</header>
<main>
	<?php echo $content ?? ''; ?>
</main>
<footer>
    <p>|edvgraz|</p>
</footer>
</body>
</html>

