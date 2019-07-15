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
            echo "</h4 style='color:red'>nama_belum di isi</h4>";
        }
    }
    ?>

    <h4>Masukkan Nama anda</h4>
    <form action="cek.php">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
                <td><input type="submit" value="cek"></td>
            </tr>
        </table>
        <button><a href="Login / login.php">Logout</a></button>

</html>