<!--
    Praktik pemanggilan array menggunakan array key, bukan memakai numerik index
    Ditambahkan juga sebuah tabel.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <!-- penambahan tabel sesuai permintaan dari soal -->
        <table border="1" height=100  width=40% >
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan' ];

            echo "<td> Nama <td>{$Dosen ['nama']} <br>";
            echo "<tr>";
            echo "<td>Domisili <td>{$Dosen ['domisili']} <br>";
            echo "<tr>";
            echo "<td>Jenis Kelamin  <td>{$Dosen ['jenis_kelamin']} <br>";
        ?>
        </table>
        
    </body>
</html>