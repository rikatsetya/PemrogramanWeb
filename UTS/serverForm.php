<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["alamat"] = htmlspecialchars($_POST["alamat"]);
    $_SESSION["kontak"] = htmlspecialchars($_POST["kontak"]);
    $_SESSION["nama"] = htmlspecialchars($_POST["nama"]);
    $_SESSION["kota"] = htmlspecialchars($_POST["kota"]);
    $_SESSION["pos"] = htmlspecialchars($_POST["pos"]);


    setcookie("produk", htmlspecialchars($_POST["produk"]), time() + 60);
    setcookie("seri", htmlspecialchars($_POST["seri"]), time() + 60);
    setcookie("tanggal", htmlspecialchars($_POST["tanggal"]), time() + 60);
    setcookie("keterangan", htmlspecialchars($_POST["keterangan"]), time() + 60);
}
if (isset($_FILES['file'])) {
    $errors = array();
    $arrayFile = array();
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpeg", "jpg", "png", "gif");
        $urutan = $key + 1;
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "<br>Ekstensi file ke $urutan yang diizinkan adalah PNG, JPG, JPEG, atau GIF.<br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
        }
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $arrayFile[$key] = "uploads/" . $file_name;
            $_SESSION["file"][$key] = $arrayFile[$key];
        }
    }
    if (empty($errors)) {
        echo "Berhasil Mengirim Form";
    } else {
        echo implode("", $errors);
        die();
    }
}
