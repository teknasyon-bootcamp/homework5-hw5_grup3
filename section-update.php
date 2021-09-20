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

$section_name = $_GET['section_name'];
$section_content = $_GET['content'];
$section_id = $_GET['id'];

$is_updated = $db->update("section",$section_id,[["section_name"=>$section_name, "content"=>$section_content]]);

?>

<?php include "_shared/header.php";?>

<?php
if($is_updated){
    echo "<p class='text-center'>Kitap başarıyla güncellendi</p>";
    echo "<br>";
    echo "<div class='d-flex justify-content-center'><a href='http://localhost/homework5-hw5_grup3/index.php' class='btn btn-primary mt-5'>Anasayfaya geri dön</a></div>";
}
?>
<?php include "_shared/footer.php";?>