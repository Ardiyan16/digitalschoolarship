<?php
$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");
$delete  = mysqli_query($koneksi, "DELETE FROM data WHERE no= '" . $_GET['no'] . "'");
if ($delete) {
    header('location:../tabeldata/viewdatamerk.php');
} else {
    echo 'Gagal Hapus';
}
