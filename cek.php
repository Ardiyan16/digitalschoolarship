<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];

//if ($nama == "") {
//    header("location:formds.php?nama=kosong");
//} else 
//    if ($email == "") {
//    header("location:formds.php?email=kosong");
//} else 
//    if ($alamat == "") {
//    header("location:formds.php?alamat=kosong");
//} else 
//    if ($nomor == "") {
//    header("location:formds.php?nomor=kosong");
//}

//echo "nama anda adalah : " . $nama;
//echo "<p>email anda adalah : " . $email;
//echo "<p>alamat anda adalah : " . $alamat;
//echo "<p>nomor anda adalah : " . $nomor;
if ($nama == "" || $email == "" || $alamat == "" || $nomor == "") {
    if ($nama == "") {
        $nama = "kosong";
    }
    if ($email == "") {
        $email = "kosong";
    }
    if ($alamat == "") {
        $alamat = "kosong";
    }
    if ($nomor == "") {
        $nomor = "kosong";
    }
    header("location:formds.php?nama=$nama&email=$email&alamat=$alamat&nomor=$nomor");
} else {
    echo "Nama :" . $nama;
    echo "<p>Email :" . $email;
    echo "<p>Alamat :" . $alamat;
    echo "<p>No Telp :" . $nomor;
}
