<?php

//fungsi untuk perkenalan
function perkenalan()
{
    echo "Selamat Datang <br/>";
    echo "Pada Acara Digital Talent <br/>";
    echo "2019 <br/>";
}

//pemanggilan fungsi
perkenalan();



//function hai

function sapaan($nama, $salam)
{
    echo $salam . ",";
    echo "perkenalkan nama saya " . $nama . " </br> ";
    echo "Senang berkenalan dengan anda";
}

//inisiasi fungsu hai

sapaan("Komang", "hi ");

echo "<hr>";

$saya = "medi";
$ucapansalam = "Assalamualaikum";

//memangggil fungsi sapaan

sapaan($saya, $ucapansalam);
