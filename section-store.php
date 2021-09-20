<?php include "_shared/header.php";?>

<?php

$state = $_GET['state'];

if ($state == 0){
    echo "Ekleme Başarısız oldu. Kitap ekleme işlemini tekrar gerçekleştiriniz. Yönlendiriliyorsunuz...";

}else{
    echo "Kitap sisteme başarıyla eklendi";
}
header("Refresh:2;url=http://localhost/homework5-hw5_grup3/index.php");

?>

<?php include "_shared/footer.php";?>