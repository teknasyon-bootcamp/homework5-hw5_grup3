<?php
require "vendor/autoload.php";

$mysqlDB = new \App\DB\Engine\Mysql("localhost","root","","post");

$post2 = $mysqlDB->find("posts",2);
