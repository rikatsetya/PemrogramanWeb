<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Claim Garansi</title>
    <link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <script src="jscript/jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
</head>

<body>
    <script>
        alert("Anda berhasil login, email: <?php echo $_SESSION["email"]; ?> telah terdaftar");
    </script>
    <div class="main-container">
        <form id="form-upload" action="serverForm.php" method="POST" enctype="multipart/form-data">
            <h3>Formulir Klaim Garansi</h3>
            <hr color="black">
            <h4>Data Pembeli</h4>
            <div align="left">
                <label for="nama">Nama Lengkap:</label><br>
                <input type="text" name="nama" id="nama" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" required value="<?php echo $_SESSION['email'] ?>"><br>
                <label for="kontak">No. HP / Telp:</label><br>
                <input type="text" name="kontak" id="kontak" required><br>
                <label for="alamat">Alamat Pengirim:</label><br>
                <input type="text" name="alamat" id="alamat" required><br>
                <label for="kota">Kota:</label><br>
                <input type="text" name="kota" id="kota" required><br>
                <label for="pos">Kode Pos:</label><br>
                <input type="text" name="pos" id="pos" required><br>
                <label for="produk">Produk:</label><br>
                <input type="text" name="produk" id="produk" required><br>
                <label for="seri">Nomor Seri:</label><br>
                <input type="text" name="seri" id="seri" required><br>
                <label for="tanggal">Tanggal Beli: <br>
                    <input type="date" id="tanggal" name="tanggal" value="2024-04-22" />
                </label><br>
                <label for="file">Invoice Pembelian</label><br>
                <input type="file" class="choose" name="file[]" id="file" required>
                <label for="file">TTD:</label><br>
                <input type="file" class="choose" name="file[]" id="file" required>
                <label for="keterangan">Keterangan Kerusakan:</label><br>
                <textarea class="keterangan" name="keterangan" id="keterangan" required cols="30" rows="10">*Rincian Kerusakan</textarea><br>
            </div>
            <div id="error-file"> </div>
            <hr color="black">
            <button type="button" name="back-login" class="back-login" id="back-login"> Kembali ke Login </button>
            <button type="submit" name="submit" class="upload-button" id="upload-button"> Submit Form </button>
            <a href="hasilForm.php">
                <button type="button" name="submit" class="link-button" id="link-button" disabled > link Hasil Form </button>
            </a>
            
        </form>
    </div>
    <script src="jscript/form.js"></script>
</body>

</html>