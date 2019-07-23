<?php

if(isset($_POST['submit'])){
    $input1 =$_POST['input1'];
    $input2 =$_POST['input2'];
    $ukuran =$_POST['ukuran'];

    if($ukuran =="persegipanjang"){
        echo "Luas Persegi Panjang yaitu ".persegipanjang($input1, $input2);
    }elseif ($ukuran =="segitiga") {
        echo "Luas Segitiga yaitu ".segitiga($input1, $input2);
    }elseif ($ukuran =="belahketupat") {
        echo "Luas Belah Ketupat yaitu ".belahketupat($input1, $input2);
    }
}

function segitiga($input1, $input2){
    $hasilsegitiga = 1/2*$input1*$input2;
    return $hasilsegitiga;
}

function persegipanjang($input1, $input2){
    $hasilpersegipanjang = $input1*$input2;
    return $hasilpersegipanjang;
}

function belahketupat($input1, $input2){
    $hasilbelahketupat = 1/2*$input1*$input2;
    return $hasilbelahketupat;
}


?>
    