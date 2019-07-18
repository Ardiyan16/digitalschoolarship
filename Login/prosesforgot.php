<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasipass = $_POST['konfirmasipass'];

$data = mysqli_query($koneksi, "SELECT email FROM akun WHERE email='$email'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    mysqli_query($koneksi, "UPDATE akun SET password='$password' WHERE email='$email'");

    if (strlen($password) <= 7) {
        echo "<script>
                    alert(' password minimal 8 digit');
                    window.location= 'http://localhost/digitalschoolarship/login/forgot.php';
                    </script>";
        return false;
    }
    if ($password !== $konfirmasipass) {
        echo "<script>
                    alert('Konfirmasi Password salah');
                    window.location= 'http://localhost/digitalschoolarship/login/forgot.php';
                    </script>";
        return false;
    }

    echo "<script>
                    alert('Password berhasil di ubah');
                    window.location= 'http://localhost/digitaltalent/login/login.php';
                    </script>";
} else {
    echo "<script>
                    alert('Email tidak terdaftar');
                    window.location= 'http://localhost/digitaltalent/login/forgot.php';
                    </script>";
}
