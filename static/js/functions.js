$(document).ready(function() {
    $("#registrar").click(function() {
        var emailr = $("#emailr").val(); 
        var senhar = $("#senhar").val();
		var nomer = $("#nomer").val(); 
        var sobrenomer = $("#sobrer").val();
        var pincode = $("#pincode").val();
        $.post("register.php", {emailr: emailr,senhar: senhar,nomer: nomer,sobrenomer: sobrenomer,pincode: pincode},
        function(data){
         $("#resposta").html(data);
         }
         , "html"); 
         return false;
    });
});

$(document).ready(function() {
    $("#logar").click(function() {
        var emaill = $("#emaill").val(); 
        var senhal = $("#senhal").val();
        $.post("login.php", {emaill: emaill,senhal: senhal},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});

$(document).ready(function() {
    $("#verifique").click(function() {
        var pincode = $("#pincode").val(); 
        $.post("verificando.php", {pincode: pincode},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});