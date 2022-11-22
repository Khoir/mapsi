<?php
// session start
session_start();

// hilangkan session yang sudah di set_error handling
unset($_SESSION['id-user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_pengguna']);

session_destroy();
echo "<script>
    alert('anda telah keluar dari halaman admin')
    document.location='login.php';
</script>";