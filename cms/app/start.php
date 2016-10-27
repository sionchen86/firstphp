<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/cms');
// used for URLs, change accordingly on live server.

$db = new PDO('mysql:host=localhost;dbname=cms','root', '');

require 'functions.php';
?>