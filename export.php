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

if (isset($_POST['export'])) {
    $file = "export.json";

    $pdo = $driver->getPdo();
    $db_name = $pdo->query("SELECT DATABASE()")->fetchColumn();

    $tables = array();
    $result = $pdo->query("SHOW TABLES");

    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        $tables[] = $row[0];
    }

    $table = array();
    $table[0] = array("type" => "database", "name" => $db_name);

    $i = 1;

    foreach ($tables as $table_name) {
        $query = $pdo->query("SELECT * FROM $table_name");
        $query-> execute();

        $table[$i]["type"] = "table";
        $table[$i]["name"] = $table_name;
        $table[$i]["database"] = $db_name;
        $table[$i]["data"] = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $table[$i]["data"][] = $row;
        }

        $i++;
    }

    header('Content-type: application/json');
    header('Content-Disposition: attachment; filename="'. $file .'"');
    echo json_encode($table);
    exit();
}

?>

<?php include "_shared/header.php";?>

    <div class="container">
        <h1>Dışa Aktarma Sayfası</h1>

        <form action="" method="post">
            <div class='form-group'>
                <div>
                    <button name="export" class="btn btn-primary mt-3">Export</button>
                </div>
            </div>
        </form>
    </div>

<?php include "_shared/footer.php";?>