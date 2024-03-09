<?php
/*
    Pada Praktikum 4, diajarkan tentang penggunaan Struktur Kontrol Pada php.
    Struktur kontrol yang dimaksud, adalah sistem percabangan seperti ifelse,
    sebagai sebuah pengecekan menggunakan kondisi. Ada pula while. Terdapat perulangan
    seperti for, dan foreach yang masing-masing penggunaannya tergantung situasi.
    Struktur kontrol ini sudah familiar digunakan pada bahasa pemrograman lain.
    Terdapat sebuah Soal Cerita sebagai studi kasus pendalaman materi praktikum.
    Pada proses pengerjaannya, saya menggunakan beberapa syntax yang saya dapat dari website W3Schools.
*/
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: c";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<hr>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<hr>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<hr>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<hr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }
echo "<hr>";

/* Soal Cerita 4.6
    Soal: Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.
    Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah.
    Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan
    nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah.
    Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96).
*/

$nilaiMat = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Nilai para siswa: ";
foreach ($nilaiMat as $x) {
    echo "$x ";
}
echo "<br>Nilai setelah sorting: ";
sort($nilaiMat);
foreach ($nilaiMat as $x) {
    echo "$x ";
}
$jumlahNilaiMat = 0;
$counter=0;
for ($i = 2; $i < (sizeof($nilaiMat)-2); $i++){
    $jumlahNilaiMat += $nilaiMat[$i];
    $counter++;
}
$rataRataNilai = $jumlahNilaiMat / $counter;
echo "<br> Rata-rata nilai Matematika = $rataRataNilai<hr>";

/* Soal Cerita 4.7
    Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000.
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000.
    Bantu pelanggan ini untuk menghitung harga yang harus
    dibayar setelah mendapatkan diskon.
*/

$hargaProduk = 120000;
echo "Harga Produk: $hargaProduk<br>";
if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.20;
    echo "Diskon: $diskon<br>";
    $hargaSetelahDiskon = $hargaProduk - $diskon;
    echo "Harga yang harus dibayar setelah diskon: Rp $hargaSetelahDiskon";
} else {
    echo "Pelanggan tidak mendapatkan diskon <br>";
    echo "Harga yang harus dibayar: Rp $hargaProduk";
}
echo "<hr>";

/* Soal Cerita 4.8
    Seorang pemain game ingin menghitung total skor mereka dalam permainan.
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan.
    Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan.
    Buat tampilan baris pertama “Total skor pemain adalah: (poin)”.
    Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
*/

$skorPemain = 490;
echo "Total skor pemain: $skorPemain<br>";
if ($skorPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
echo "<hr>";
?>