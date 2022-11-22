<?= 
include "navigasi.php"; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
    
<body>

          <div class="row justify-content-end mt-2">
                        <div class="col-md-1">
                            <form action="login.php">
                                <div class="input-group">
                                <button class="btn btn-warning" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                      </div>
          <!-- form search end -->

           <!-- carousel -->
    <div class="container-md mt-4">
      <div class="mt-2">
        <div id="carouselExampleCaptions" class="carousel slide col-sm-12" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/ceramah.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                   <h5>ceramah lebih dingin dari kulkas</h5>
                  <p>kebanyakan manusia  berusaha mencari obat dari kekeringan hidupnya dengan membasuh hatinya melalui ceramah, dan baru disadari kini sikap ia ke orang lain lebih dingin dari kulkas</p>
                  <a href="hubungi.html"><button class="btn btn-primary btn-outline-light"  type="submit"> kunjungi</button></a>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/komputer.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Robot pengen nikah</h5>
                  <p>sebiji robot barusan curhat bahwa dia sedang dilanda asmaradana yang membuatnya gelisah setiap malam sampai...</p>
                  <a href="hubungi.html"></a><button class="btn btn-primary btn-outline-light" type="submit">kunjungi</button></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/komputer3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>komputer layar tancap</h5>
                  <p>kompuer ini terlahir dari imajinasi seorang yang kerjaannya tidur, sehingga kecanggihannya...</p>
                   <a href="hubungi.html"><button class="btn btn-primary btn-outline-light" type="submit">kunjungi</button></a>
                 
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </div>
    <!-- carousel end-->

          <!-- ini produk saya -->
   
          <div class="container mt-5">
            <div class="row">
                <div class="card col-sm-4">
                    <img src="assets/img/komputer.jpg" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">Jasa Lacak Kucing</h5>
                    <div class="card-body">
                      <h5 class="card-title">maincoon terbaik handal</h5>
                      <p class="card-text">jasa kecantikan kuncing terbaik sedunia</p>
                      <a href="hubungi.html" class="btn btn-primary">hubungi kami</a>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <img src="assets/img/komputer2.jpg" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">jasa nemenin pacar</h5>
                    <div class="card-body">
                      <h5 class="card-title">dijamin setia</h5>
                      <p class="card-text">menjaga jodoh orang sampai diminta yang punya lagi</p>
                      <a href="hubungi.html" class="btn btn-primary">tancap gas</a>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <img src="assets/img/tahlilan.png" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">jasa doa</h5>
                    <div class="card-body">
                      <h5 class="card-title">doa tahlil orang mati dan nikahan</h5>
                      <p class="card-text">siapa yang mau nikah kami akadkan, siapa yang keluarganya meninggal kami tahlilkan</p>
                      <a href="hubungi.html" class="btn btn-primary">undang langsung</a>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <img src="assets/img/ceramah.jpg" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">jasa ceramah</h5>
                    <div class="card-body">
                      <h5 class="card-title">acara anda lebih barokah</h5>
                      <p class="card-text">smau acara anda lebih meriah dan berkah, kami bantu anda</p>
                      <a href="hubungi.html" class="btn btn-primary">undang langsung</a>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <img src="assets/img/komputer3.jpg" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">jasa ceramah</h5>
                    <div class="card-body">
                      <h5 class="card-title">acara anda lebih barokah</h5>
                      <p class="card-text">smau acara anda lebih meriah dan berkah, kami bantu anda</p>
                      <a href="hubungi.html" class="btn btn-primary">undang langsung</a>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <img src="assets/img/pacar.jpg" class="img-thumbnail" alt="...">
                    <h5 class="card-header bg-success">jasa ceramah</h5>
                    <div class="card-body">
                      <h5 class="card-title">acara anda lebih barokah</h5>
                      <p class="card-text">smau acara anda lebih meriah dan berkah, kami bantu anda</p>
                      <a href="hubungi.html" class="btn btn-primary">undang langsung</a>
                    </div>
                </div>
            </div>
        </div>
   
          
          <!-- ini produk saya end -->
        
    </div>


    <?= include "footer.php"; ?>
    

