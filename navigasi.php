<?php
session_start();

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
</head>
    
<body>
    
    <div class="container-fluid" style="background-color: rgb(121, 199, 136) ;">

        <header class="container-fluid">
        <div class="logo">
            <img src="/assets/img/satu.png" >
        </div>
        <div class="header-right">
            <div class="logo-text"> Dinas Ketenagakerjaan</div>
            <div class="logo-text"> Sidoarjo</div>
        </div>
        <div class="clear-both"></div>
        
        </header>
   
        <!-- ini navbar -->
   
    
    
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container mt-3">
              <div class="container-fluid">

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                              <a class="nav-link active" aria-current="page" href="post">New Post</a>
                          </li>
                      </ul>
                      <form action="" method="POST">
                          <input class="form-control me-2" size="20" type="text" name="keyword" autofocus placeholder="Masukan Kata Kunci" autocomplete="off">
                          <button class="btn btn-outline-success bg-warning" type="submit" name="cari">Cari</button>

                      </form>

                      
                  </div>
              </div>
        </nav>
    </div>
     

      <?= include "koneksi.php" ?>
     
 