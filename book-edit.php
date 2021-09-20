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

if (isset($_GET['id'])){

    $bookId = $_GET['id'];
    $book = $db->find('book',$bookId);
    $authors = $db->all("author");

    foreach ($authors as $author){
        if ($bookId == $author['bookId']){
            $authorBookId = $author['bookId'];
            $auth['name'] = $author['author_name'];
            $authorId = $author['id'];
        }
    }

}

?>
<?php include "_shared/header.php";?>

    <div class="container">
        <h1>Kitap Düzenleme Sayfası</h1>
        <form action='book-update.php'  method='GET'>
            <div class='form-group'>
                <div>
                    <input type='hidden' name='id' value='<?= $bookId??''; ?>'>
                    <input type="hidden" name='authorId' value='<?= $authorId??''; ?>'>
                    <label for='book'>Kitap</label>
                    <input type='text' name='book' class='form-control' value='<?= $book['name']??''; ?>'>
                    <label for='author'>Yazar</label>
                    <input type='text' name='author_name' class='form-control' value='<?= $auth['name']??''; ?>'>

                </div>
                <button class = 'btn btn-primary mt-3'>Gönder</button>
            </div>

        </form>
    </div>

<?php include "_shared/footer.php";?>