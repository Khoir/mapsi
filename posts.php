<?= include "navigasi.php"; ?>

    <div class="container-sm">
    
        <div class="table-responsive">

            <?php

            $tampil = mysqli_query($koneksi, "SELECT * FROM post order by id desc");
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) {


            ?>

<div class="container-md mt-4">
        <div class="text-center" style="background-color: rgba(176, 230, 206, 0.5); font-weight: 300;">
            <h1 bg>CUSsss PRODUK KAMI</h1>
        </div>
        <div class="row" style="background-color: rgba(176, 230, 206, 0.5);">
            
            <div class="col-sm-3 g-4">
                <div class="card" >
                    <img src="assets/img/tahu.jpg" class="card-img-top" width="5px" height="200px" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <h6 class="card-text">><?= $data['category'] ?></h6>
                    <p class="card-text"><?= $data['excerpt'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-4">
                <div class="card" >
                    <img src="assets/img/tahu.jpg" class="card-img-top" width="5px" height="200px" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <h6 class="card-text">><?= $data['category'] ?></h6>
                    <p class="card-text"><?= $data['excerpt'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-4">
                <div class="card" >
                    <img src="assets/img/tahu.jpg" class="card-img-top" width="5px" height="200px" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <h6 class="card-text">><?= $data['category'] ?></h6>
                    <p class="card-text"><?= $data['excerpt'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


                <!-- <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="public/img/ceramah.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama'] ?></h5>
                        <p class="card-text"><?= $data['category'] ?></p>
                        <p class="card-text"><?= $data['excerpt'] ?></p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> -->

            <?php } ?>

        </div>
    </div>


<?= include "footer.php" ?>