<?php


$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");

function query($query)
{
    global $mysqli;
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function perti($data)
{
    global $mysqli;

    $namaperti = strtolower(stripslashes($data['namaperti']));
    $alamat = mysqli_real_escape_string($mysqli, $data['alamat']);
    $jadwal_pelatihan = mysqli_real_escape_string($mysqli, $data['jadwal_pelatihan']);
    $kuota = mysqli_real_escape_string($mysqli, $data['kuota']);
    $images = mysqli_real_escape_string($mysqli, $data['images']);
    $alamat_website = mysqli_real_escape_string($mysqli, $data['alamat_website']);

    mysqli_query($mysqli, "INSERT INTO perti VALUES ('', '$namaperti', '$alamat', '$jadwal_pelatihan', '$kuota', '$images', '$alamat_website')");

    return mysqli_affected_rows($mysqli);
}
