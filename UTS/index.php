<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
    <script src="jscript/jquery-3.7.1.js"></script>
    <title>Claim Garansi</title>
</head>

<body>
    <div class="main-container">
        <h2>Login</h2>
        <hr color="black">
        <h5>
            <font color="#720E07">*Untuk mengisi form claim garansi, anda perlu login</font>
        </h5>
        <form id="form-login" action="serverLogin.php" method="POST">
            <table align="center">
                <tr>
                    <td align="left"><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email" required><br></td>
                </tr>
                <tr>
                    <td align="left"><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password" required><br></td>
                </tr>
            </table>
            <span id="login-error" style="color: red;"></span><br>
            <hr color="black"><br>
            <button type="submit" name="submit" class="upload-button" id="upload-button"> Masuk </button>
        </form>
    </div>
    <script src="jscript/form.js"></script>
</body>

</html>