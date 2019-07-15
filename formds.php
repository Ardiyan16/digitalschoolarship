<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Latihan WEB</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h1>Membuat Form Validasi dengan menggunakan PHP</h1>
    <br />

    <?PHP

    if (isset($_GET['nama'])) {
        if ($_GET['nama'] == "kosong") {
            echo "<h4 style ='color:red'>Nama belum dimasukkan ! </h4>";
        }
    }
    if (isset($_GET['email'])) {
        if ($_GET['email'] == "kosong") {
            echo "<h4 style ='color:red'>Email belum dimasukkan ! </h4>";
        }
    }
    if (isset($_GET['alamat'])) {
        if ($_GET["alamat"] == "kosong") {
            echo "<h4 style ='color:red'>Alamat belum dimasukkan ! </h4>";
        }
    }
    if (isset($_GET['nomor'])) {
        if ($_GET['nomor'] == "kosong") {
            echo "<h4 style ='color:red'>No Telp belum dimasukkan ! </h4>";
        }
    }
    ?>

    <h4>Masukkan Nama anda</h4>
    <form method="post" action="cek.php">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>no_telepon</td>
                <td><input type="text" name="nomor"></td>
            </tr>
            <tr>
                <td><input type="submit" value="cek"></td>
            </tr>
        </table>
        <button><a href="Login/login.php">Logout</a></button>

</html>