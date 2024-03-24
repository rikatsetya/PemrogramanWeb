<!--Variabel $_SERVER
    Array yang menyediakan berbagai macam informasi tentang
    request yang ditangkap oleh server. Data yang dimuat berupa headers,
    paths, lokasi skrip, dan sebagainya.
-->

    <?php
    echo $_SERVER['PHP_SELF']; // Menampilkan path skrip saat ini
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // Menampilkan nama server
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; // Menampilkan hostname dari HTTP header
    echo "<br>";
    echo $_SERVER['HTTP_REFERER']; // Menampilkan URL referer jika ada
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // Menampilkan informasi tentang user agent
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']; // Menampilkan path skrip saat ini
?>