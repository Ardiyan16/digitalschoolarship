<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT email FROM admin WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    mysqli_connect($koneksi, "SELECT * FROM admin WHERE password='$password' AND email='$email'");

    //set session
    $_SESSION["email"] = $_POST["email"];

    echo "<script>
                    alert('selamat datang');
                    window.location= 'http://localhost/digitalschoolarship/admin/input/inputperti.php';
                    </script>";
} else {
    echo "<script>
                    alert('email atau password yang anda masukkan salah');
                    window.location= 'http://localhost/digitalschoolarship/admin/login/loginadmin.php';
                    </script>";
}
