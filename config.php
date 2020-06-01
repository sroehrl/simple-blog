<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('path', __DIR__);
$client = new \BluaBlue\Client($_ENV['BLUA_BLUE_USERNAME'],$_ENV['BLUA_BLUE_PASSWORD']);