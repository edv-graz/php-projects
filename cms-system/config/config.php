<?php

const DEV_MODE    = true;
const DOC_ROOT    = '/cms-system/public/';
const ROOT_FOLDER = '/public/';
//Database connection
$type      = 'mysql';
$host      = 'localhost';
$port      = '8889';
$dbname    = 'cms_edvgraz';
$user_name = 'cms_edvgraz';
$password  = '';
$dsn       = "$type:host=$host:$port;dbname=$dbname";

// File upload
const MEDIA_TYPES     = [ 'image/jpeg', 'image/png' ];
const FILE_EXTENSIONS = [ 'jpg', 'jpeg', 'png' ];
const MAX_FILE_SIZE   = 1024 * 1024 * 2;
define( "UPLOAD_DIR", dirname( __DIR__, 1 ) . ROOT_FOLDER . 'uploads/' );




