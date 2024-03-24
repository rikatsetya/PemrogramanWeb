<?php
/*
    Fungsi yang dibuat pada hitungUmur adalah fungsi operasi
    penghitungan tahun sekarang dikurangi tahun lahir.
    Dalam pemanggilan hasilnya, hanya perlu dipanggil
    fungsi hitungUmur dengan mengisi parameter.
*/
function perkenalan() {
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Rikat <br/>";
    echo "Senang berkenalan dengan Anda</br>";
}

perkenalan();
perkenalan();

echo "<hr>";

//Pembuatan fungsi dengan parameter
function perkenalan2($nama, $salam) {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//pemanggilan pertama
perkenalan2("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";
// pemanggilan ke dua
perkenalan2($saya, $ucapanSalam);

echo "<hr>";

// Pembuatan parameter dengan nilai default
function perkenalan3($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// //Cara memanggil function yang telah dibuat
perkenalan3("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// //Memanggil function kembali
perkenalan3($saya);

echo "<hr>";

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan4($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003, 2023) ." tahun<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan4("Elok");
?>