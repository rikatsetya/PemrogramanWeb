<?php
/*
    fungsi empty digunakan untuk melakukan pengecekan pada sebuah variabel,
    apakah memiliki nilai atau kosong, dan apakah variabel telah terdefinisi atau tidak.
*/
$myArray = array(); // Array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<hr>";

// melakukan pengecekan pada variabel yang tidak ada.
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>