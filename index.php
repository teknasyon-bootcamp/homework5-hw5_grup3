
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ürünlerimiz</title>
    <style>
       .card{
           border-radius: 12px;
       }
       .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
       }
       body {
    background-color: #ccc;
       }
    </style>
  </head>
  <body>
    <!--NAVBAR - START-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">KİTAP DOSTU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Ana Sayfa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Kitaplarımız</a>
            </li>
          </ul>
        </div>
      </nav>
    <!--NAVBAR - END-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/kitaps4.jpg" class="d-block w-100" width="300" height="600" alt="..." style="max-height: 600px;">
        </div>
        <div class="carousel-item">
          <img src="./images/kitaps.jpg" class="d-block w-100" width ="300" height="600" alt="..."
          style="max-height: 600px;">
        </div>
        <div class="carousel-item">
          <img src="./images/kitaps1.jpg" class="d-block w-100" width ="300" height="600" alt="" style="max-height: 600px;"> 
        </div>
        <div class="carousel-item">
          <img src="./images/kitaps2.jpg" class="d-block w-100" width="300" height="600" alt="" style="max-height: 600px;"> 
        </div>
        <div class="carousel-item">
          <img src="./images/kitaps3.jpg" class="d-block w-100" width ="300" height="600" alt="" style="max-height: 600px;"> 
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 mr-auto ml-auto mt-5 mb-5">
                <h2 style="color:black;">KİTAPLARIMIZ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/aclik-oyunlari.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Açlık Oyunları</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Suzanne Collins</h6>
                  <p class="card-text text-truncate">Açlık Oyunları (İngilizce özgün adıyla The Hunger Games), Amerikalı yazar Suzanne Collins'in 2008'de yayımlanan distopik macera türündeki romanıdır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/amok-kosucusu.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Amok Koşucusu</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Stefan Zweig</h6>
                  <p class="card-text text-truncate">Amok Koşucusu, Stefan Zweig'ın 1922'de yazdığı bir uzun öyküdür. Öykü adını, Uzakdoğu'da bir tür cinnet hâlini târif etmek için kullanılan "amok" tâbirinden alır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/baslangic.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Başlangıç</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Dan Brown</h6>
                  <p class="card-text text-truncate">Başlangıç, Dan Brown'ın 2017 yılında yayımladığı, Robert Langdon serisinin devam kitabı. Dinlerin kökeni ve inanç değerleri hakkında yazılmış bir gizem romanı özelliği taşımaktadır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/hayvan-ciftligi.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hayvan Çiftliği</h5>
                  <h6 class="card-subtitle mb-2 text-muted">George Orwell</h6>
                  <p class="card-text text-truncate">Hayvan Çiftliği, George Orwell'in mecazi bir dille yazılmış, fabl tarzındaki siyasi hiciv romanı. Roman ilk olarak 1945'te Birleşik Krallık'ta yayımlandı.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/empati.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Empati</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Adam Fawer</h6>
                  <p class="card-text text-truncate">Empati, Amerikalı yazar Adam Fawer tarafından kaleme alınan 2008 basım tarihli gnostisizm, empati, sinestezi gibi konuları eksenine oturtmuş bir romandır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/dijital-kale.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Dijital Kale</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Dan Brown</h6>
                  <p class="card-text text-truncate">Dijital Kale, Amerikalı yazar Dan Brown tarafından yazılan ve ilk olarak 1998 yılında basılan bir tekno-gerilim romanıdır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/80-gunde.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">80 Günde Devr-i Alem</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Jules Verne</h6>
                  <p class="card-text text-truncate">Seksen Günde Devr-i Alem, Jules Verne'in yazdığı ve ilk kez 1872 yılında yayımlanan bir macera romanıdır. Verne'in en başarılı eserlerinden biri olarak bilinir.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card mb-3 mr-2" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/da-vinci-sifresi.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Da Vinci Şifresi</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Dan Brown</h6>
                  <p class="card-text text-truncate">Da Vinci Şifresi ya da özgün adıyla The Da Vinci Code, Dan Brown'un kaleme aldığı bir romandır.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card" style="width: 18rem;">
                <img style="margin: auto; height: 250px;" src="./images/satranc.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Satranç</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Stefan Zweig</h6>
                  <p class="card-text text-truncate">Satranç, Stefan Zweig'in Brezilya'da sürgünde yazdığı eserlerindendir. İlk baskısı 250 adet olarak 1942 yılında Buenos Aires'te, İngilizce tercümesi 1944'te New York'ta yayımlandı.</p>
                  <a href="#" class="btn btn-danger btn-sm float-right" role="button">Sil</a>
                  <a href="#" class="btn btn-warning btn-sm float-right mx-2" role="button">Düzenle</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <footer class="container py-5" >
      <div class="row" style="font-size:12px">
        <div class="col-12 col-md text-dark" style="font-family:verdana;">
          <h5 style="color:black; font-size:12px">KİTAP DOSTU!</h5>
          <small class="d-block mb-3 text-dark" style="font-size:9px">©2020-2021</small>
        </div>
        <div class="col-1" style="font-family:verdana;">
          <h5 style="color:black; font-size:15px;">Yusuf USTA</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/yusuf-usta-/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;">
          <h5 style="color:black; font-size:15px;">Efe BÜYÜK</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/efe-buyuk-33b365193/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;">
          <h5 style="color:black; font-size:15px;">Talih DURAN</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/talihduran/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Yusuf BULAÇ</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/yusufbulac/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Mesut YILMAZ</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/hasankursadkorkmaz/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Hasan KORKMAZ</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/hasankursadkorkmaz/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1 col-sm" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Mert AKSU</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/mertaksu1/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1 col-sm" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Nazlı AYHAN</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/e-nazl%C4%B1-ayhan/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Furkan YUNUS</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/furkan-yunus-aa182117a/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1 col-sm" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Kadir ERMAN</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/kadirerman/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-1" style="font-family:verdana;" >
          <h5 style="color:black; font-size:15px;">Ünal GÜVEN</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-dark" href="https://www.linkedin.com/in/unalguven/" target="_blank">Linkedin</a></li>
          </ul>
        </div>
      </div>
    </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>


