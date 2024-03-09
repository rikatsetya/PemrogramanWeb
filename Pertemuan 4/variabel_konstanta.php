<?php
/*
    Pada praktikum pertama ini hanya sebuah pengenalan terhadap php.
    Praktikum ini dimulai dengan membuat dan mendeklasrasikan sebuah variabel.
    Variabel pada php menggunakan simbol $(dolar).
    Beberapa variabel yang sudah familiar seperti interger, String, boolean, dll.
    Diajarkan juga cara mendefinisikan konstanta untuk nilai tetap.
*/
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";

$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah $salah. <br>";

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di ". NAMA_SITUS . ", situs yang didirikan pada tahun ". TAHUN_PENDIRIAN. ".";
?>