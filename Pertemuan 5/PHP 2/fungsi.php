<?php
/*
    Fungsi yang dibuat pada hitungUmur adalah fungsi operasi
    penghitungan tahun sekarang dikurangi tahun lahir.
    Dalam pemanggilan hasilnya, hanya perlu dipanggil
    fungsi hitungUmur dengan mengisi parameter.
*/
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Rikat","Halo");
perkenalan("Handana", "Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";
//memanggil lagi
perkenalan($saya);

echo "<hr>";

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// echo "Umur saya adalah " . hitungUmur(2003,2023)."tahun";

function perkenalan2 ($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(1988, 2023)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
perkenalan2 ("Rikat");

?>