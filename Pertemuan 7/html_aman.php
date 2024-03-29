<!--
    Pembuatan sebuah form dengan 2 buah inputan. Terdapat inputan anti injection
    menggunakan fungsi htmlspecialchars sehingga apabila terdapat inputan berupa
    kode html, maka tidak akan dijalankan oleh web. Terdapat email validation untuk
    pengecekan penulisan email.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <form method="post" action="html_aman.php">
            <label for='input'>Input: </label>
            <input type="text" name='input' id='input' required>
            <label for='email'>Email:</label>
            <input type="email" name='email' id='email' required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Input: ".$input;
    echo "<br>";
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        echo "Email: ".$email;
    } else {
        // Tangani input yang tidak valid
        echo "input tidak valid";
    }
}
// Memeriksa apakah input adalah email yang valid

?>