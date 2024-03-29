<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pass = $_POST["password"];//penambahan password
    $errors = array();
    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
// penambahan validasi password
    if (empty($pass)) {
        $errors[] = "Password harus diisi";
    } else if (strlen($pass) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }
    // Jika ada kesalahan validəsi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error. "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim:<br> Nama $nama <br>Email = $email <br>$pass";
    }
}
?>