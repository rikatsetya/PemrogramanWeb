<!--Variabel $GLOBALS
    Array asosiatif  yang menyimpan semua variabel global yang
    didefinisikan saat program dijalankan. Variabel $GLOBALS
    merupakan variabel super global PHP yang digunakan untuk
    mengakses variabel global dari mana saja dalam script PHP
-->
<?php
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
};

addition();
echo $z;
?>