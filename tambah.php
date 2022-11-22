<?= include "navigasi.php"; ?>

<?php


$koneksi = mysqli_connect("localhost", "root", "", "mapsi") or die(mysqli_error($koneksi));

if( isset($_POST["submit"]) ){
 
       // uji jika simpan data sukses
    if(tambah($_POST) > 0){

        echo 
        "<script>
        alert('simpan sukses, terima kasih');
        document.location='?'
        </script>";

    }else {
        echo 
        "<script>
        alert('simpan data gagal');
        document.location='?'
        </script>";
    }
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="col-lg-7 mb-3">
    <div class="card shadow bg-gradient-light">
        <!-- card body -->
        <div class="card-body">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">identitas pengunjung</h1>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama penulis" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" name="category" placeholder="category" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" name="excerpt" placeholder="excerpt" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" name="body" placeholder="body" required>

                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" name="body" placeholder="gambar" required>

                        </div>


                        <button type="submit" name="submit" class="btn btn-primary btn-block">simpan data</button>

                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="#">by. Ngodingpintar | 2021 - <?= date('Y') ?></a></div>
                </div>
            </div>

        </div>
        <!-- end card body -->
    </div>
</div>

</body>
</html>
