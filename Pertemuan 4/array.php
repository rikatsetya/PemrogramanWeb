<?php
/*
    Pada praktikum array ini, dilakukan beberapa praktikum serta soal latihan studi kasus.
    Percobaan 1 diawali dengan pembuatan array 1 dimensi dengan nilai tiap indeks sudah ditentukan.
    Untuk mengakses sebuah array, diperlukan sebuah perulangan.
    Pada percobaan 1 ini, hingga percobaan ke 3, semuanya menggunakan perulangan foreach.
    Menurut saya, perulangan foreach pada php ini adalah perulangan yang paling mudah digunakan untuk mengakses sebuah array.
    Penggunaan foreach pada percobaan 1 dikombinasikan dengan pengecekan if untuk mengambil data tertentu saja.
    Pada percobaan 2, mulai menggunakan array 2 dimensi.
    Cara kerja penggunaan perulangan masih sama seperti percobaan sebelumnya.
    Pada percobaan 3, digunakan array 3 dimensi.
    Untuk mengakses dimensi dari sebuah array, maka perlu deklarasi variabel dengan nilai yang sama seperti nilai dimensi sebuah array.
    Jika tidak menggunakan variabel untuk mengakses sebuah dimensi, saya menemukan cara lain dari mencoba-coba.
    Pada saat mengerjakan Tugas, saya mencari cara apakah bisa mengakses sebuah row dan column tanpa deklarasi variabel dahulu.
    Kemudian saya teringat metode pemanggilan array 3 dimensi pada bahasa java.
    Sehingga saya coba untuk memakai foreach seperti percobaan 3, yang pada saat pemanggilan (echo),
    saya gunakan pemanggilan array 2 dimensi.
    kode yang saya maksud:
        foreach ($daftarNilai[$mataKuliah] as $nilai) {
            echo "Nama: {$nilai[0]}, Nilai: {$nilai [1]} <br>";
        }
    kode yang saya pakai pada Tugas
        foreach($profil as $data){
            echo "{$data[0][0]}<br> Nama: {$data[0][1]}<br> Alamat: {$data[0][2]}<br> No.Telp: {$data[0][3]}<br> Jurusan {$data[0][4]}<hr>";
        }
*/
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilailulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);
echo "<hr>";

$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ',$karyawanPengalamanLimaTahun);
echo "<hr>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai [1]} <br>";
}
echo "<hr>";

/* SOAL CERITA (soal 5.4)
    Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika.
    Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai.
    Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas.
    Dengan ketentuan nama dan nilai siswa Alice dapat 85,
    Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90.
*/

$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
echo "Daftar nama siswa beserta nilai: <br>";
foreach($daftarNilai as $x){
    echo "{$x[0]}: {$x[1]}<br>";
}

$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiMean = $totalNilai / count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $nilaiMean) {
        $siswaPintar[] = $siswa[0];
    }
}
echo "Nilai rata-rata Kelas: $nilaiMean<br>";

echo "Siswa yang mendapatkan nilai di atas rata-rata adalah: <br>" . implode(", ", $siswaPintar);
echo "<hr>";

?>