$(document).ready(function(){
    $("#upload-button").mouseover(function(){
        $("#upload-button").css("background", "#73C2BE");
        $("#upload-button").css("color", "#04030F");
    });
    $("#upload-button").mouseout(function(){
        $("#upload-button").css("background", "#7C98B3");
        $("#upload-button").css("color", "white");
    });
    $("#upload-button").click(function(){
        $("#upload-button").css("color", "red");
    });

    $("#back-login").click(function(){
        history.back();
    });
    $("#back-login").mouseover(function(){
        $("#back-login").css("background", "#73C2BE");
        $("#back-login").css("color", "#04030F");
    });
    $("#back-login").mouseout(function(){
        $("#back-login").css("background", "#7C98B3");
        $("#back-login").css("color", "white");
    });
    $("#back-login").click(function(){
        $("#back-login").css("color", "red");
    });

});