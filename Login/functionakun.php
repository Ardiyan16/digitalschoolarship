<?php

$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

function signup($data)
{
    global $koneksi;
    $username = strtolower(stripcslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);


    $result = mysqli_query($koneksi, "SELECT email FROM akun WHERE email = '$email' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('email sudah terdaftar');
                    window.location= 'http://localhost/digitaltalent/Login/registrasi.php';
                    </script>";


        return false;
    }

    if (strlen($password) <= 7) {
        echo "<script>
                    alert(' password minimal 8 digit');
                    window.location= 'http://localhost/digitaltalent/login/registrasi.php';
                    </script>";
        return false;
    }

    mysqli_query($koneksi, "INSERT INTO akun VALUES('', '$username', '$email', '$password' )");

    return mysqli_affected_rows($koneksi);
}
