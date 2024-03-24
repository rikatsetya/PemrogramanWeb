<?php
/*
        Pada awal, dilakukan pembuatan variable denga isi String.
        Pada pemanggilan pertama, hanya memanggil variable secara normal.
        Pada pemanggilan ke 2, adalah untuk menghitung panjang sebuah String.
        Pada pemanggilan ke 3 dilakukan untuk penghitungan jumlah kata pada String.
        Untuk pemanggilan ke 4 adalah pencetakan variable dengan fungsi semua karakter menggunakan uppercase.
        Untuk pemanggilan ke 5, dilakukan sama seperti pemanggilan ke 4 tapi semua karakter akan menjadi lowercase.
*/
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
        impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam?
        Quos impedit eum nulla optio.";
        
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum)."<br>";
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>";
echo "<p>" .strtoupper($loremIpsum). "</p>";
echo "<p>" .strtolower($loremIpsum). "</p>";
?>