<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$env = Dotenv::createImmutable(__DIR__);
$env->load();
try {
    $pdo = new PDO($_ENV['DATABASE_DRIVER'] . ":host=" . $_ENV['DATABASE_HOST'] . ";port=" . $_ENV['DATABASE_PORT'] . ";dbname=" . $_ENV['DATABASE_NAME'] . ";user=" . $_ENV['DATABASE_USERNAME'] . ";password=" . $_ENV['DATABASE_PASSWORD']);

    if ($pdo) {
     echo'eee';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
/*CREATE TABLE test`.`links` ( `id` INT NOT NULL AUTO_INCREMENT , `redirect_to` VARCHAR(10) NOT NULL , `redirected_from` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;  */