
	var track1 = document.getElementById('track1');
	var post = document.getElementById('pub');
	var photo = document.getElementById('photo');
	var track2 = document.getElementById('track2');
	var caper = document.getElementById('caper');
	var track3 = document.getElementById('track3');
  var track = document.getElementById('track');
	var busca = document.getElementById('busca');
	var header = document.getElementById('header');
	var preto = document.getElementById('preto');
  var msgtuto = document.getElementById('nanituto');
  var body = document.getElementById('momer');
  var menu1 = document.getElementById('down');
  var menu2 = document.getElementById('menu');
  var menu3 = document.getElementById('menua');
  var profile = document.getElementById('batatao');
  var track5 = document.getElementById('track5');


      	 	 window.setInterval(function(){

      	 	 	 if (track1.style.display === "none") {
        	    post.style = "z-index: 0; background:#fff;";
        	} else {
             post.style = "z-index: 7000; background:#fff;";
             photo.style = "z-index: 8000;";
      	 	 }

      	 	  if (track2.style.display === "block") {
        	 	 caper.style = "z-index: 6500; background:#fff;";
        	} else {
            	caper.style = "z-index: 0; background:#fff;";
      	 	 }

      	 	 if (track3.style.display === "block") {
        	 	 header.style = "z-index: 9000;";
        	}

           if (track4.style.display === "block") {
             header.style = "z-index: 9000;";
          }

   			 }, 100);

           profile.style= "z-index: 10000";

        $('#click1').click(function(){
        	post.style = "z-index: 0; background:#fff;";
        	photo.style = "z-index: 0;";
        	track1.style = "display: none";
        	track2.style = "display: block";
   		 });

        $('#click2').click(function(){
        	caper.style = "z-index: 0; background:#fff;";
        	track2.style = "display: none;";
        	track3.style = "display: block;";
   		 });

      $('#click3').click(function(){
          menu1.style = "z-index: 5000000;";
          menu2.style = "z-index: 5000000; display: block;";
          track3.style = "display: none;";
          track4.style = "display: block;";
          preto.style = "display: block;";
           $('#menu').on('mouseleave', function(){
          menu.style = "display:block !important; z-index: 5000000;";
           });
       });

        $('#click4').click(function(){
        	header.style = "z-index: 0;";
        	track3.style = "display: none;";
          track.style = "display: none;";
        	preto.style = "display: none;";
          body.style = "overflow: auto !important;";
           menu1.style = "z-index: 0;";
          menu2.style = "z-index: 0; display: none;";
   		 });

         $('#click5').click(function(){
          track5.style = "display: none;";
          track.style = "display: none;";
          preto.style = "display: none;";
          body.style = "overflow: auto !important;";
       });
  
    $(document).ready(function() {
         $("#click5").click(function() {
          var finalizado = "3"; 
          $.post("/static/php/finish.php", {finalizado: finalizado},
          function(data){
         $("#resposta").html(data);
         }
         , "html");
    });
});

        $('#simtuto').click(function(){
          msgtuto.style = "display: none;";
       });

         $('#simtuto2').click(function(){
          msgtuto.style = "display: none;";
       });

        $('#naotuto').click(function(){
          msgtuto.style = "display: none;";
          track.style = "display: none;";
          post.style = "z-index: 0; background:#fff;";
          preto.style = "display: none;";
          body.style = "overflow: auto !important;";
       });

          $('#naotuto2').click(function(){
          msgtuto.style = "display: none;";
          track.style = "display: none;";
          post.style = "z-index: 0; background:#fff;";
          preto.style = "display: none;";
          body.style = "overflow: auto !important;";
       });


          $(document).ready(function() {
  		   $("#click4").click(function() {
        	var finalizado = "2"; 
        	$.post("/static/php/finish.php", {finalizado: finalizado},
        	function(data){
         $("#resposta").html(data);
         }
         , "html");
          location.href="profile.php";
    });
});

         $(document).ready(function() {
         $("#naotuto").click(function() {
          var finalizado = "2"; 
          $.post("/static/php/finish.php", {finalizado: finalizado},
          function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
