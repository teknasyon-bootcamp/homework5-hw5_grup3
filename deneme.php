<?php
require "vendor/autoload.php";

use \App\Logger\Driver\File;
use \App\Logger\LoggableInterface;
use \App\DB\Engine\Mysql;

$mongodb = new \App\DB\Engine\MongoDB("","","","","book_app",[]);
$mysql = new Mysql("localhost", "root","","book_app");
$db = new \App\DB\Database();
$db->setDriver($mysql);


$Databaselogger = new \App\Logger\Driver\Database($mysql);

$books = $db->all("book");
$Databaselogger->setUp();
$Databaselogger->log("Sisteme izinsiz giriş yapıldı",LoggableInterface::ALERT);
$Databaselogger->tearDown();






