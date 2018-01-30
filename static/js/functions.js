$(document).ready(function() {
    $(".register").click(function() {
        var emailr = $("#emailr").val();
        var senhar = $("#passr").val();
		    var nomer = $("#namer").val();
        var sobrenomer = $("#lastnamer").val();
        var pincode = $("#pincoder").val();
        $.post("register.php", {emailr: emailr,senhar: senhar,nomer: nomer,sobrenomer: sobrenomer,pincode: pincode},
        function(data){
          $(".resposta").html(data);
          $(".alert").show("slow");
          setTimeout(function(){ $(".alert").hide("slow"); }, 8000);
        }
         , "html");
         return false;
    });

    $(".login").click(function() {
        var emaill = $("#emaill").val();
        var senhal = $("#passl").val();
        $.post("login.php", {emaill: emaill,senhal: senhal},
        function(data){
          $(".resposta").html(data);
          $(".alert").show("slow");
          setTimeout(function(){ $(".alert").hide("slow"); }, 8000);
        }
         , "html");
         return false;
    });

    $(".pincode").click(function() {
        var pincode = $("#pin").val();
        $.post("verificando.php", {pincode: pincode},
        function(data){
          $(".resposta").html(data);
          $(".alert").show("slow");
          setTimeout(function(){ $(".alert").hide("slow"); }, 8000);
        }
         , "html");
         return false;
    });

    $(".again").click(function() {
        var senha = $("#passa").val();
        $.post("again.php", {senha: senha},
        function(data){
          $(".resposta").html(data);
          $(".alert").show("slow");
          setTimeout(function(){ $(".alert").hide("slow"); }, 8000);
        }
         , "html");
         return false;
    });
});
