<?php

function segitiga($angka1, $angka2)
{
    $hasilsegitiga = 1 / 2 * $angka1 * $angka2;
    return $hasilsegitiga;
}

function persegipanjang($angka1, $angka2)
{
    $hasilpersegipanjang = $angka1 * $angka2;
    return $hasilpersegipanjang;
}

function belahketupat($angka1, $angka2)
{
    $hasilbelahketupat = 1 / 2 * $angka1 * $angka2;
    return $hasilbelahketupat;
}

if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $ukuran = $_POST['pilihan'];

    if ($ukuran == "persegipanjang") {
        echo "Luas Persegi Panjang yaitu " . persegipanjang($angka1, $angka2);
    } elseif ($ukuran == "segitiga") {
        echo "Luas Segitiga yaitu " . segitiga($angka1, $angka2);
    } elseif ($ukuran == "belahketupat") {
        echo "Luas Belah Ketupat yaitu " . belahketupat($angka1, $angka2);
    }
}
