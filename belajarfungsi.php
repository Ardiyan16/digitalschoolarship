<?php
function perkenalan(){
    echo "Selamat Datang, ";
    echo "Pada Acara Digital Talent <br>";
    echo "2019<br>";
}

function perkenalanNama($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda<br>";
} 

perkenalan();
perkenalanNama("Helmi", "Hi");

echo "<br>";
$saya ="Helmi";
$ucapanSalam ="Selamat Pagi";
perkenalanNama($saya, $ucapanSalam);
?>