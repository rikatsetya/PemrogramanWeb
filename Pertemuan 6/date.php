<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3> Date </h3>
        <?php
            // "tahun/bulan/tanggal"
            echo "Today is " . date("Y/m/d") . "<br>";
                    
            // "tahun.bulan.tanggal"
            echo "Today is " . date("Y.m.d") . "<br>";

            // Menampilkan nama hari ini
            echo "Today is " . date("l");
        ?>
    </body>
</html>