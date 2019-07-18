<?php

require 'functionakun.php';

if (isset($_POST["register"])) {

    if (signup($_POST) > 0) {
        echo "<script>
        alert('akun anda telah terdaftarkan!');
        window.location= 'http://localhost/digitalschoolarship/Login/login.php';
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
