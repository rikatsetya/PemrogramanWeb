<html>

<head>
    <link rel="stylesheet" type="text/css" href="hasilStyle.css">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
</head>

<body>
    <div class="main-container">
        <h1>Form Claim Garansi Terikirim</h1>
        <hr color="black">
        <script>
            <?php
            if (isset($_FILES['file'])) {
                $errors = array();
                $arrayFile = array();
                foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
                    $file_name = $_FILES['file']['name'][$key];
                    $file_size = $_FILES['file']['size'][$key];
                    $file_tmp = $_FILES['file']['tmp_name'][$key];
                    $file_type = $_FILES['file']['type'][$key];
                    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                    $extensions = array("jpeg", "jpg", "png", "gif");

                    if (in_array($file_ext, $extensions) === false) {
                        $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF.<br>";
                    }

                    if ($file_size > 2097152) {
                        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
                    }

                    if (!empty($errors)) {
                        echo implode("", $errors);
                        die();
                    } else {
                        move_uploaded_file($file_tmp, "uploads/" . $file_name);
                        $arrayFile[] = "uploads/" . $file_name;
                    }
                }
            }
            ?>
        </script>

        <div>
            <h3>Data Pembeli</h3>
            <table cellpadding=3px>
                <tr>
                    <td width=20%>Nama Lengkap</td>
                    <td colspan="3"><?php echo htmlspecialchars($_POST["nama"]); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td colspan="3"><?php echo htmlspecialchars($_POST["alamat"]); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo htmlspecialchars($_POST["email"]); ?></td>
                    <td width=20%>No. telp / HP</td>
                    <td width=20%><?php echo htmlspecialchars($_POST["kontak"]); ?></td>
                </tr>
                <tr>

                    <td>Kota</td>
                    <td><?php echo htmlspecialchars($_POST["kota"]); ?></td>
                    <td>Kode Pos</td>
                    <td><?php echo htmlspecialchars($_POST["pos"]); ?></td>
                </tr>
                <tr>
                    <td>Produk</td>
                    <td colspan="3"><?php echo htmlspecialchars($_POST["produk"]); ?></td>

                </tr>
                <tr>

                    <td>Nomor Seri</td>
                    <td><?php echo htmlspecialchars($_POST["seri"]); ?></td>
                    <td>Tanggal Pembelian</td>
                    <td><?php echo htmlspecialchars($_POST["tanggal"]); ?></td>
                </tr>
                <tr>
                    <td colspan="4"><img src="<?php echo $arrayFile[0] ?>" class="invoice"></td>
                </tr>
                <tr>
                    <td colspan="3">Keterangan Kerusakan:
                        <?php echo htmlspecialchars($_POST["keterangan"]); ?>
                    </td>
                    <td align="right"><img src="<?php echo $arrayFile[1] ?>" class="signature"></td>
                </tr>
            </table>

        </div>

        <br>
        <button type="button" name="back-button" class="back-button" id="back-button"> Kembali mengisi form </button>
    </div>
    <script src="hasilForm.js"></script>
</body>

</html>