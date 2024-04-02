<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";
// Membuat array untuk soal 2.2
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) { 
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory. $fileName;

        // membuat kondisi if else untuk pengecekan file terhadap array
        if (in_array($fileName,$allowedExtensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "jenis dokumen tidak valid";
        }
        
    }
} else {
    echo "Tidak ada file yang diunggah.";
}