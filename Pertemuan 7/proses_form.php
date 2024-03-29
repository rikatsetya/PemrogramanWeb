<!--
    Berlaku sebagai sebuah server yang menerima input dari file form.php dan akan menampilkan
    data yang masuk dari file form.php tersebut.
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>