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

if (isset($_GET['post'])){
    $post = $_GET['post'];
    $book_id = $_GET['id'];
    try{
        $is_created = $db->create("posts",[["post"=>$post, "bookId" => $book_id]]);
    }catch (Exception $e){

    }

    if ($is_created){
    echo "Başarıyla post oluşturudlu";

    }
}
?>
<?php include "_shared/header.php";?>

    <div class="container">
        <h1>Kitap İçin Post Oluştur</h1>
        <form action='post-create.php' method='GET'>
            <div class='form-group'>
                <div >

                    <input type="hidden" name="id" value='<?=$_GET['id']??'' ?>'>
                    <label for='post'>Post</label>
                    <textarea name="post" rows="10" cols="100" style="resize: none" class='form-control'></textarea>

                </div>
                <button class = 'btn btn-primary mt-3'>Gönder</button>
            </div>

        </form>
    </div>

<?php include "_shared/footer.php";?>