<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/pico.css"/>
    <link rel="stylesheet" href="../../css/pico.classless.min.css"/>
    <title>Template</title>
</head>
<body>
<header>
    <h1>Adminbereich: Image Gallery</h1>
    <nav>
        <ul>
            <li><a href="../../image-gallery/index.php">Home</a></li>
            <li><a href="../../login/login.php">Login</a></li>
            <li><a href="../../login/logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<main>
	<?php echo $content ?? ''; ?>
</main>
<footer>
    <p>|edvgraz|</p>
</footer>
</body>
</html>

