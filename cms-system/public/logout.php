<?php

require '../src/bootstrap.php';

$cms->getSession()->destroySession();
redirect( 'index.php' );


