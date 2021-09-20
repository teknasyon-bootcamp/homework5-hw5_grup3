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
$post = $db->find("posts",$_GET['id']);
$post_value = $post['post'];

?>
<?php include "_shared/header.php";?>

    <div class="container">
        <h1>Post Düzenleme Sayfası</h1>
        <form action='post-update.php' method='GET'>
            <div class='form-group'>
                <div >
                    <input type="hidden" name="id" value='<?=$_GET['id']??'' ?>'>
                    <label for='post'>Post</label>
                    <textarea name="post" rows="10" cols="100" style="resize: none" class='form-control' > <?= $post_value??''?></textarea>
                </div>
                <button class = 'btn btn-primary mt-3'>Gönder</button>
            </div>

        </form>
    </div>


<?php include "_shared/footer.php";?>