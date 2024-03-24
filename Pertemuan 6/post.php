<!--Variabel $_POST
    Variabel $_POST mirip dengan variabel $_GET.
    Hanya saja data yang di-passing tidak melalui query string pada URL,
    akan tetapi pada body request.
-->
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['fname'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>
    </body>
</html>