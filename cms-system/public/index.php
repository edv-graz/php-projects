<?php

require '../src/bootstrap.php';

// Pfad wird ausgelesen (kommt von der layout.html) z. B. public/category/1/hardware
$path = mb_strtolower($_SERVER['REQUEST_URI']);
// Pfad wird gekürzt. der Root-Pfad wird abgeschnitten (public)
// es bleibt z. B. /category/1/hardware
$path = substr($path, strlen(DOC_ROOT));
// Aus dem Pfad wird ein Array erstellt (z. B. [category, 1, hardware])
$uri_parts = explode('/', $path);

// Wenn der erste Teil des Pfades 'admin' ist, wird die Seite aus dem Admin-Ordner geladen
if ($uri_parts[0] === 'admin') {
		$page = 'admin/' . ($uri_parts[1] ?? 'index');
		$id = $uri_parts[2] ?? null;
} else {
		$page = $uri_parts[0] ?? 'index';
		$id = $uri_parts[1] ?? null;
}
// die Id wird an die jeweilige Datei übergeben (z. B. category.php)
$id = filter_var($id, FILTER_VALIDATE_INT);
// Der richtige Pfad wird zusammengesetzt
$to_page = APP_ROOT . '/src/sites/' . $page . '.php';
// Wenn die Datei existiert, wird sie eingebunden
if(file_exists($to_page)) {
		include $to_page;
} else {
		include APP_ROOT . '/src/sites/page_not_found.php';
}


