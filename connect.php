<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$env = Dotenv::createImmutable(__DIR__);
$env->load();
$pdo = new PDO($_ENV['DATABASE_DRIVER'] . ":host=" . $_ENV['DATABASE_HOST'] . ";port=" . $_ENV['DATABASE_PORT'] . ";dbname=" . $_ENV['DATABASE_NAME'] . ";charset=UTF8;user=" . $_ENV['DATABASE_USERNAME'] . ";password=" . $_ENV['DATABASE_PASSWORD']);
