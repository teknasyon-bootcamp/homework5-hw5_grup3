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

if(isset($_POST['import'])) {
    $fileName = $_FILES['file']['name'];
    $tempName = $_FILES['file']['tmp_name'];

    if(isset($fileName)) {
        if(empty($fileName)) {
            $fileError = "Dosya seçilmedi!";
        } else {
            $location = "storage/";
            $temp_file = move_uploaded_file($tempName, $location.$fileName);

            if($temp_file) {
                $pdo = $driver->getPdo();

                $json_file  = file_get_contents($location.$fileName);
                $data = json_decode($json_file, true);

                for ($i = 0; $i < count($data); $i++) {
                    $type = array_values($data[$i])[0];

                    if ($type == "table") {
                        $table = array_values($data[$i])[1];
                        $values = array_values($data[$i])[3];

                        $pdo->query("TRUNCATE $table");

                        foreach($values as $value) {
                            $sql = "INSERT INTO $table VALUES (";

                            foreach ($value as $val){
                                $sql .= "'". $val . "'". ",";
                            }

                            $sql = rtrim($sql," , ");
                            $sql .= ")";

                            $pdo->query($sql);
                        }
                    }
                }

                $response = "Tablolar içe aktarıldı!";
                unlink($location.$fileName);
            }
        }
    }
}

?>

<?php include "_shared/header.php";?>

    <div class="container">
        <?php

        if (isset($fileError)) {
            echo "<div class='alert alert-danger'>$fileError</div>";
        }

        if (isset($response)) {
         echo "<div class='alert alert-success'>$response</div>";
        }

        ?>

        <h1>İçe Aktarma Sayfası</h1>

        <div class='form-group'>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input  class="btn btn-primary mt-3" type="submit" name="import" value="Import">
                </form>
            </div>
        </div>
    </div>

<?php include "_shared/footer.php";?>