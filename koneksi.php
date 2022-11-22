<?php

$koneksi = mysqli_connect("localhost", "root", "", "mapsi") or die(mysqli_error($koneksi));

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
     // htmlspecialchars agar inputan aman dari injection, ambil data
     global $koneksi;
     $nama = htmlspecialchars($_POST['nama']);
     $category = htmlspecialchars($_POST['category']);
     $excerpt = htmlspecialchars($_POST['excerpt']);
     $body = htmlspecialchars($_POST['body']);
     $gambar = htmlspecialchars($_POST['gambar']);


     $query = "INSERT INTO post VALUES ('', '$nama', '$category', '$excerpt', '$body', '$gambar')";
     mysqli_query($koneksi, $query);

     return mysqli_affected_rows($koneksi);

}



?>