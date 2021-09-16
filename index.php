<?php

require "vendor/autoload.php";

/*use \App\DB\Engine\Mysql;
use \App\DB\Database;

$mysqlDB = new Mysql("localhost","root","","post");
$driverDB = new Database();

$driverDB->setDriver($mysqlDB);

$post = $driverDB->find("posts",2);

var_dump($post);
*/

/*$client = new MongoDB\Client(
    'mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass&directConnection=true&ssl=false'
)->test;

$example = $client->selectCollection()*/

use \App\DB\Engine\MongoDB;

$mongoDb = new MongoDB("","","","","book_app",[]);
$books = $mongoDb->all("book");
var_dump($books);



