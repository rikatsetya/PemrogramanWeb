<?php
/*
    sebuah fungsi dalam PHP yang digunakan untuk memeriksa apakah suatu variabel telah
    didefinisikan (ada) atau tidak.Fungsi ini mengembalikan true jika variabel telah
    didefinisikan dan memiliki nilai, dan false jika variabel tidak ada atau bernilai null.
*/
$umur;
// mengecek apakah variabel $umur telah di deklarasi dan bernilai null atau tidak.
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

echo"<hr>";

// Mengecek array $data dengan key nama apakah ada nilainya atau tidak.
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama:". $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>
