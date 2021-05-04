<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once ROOT . '/app/Autoloader.php';

Autoloader::load();
System\App::run();
