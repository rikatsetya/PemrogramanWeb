<?php
/*
    Pada soal 10.a dan 10.b, dapat dilihat perbedaannya bahwa petik 1 tidak dapat menjalankan command \n, sehingga ikut terprint.
    Pada soal 10.c dan 10.d juga terdapat perbedaan yang sama seperti sebelumnya.
    Pada soal 10.e dan 10.f juga tidak bisa menjalankan fungsi command \t pada 10.f
    Pada soal 10.g dan 10.h saya tidak bisa membedakan selain pada petik 1 atau 2 pada output.
*/
echo "Baris\nbaru <br>"; //soal 10.a
echo 'Baris\nbaru <br>'; //soal 10.b
echo "Halo\rDunia <br>"; //soal 10.c
echo 'Halo\rDunia <br>'; ////soal 10.d

echo "<pre>Halo\tDunia!</pre>"; //soal 10.e
echo '<pre>Halo\tDunia!</pre>'; //soal 10.f

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //soal 10.g
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //soal 10.h
?>