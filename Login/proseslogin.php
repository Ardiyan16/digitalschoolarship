<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT email FROM akun WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    mysqli_connect($koneksi, "SELECT * FROM akun WHERE password='$password' AND email='$email'");

    echo "<script>
                    alert('selamat datang');
                    window.location= 'http://localhost/digitaltalent/formds.php';
                    </script>";
} else {
    echo "<script>
                    alert('email atau password yang anda masukkan salah');
                    window.location= 'http://localhost/digitaltalent/Login/login.php';
                    </script>";
}
