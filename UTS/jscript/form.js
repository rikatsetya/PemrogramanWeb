$(document).ready(function () {
    
    $("#error-file").text("");
    $("#link-button").click(function () {
        $("#link-button").css("color", "red");
    });

    $("#upload-button").mouseover(function () {
        $("#upload-button").css("background", "#73C2BE");
        $("#upload-button").css("color", "#04030F");
    });
    $("#upload-button").mouseout(function () {
        $("#upload-button").css("background", "#7C98B3");
        $("#upload-button").css("color", "white");
    });
    $("#upload-button").click(function () {
        $("#upload-button").css("color", "red");
    });

    $("#back-login").click(function () {
        history.back();
    });

    $("#back-login").mouseover(function () {
        $("#back-login").css("background", "#73C2BE");
        $("#back-login").css("color", "#04030F");
    });
    $("#back-login").mouseout(function () {
        $("#back-login").css("background", "#7C98B3");
        $("#back-login").css("color", "white");
    });
    $("#back-login").click(function () {
        $("#back-login").css("color", "red");
    });

    $("#form-upload").submit(function (e) {
        if ($("form-upload").change()) {
                $("#link-button").prop('disabled', false).css('opacity', 1);
                $("#link-button").mouseover(function () {
                    $("#link-button").css("background", "#73C2BE");
                    $("#link-button").css("color", "#04030F");
                });
                $("#link-button").mouseout(function () {
                    $("#link-button").css("background", "#7C98B3");
                    $("#link-button").css("color", "white");
                });
            } else {
                $("#link-button").prop('disabled', true).css('opacity', 0.5);
            }

        e.preventDefault();

        var formData = new FormData(this);
        // var formData = $("#form-upload").serialize();

        $.ajax({
            type: 'POST',
            url: 'serverForm.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#error-file").html(response);
            },
            error: function () {
                $("#error-file").html('Terjadi kesalahan saat mengunggah file.');
            }
        });

    });

});