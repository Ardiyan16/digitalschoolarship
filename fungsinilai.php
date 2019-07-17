<?php

//membuat fungsi

function hitungumur($tahun_lahir, $tahun_sekarang)
{
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}
echo "umur saya adalah " . hitungumur(1999, 2019) . " tahun";


//membuat fungsi faktorial

function faktorial($angka)
{
    if ($angka < 2) {
        return 1;
    } else {
        return ($angka * faktorial($angka - 1));
    }
}

echo "<br> faktorial 5 adalah =" . faktorial(5);
