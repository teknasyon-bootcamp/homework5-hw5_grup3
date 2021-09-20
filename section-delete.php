<?php
require "vendor/autoload.php";

$config = require "config.php";

$engine = $config['engine'];
$host = $config['host'];
$user = $config['user'];
$pass = $config['password'];

use App\DB\Engine\Mysql;
use App\DB\Engine\MongoDB;
use App\Db\Database;



if ($engine == "mysql") {
    $driver = new Mysql($host, $user, $pass, "book_app");
} elseif ($engine =="mongodb") {
    $driver = new MongoDB("", "", "", "", "", []);
}
$db = new Database();
$db->setDriver($driver);

$id = $_GET['id'];
$db->delete("section",$id);

?>

<?php include "_shared/header.php";?>

<?php include "_shared/footer.php";?>