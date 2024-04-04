<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e( $title ?? '' ) ?></title>
    <meta name="description" content="<?= e( $description ?? '' ) ?>">
    <link rel="stylesheet" type="text/css" href="../css/output.css">
</head>
<body>
<header class="bg-white border-gray-200 dark:bg-gray-900 border-b-4">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="logo">
            <a href="../index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../img/page-logo.png" alt="IT-Logo" width="100">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul id="menu"
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
									<?php foreach ( $navigation as $link ) : ?>
                      <li>
                          <a class="block py-2 px-3 text-white rounded bg-blue-700 hover:text-pink-600 md:bg-transparent <?= ( $section == $link['id'] ) ? 'md:text-pink-600' : 'md:text-blue-700' ?> md:p-0 dark:text-white md:dark:text-blue-500"
                             href="category.php?id=<?= $link['id'] ?>"<?= ( $section == $link['id'] ) ? 'aria-current="page"' : '' ?>>
														<?= e( $link['name'] ) ?>
                          </a>
                      </li>
									<?php endforeach; ?>
                    <li>
                        <a href="search.php">
                            <object class="pointer-events-none" data="../img/material-search.svg" type="image/svg+xml">
                                <img src="../img/material-search.png" alt="Search">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
