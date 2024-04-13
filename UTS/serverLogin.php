<?php

session_start();

$_SESSION["email"] = "setya@gmail.com";
$_SESSION["password"] = "qwerty";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = "Anda berhasil Login";
    $errors = array();

    if ($email == $_SESSION["email"] && $password == $_SESSION["password"]) {
        header("location:form.php");
    } else if ($email != $_SESSION["email"]) {
        $errors[] = "Email tidak terdaftar";
    } else if ($email == $_SESSION["email"] && $password != $_SESSION["password"]) {
        $errors[] = "Password yang anda masukkan tidak valid";
    }
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <script src="jscript/jquery-3.7.1.js"></script>
    <title>Claim Garansi</title>
</head>

<body>
    <div class="main-container" style="color: red;">
        <p><?php echo implode($errors);?></p>
        <button type="button" class="back-button" id="back-login">Kembali </button>
    </div>
    <script src="jscript/form.js"></script>
</body>

</html>