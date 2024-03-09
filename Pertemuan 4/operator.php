<?php
/*
    Pada praktikum 3, diberitahu tentang penggunaan operator pada php.
    Untuk list operator php yang bisa digunakan, sudah bisa dilihat pada jobsheet.
    Operator yang digunakan, sudah cukup familiar karena penggunaan bahasa pemrograman yang lain.
    Pada akhir praktikum ini, terdapat soal studi kasus untuk latihan.
*/
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "{$a} + {$b} = {$hasilTambah} <br>";
echo "{$a} - {$b} = {$hasilKurang} <br>";
echo "{$a} * {$b} = {$hasilKali} <br>";
echo "{$a} / {$b} = {$hasilBagi} <br>";
echo "{$a} % {$b} = {$sisaBagi} <br>";
echo "{$a} pangkat {$b} = {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "{$a} = {$b}? {$hasilSama} <br>";
echo "{$a} != {$b}? {$hasilTidakSama} <br>";
echo "{$a} < {$b}? {$hasilLebihKecil} <br>";
echo "{$a} > {$b}? {$hasilLebihBesar} <br>";
echo "{$a} <= {$b}? {$hasilLebihKecilSama} <br>";
echo "{$a} >= {$b}? {$hasilLebihBesarSama} <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "{$a} And {$b} = {$hasilAnd} <br>";
echo "{$a} Or {$b} = {$hasilOr} <br>";
echo "Not {$a} = {$hasilNotA} <br>";
echo "Not {$b} = {$hasilNotB} <br><br>";

$a += $b;
echo "{$a} += {$b} = " . $a . "<br>";
$a -= $b;
echo "{$a} -= {$b} = " . $a . "<br>";
$a *= $b;
echo "{$a} *= {$b} = " . $a . "<br>";
$a /= $b;
echo "{$a} /= {$b} = " . $a . "<br>";
$a %= $b;
echo "{$a} %= {$b} = " . $a. "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "{$a} Identik dengan {$b}? {$hasilIdentik} <br>";
echo "{$a} Tidak Identik dengan {$b}? {$hasilTidakIdentik} <br><br>";

/*
    Soal Cerita 3.6
    Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam,
    28 kursi telah ditempati oleh pelanggan.
    Berapa persen kursi yang masih kosong di restoran tersebut?
*/

$kursi = 45;
$pelanggan = 28;
$sisa = $kursi - $pelanggan;
$persenKursiKosong = ($sisa / $kursi) * 100;

echo "Banyak kursi sebuah resto adalah " . $kursi . " dan pelanggan menempati kursi sebanyak " . $pelanggan . ". Sisa kursi sebanyak " . $sisa . " yang memiliki banyak persen kursi kosong yaitu " . $persenKursiKosong . "%";
?>