<?php
$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");
$delete  = mysqli_query($koneksi, "DELETE FROM perti WHERE id= '" . $_GET['id'] . "'");
if ($delete) {
    header('location:../tabeldata/viewdataperti.php');
} else {
    echo 'Gagal Hapus';
}
