<!--
    Kode dibawah akan membuat sebuah id html baru yaitu nama-error dan email-error, di sebelah kanan kotak inputan.
    Id tersebut adalah sebagai variabel pada saat pembuatan function. Variabel tidak akan muncul pada html ketika
    terdapat inputan. Karena itu terdapat pengecekan kondisi untuk inputan tersebut, apakah kosong atau tidak.
    Ketika kosong, maka variabel bernilai “” atau 0 String, kondisi tersebut akan membuat variabel email-error/nama-error
    menampilkan sebuah pesan error. Pesan ditampilkan pada html ber-id email-error/nama-error.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <!-- penambahan source jquery -->
        <script src="jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        
        <!-- <form id="myForm" method="post" action="proses_validasi.php"> penghapusan action akses file
            proses validasi, karena ketika ajax, akan dilakukan pemanggilan file-->
        <form id="myForm">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <!-- Penambahan fitur password -->
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span id="pass-system" style="color: red;"></span><br>

            <input type="submit" value="Submit">
            <hr>
        </form>

        <div id="hasil">
            <!-- Hasil dari ajax akan ditampilkan di sini -->
        </div>
        <p><img src="gambar1.jpg"></p>
        
        <script>
            $(document).ready(function() {
// menyembunyikan gambar jika belum ada data yang masuk
                $("p").hide();
                $("#myForm").submit(function (event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var pass = $("#password").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

// penambahan validasi password minimal 8 karakter
                    
                    if (pass === "") {
                        $("#pass-system").text("Password harus diisi.")
                        valid = false
                    } else if (pass.length < 8) {
                        $("#pass-system").text("Password minimal 8 karakter.");
                        valid = false
                    } else {
                        $("#pass-system").text("");
                    }

                    if (!valid) {
                        event.preventDefault();
                    // Menghentikan pengiriman form jika validasi gagal
                    }

// Penambahan jquery untuk menampilkan gambar jika data valid
                    if (valid) {
                        $("p").show();
                    }
                    
// soal 7.3, penambahan ajax
                    event.preventDefault();

                    var formData = $("#myForm").serialize();
                    // Kirim data ke server PHP
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>