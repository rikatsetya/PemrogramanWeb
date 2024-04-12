$(document).ready(function(){
    $("#back-button").click(function(){
        history.back();
    });
    
    $("#back-button").mouseover(function(){
        $("#back-button").css("background", "#73C2BE");
        $("#back-button").css("color", "#04030F");
    });
    $("#back-button").mouseout(function(){
        $("#back-button").css("background", "#7C98B3");
        $("#back-button").css("color", "white");
    });
    $("#back-button").click(function(){
        $("#back-button").css("color", "red");
    });
})