<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT email FROM akun WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    mysqli_connect($koneksi, "SELECT * FROM akun WHERE password='$password' AND username='$username'");

    $_SESSION["username"] = $_POST["username"];

    echo "<script>
                    alert('selamat datang');
                    window.location= 'http://localhost/digitalschoolarship/user/profil.php';
                    </script>";
} else {
    echo "<script>
                    alert('email atau password yang anda masukkan salah');
                    window.location= 'http://localhost/digitalschoolarship/Login/login.php';
                    </script>";
}
