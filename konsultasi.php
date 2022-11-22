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



    <div>
        <!-- ini navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container mt-3">
                <div class="container-fluid">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <img src="assets/img/pok.png" alt="" height="50">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="podcast.php">Podcast</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Psikologi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="pendidikan.php">Psikologi Pendidikan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="sosial.php">Psikologi Sosial</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="organisasi.php">Psikologi Organisasi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="agama.php">Psikologi Agama</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tasawuf
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="falsafi.php">Falsafi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="tarekat.php">Tarekat</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="syariah.php">Syariah </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="etika.php">Etika</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="estetika.php">Estetika</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tokoh
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="psikologi.php">Psikologi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="tasawuf.php">Tasawuf</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            <li class="nav-item dropdown">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="post">Konsultasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!-- ini navbar end -->

        <!-- ini produk saya -->



        <!-- ini produk saya end -->

    </div>


        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 d-lg-block shadow-lg my-4 text-center ms-2">
                            <img class="rounded" src="assets/img/konsultasi.jpg" alt="" width="700px" height="500px">

                        </div>
                        <div class="col-lg-6  bg-light my-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2"><strong>Welcome</strong></h1>
                                </div>

                                <h1 class="text-primary text-center"><strong>Konsultasi yang rahasia, fleksibel dan terjangkau</strong></h1><br><br>
                                <h4 class="justify-content-center">Dapatkan ketenangan dengan Merelease isi hatimu, dan dapatkan pencerahan dan penyelesaian masalahmu. <br> Privasimu terjamin 100% aman</h4>
                                <br><br>

                                <a href="about.php"><button class="btn btn-primary center-block justify-content-center">Daftar Konsultasi</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>

        <p class="text-center text-calibri">copyright <?= date('d-m-Y') ?></p>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>