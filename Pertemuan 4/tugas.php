<?php
/*
    Diberikan Soal Tugas, untuk menampilkan sebuah data siswa/orang pada array multi dimensional.
    Disini saya menggunakan array 3 dimensional, dimana pada dimensi array sebagai wadah dari array rows and columns.
    Untuk pemanggilan dari array tersebut, saya menggunakan perulangan foreach sederhana, sesuai yang saya pahami cara penggunaannya saja.
*/
$profil = [
    'org1' => [
        ["<img src='orang2.jpg' height=200 width=300>","Rikat", "Jl.Bandulan", "08993668080", "Teknologi Informasi"],
    ],
    'org2' => [
        ["<img src='orang1.jpg' height=200 width=300>", "Karina", "Jl.Mergan", "089988899998", "Teknologi Informasi"],
    ],
];
echo "<hr>Rikat Setya Gusti<hr>";
foreach($profil as $data){
    echo "{$data[0][0]}<br> Nama: {$data[0][1]}<br> Alamat: {$data[0][2]}<br> No.Telp: {$data[0][3]}<br> Jurusan {$data[0][4]}<hr>";
}
?>