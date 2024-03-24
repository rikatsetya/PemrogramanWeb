<?php
/*
    Program awalnya akan membuat sebuah fungsi untuk melakukan pencetakan “halo dunia”.
    Setelah dicetak, di dalam fungsi tersebut terdapat pemanggilan fungsi itu sendiri atau rekursif.
    Maka akan mencetak  “halo dunia”, kemudian memanggil lagi.
    Hal ini akan membuat sebuah loop tanpa henti.

function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";

    tampilkanHaloDunia();
}

tampilkanHaloDunia();
*/
for ($i=1; $i<=25; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

function tampilkanAngka (int $jumlah, int $indeks=1) {
    echo "Perulangan ke-{$indeks} <br>";
    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka ($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
/*
    Pada perulangan for, dilakukan perulangan selama kondisi $i kurang dari sama dengan 25.
    Untuk fungsi rekursif, diperlukan sebuah parameter.
    Terdapat percabangan untuk sebuah kondisi rekursif.
    Terdapat $indeks + 1 karena kondisi percabangan tersebut hanya sampai kurang dari $jumlah.
*/

?>