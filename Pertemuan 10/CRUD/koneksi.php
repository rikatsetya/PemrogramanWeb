<!--
    file php untuk menyambungkan dengan database MySql.
-->
<?php
$koneksi = mysqli_connect("localhost","root","","prakwebdb");

if (mysqli_connect_errno()){
    die("Koneksi Database gagal : " . mysqli_connect_error());
}
?>