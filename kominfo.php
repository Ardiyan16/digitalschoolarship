<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Form Validasi</title>
</head>
<body>
    <h1>Membuat form validasi dengan PHP <br></h1>
    <?php
    if(isset($_GET['nama'])) {
        if($_GET['nama']=="kosong"){
            echo "<h4 style ='color:red'>Nama belum dimasukkan ! </h4>";
        }
    }
    if(isset($_GET['email'])) {
        if($_GET['email']=="kosong"){
            echo "<h4 style ='color:red'>Email belum dimasukkan ! </h4>";
        }
    }
    if(isset($_GET['alamat'])) {
        if($_GET["alamat"]=="kosong"){
            echo "<h4 style ='color:red'>Alamat belum dimasukkan ! </h4>";
        }
    }
    if(isset($_GET['notelp'])) {
        if($_GET['notelp']=="kosong"){
            echo "<h4 style ='color:red'>No Telp belum dimasukkan ! </h4>";
        }
    }
    ?>
    <h4>Masukkan Nama Anda :</h4>
    <form action ="cek.php" method ="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type ="text" name ="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type ="text" name ="email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type ="text" name ="alamat"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type ="text" name ="notelp"></td>
            </tr> 
            <tr>
                <td></td>
                <td><input type ="submit" name ="Simpan"></td>
            </tr>  
</table>
</form> 
</body>
</html>