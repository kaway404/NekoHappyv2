
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

   			 }, 100);

        $('#click1').click(function(){
        	post.style = "z-index: 0; background:#fff;";
        	photo.style = "z-index: 0;";
        	track1.style = "display: none";
        	track2.style = "display: block";
   		 });

        $('#click2').click(function(){
        	caper.style = "z-index: 0; background:#fff;";
        	track2.style = "display: none";
        	track3.style = "display: block";
   		 });

          $('#click3').click(function(){
        	header.style = "z-index: 5000;";
        	track3.style = "display: none";
          track.style = "display: none";
        	preto.style = "display: none";
   		 });

          $(document).ready(function() {
  		   $("#click3").click(function() {
        	var finalizado = "1"; 
        	$.post("/static/php/finish.php", {finalizado: finalizado},
        	function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
