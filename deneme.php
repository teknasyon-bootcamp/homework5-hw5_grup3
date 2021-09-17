<?php
require "vendor/autoload.php";

use \App\Logger\Driver\File;
use \App\Logger\LoggableInterface;

$logFile = __DIR__."\storage\logs\\logs.log";




$db = new \App\DB\Engine\Mysql("localhost","root","","book_app");


$dblogger = new \App\Logger\Driver\Database($db);

$dblogger->log("İzinsiz giriş engellendi",LoggableInterface::WARNING);


