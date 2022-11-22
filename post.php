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
            <img src="assets/img/tahu.jpg" class="card-img-top" width="5px" height="200px" alt="...">
            <h1><?= $data['nama'] ?></h1>
            <h6 class="card-text">><?= $data['category'] ?></h6>
            <p class="card-text"><?= $data['body'] ?></p>
        </div>
        
    </div>


            

            <?php } ?>

        </div>
    </div>


<?= include "footer.php" ?>