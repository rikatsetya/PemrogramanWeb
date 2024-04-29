<?php
session_start(); // Memulai sesi untuk penggunaan token CSRF
include 'koneksi.php'; // Mengimpor file koneksi.php untuk terhubung ke database
include 'csrf.php'; // Mengimpor file csrf.php untuk menangani token CSRF

// Mengambil data dari form menggunakan metode POST dan membersihkannya dari karakter khusus
$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Memeriksa apakah ID kosong (menandakan operasi tambah data) atau tidak (menandakan operasi edit data)
if ($id == "") {
    // Jika ID kosong, maka tambahkan data anggota baru ke database
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    // Jika ID tidak kosong, maka perbarui data anggota yang sudah ada di database
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id =?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

// Mengembalikan respons JSON yang berisi informasi sukses
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi dengan database
$db1->close();
?>