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


if(isset($_GET['book']) || isset($_GET['author'])){
    $book = $_GET['book'];
    $author = $_GET['author'];

    $bookCreateState = $db->create("book",[["name" =>$book]]);

    $books = $db->all("book");
    $bookCounts = count($books);
    $lastbookId = $books[$bookCounts-1]['id'];

    $authorCreateState = $db->create("author", [["author_name" => $author,"bookID"=> $lastbookId]]);
    if ($bookCreateState && $authorCreateState){
        header("Location:http://localhost/homework5-hw5_grup3/book-store.php?state=1 ",true);

    }else{
        header("Location:http://localhost/homework5-hw5_grup3/book-store.php?state=0 ",true);

    }


}
?>
<?php include "_shared/header.php";?>
<div class="container">
    <h1>Kitap Oluşturma Sayfası</h1>
    <form action='book-create.php' method='GET'>
        <div class='form-group'>
            <div >
                <label for='book'>Kitap</label>
                <input type='text' name='book' class='form-control' >
                <label for='author'>Yazar</label>
                <input type='text' name='author' class='form-control'  >
            </div>
            <button class = 'btn btn-primary mt-3'>Gönder</button>
        </div>

    </form>
</div>

<?php include "_shared/footer.php";?>
