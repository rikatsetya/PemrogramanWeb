<?php
session_start(); // Memulai sesi untuk penggunaan token CSRF
include 'koneksi.php'; // Mengimpor file koneksi.php untuk terhubung ke database
include 'csrf.php'; // Mengimpor file csrf.php untuk menangani token CSRF

$id = $_POST['id']; // Mengambil nilai ID anggota dari parameter POST

$query = "DELETE FROM anggota WHERE id=?"; // Query untuk menghapus data anggota berdasarkan ID

$sql = $db1->prepare($query); // Mempersiapkan query SQL

$sql->bind_param("i", $id); // Mengikat parameter ke query untuk mencegah SQL injection

$sql->execute(); // Menjalankan query untuk menghapus data

echo json_encode(['success' => 'Sukses']); // Mengirimkan respons JSON untuk menandakan bahwa operasi penghapusan berhasil

$db1->close(); // Menutup koneksi dengan database
?>