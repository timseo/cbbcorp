
<?php

require_once "./vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$SENDGRID_API_KEY = $_ENV["SENDGRID_API_KEY"];
var_dump($SENDGRID_API_KEY);



