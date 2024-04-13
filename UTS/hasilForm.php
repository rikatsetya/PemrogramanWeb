<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/styleHasil.css">
    <script src="jscript/jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
</head>

<body>
    <div class="main-container">
        <h1>Form Claim Garansi Terikirim</h1>
        <hr color="black">
        <div>
            <h3>Data Pembeli</h3>
            <table cellpadding=3px>
                <tr align="left" >
                    <td width=20%>Nama Lengkap</td>
                    <td colspan="3"><?php echo $_SESSION["nama"]; ?></td>
                </tr>
                <tr align="left" >
                    <td>Alamat</td>
                    <td colspan="3"><?php echo $_SESSION["alamat"]; ?></td>
                </tr>
                <tr align="left" >
                    <td>Email</td>
                    <td><?php echo $_SESSION["email"]; ?></td>
                    <td width=20%>No. telp / HP</td>
                    <td width=20%><?php echo $_SESSION["kontak"]; ?></td>
                </tr>
                <tr align="left" >

                    <td>Kota</td>
                    <td><?php echo $_SESSION["kota"]; ?></td>
                    <td>Kode Pos</td>
                    <td><?php echo $_SESSION["pos"]; ?></td>
                </tr>
                <tr align="left" >
                    <td>Produk</td>
                    <td colspan="3"><?php echo $_COOKIE["produk"]; ?></td>

                </tr>
                <tr align="left" >
                    <td>Nomor Seri</td>
                    <td><?php echo $_COOKIE["seri"]; ?></td>
                    <td>Tanggal Pembelian</td>
                    <td><?php echo $_COOKIE["tanggal"]; ?></td>
                </tr>
                <tr>
                    <td colspan="4"><img src="<?php echo $_SESSION["file"][0] ?>" class="invoice"></td>
                </tr>
                <tr>
                    <td  align="left"  colspan="3">Keterangan Kerusakan:
                        <?php echo $_COOKIE["keterangan"]; ?>
                    </td>
                    <td align="right"><img src="<?php echo $_SESSION["file"][1] ?>" class="signature"></td>
                </tr>
            </table>

        </div>

        <br>
        <button type="button" name="back-button" class="back-button" id="back-button"> Kembali mengisi form </button>
    </div>
    <script src="jscript/hasilForm.js"></script>
</body>

</html>