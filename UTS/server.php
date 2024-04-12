<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $kontak = htmlspecialchars($_POST["kontak"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $kota = htmlspecialchars($_POST["kota"]);
    $pos = htmlspecialchars($_POST["pos"]);
    $produk = htmlspecialchars($_POST["produk"]);
    $seri = htmlspecialchars($_POST["seri"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $keterangan = htmlspecialchars($_POST["Keterangan"]);

}
?>
