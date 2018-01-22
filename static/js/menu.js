var down = document.getElementById('down');
var menu = document.getElementById('menu');

      	 	 $('#down').click(function(){
        	if (menu.style.display === "block") {
        	 	 menu.style = "display: none;";
        	} else {
            	menu.style = "display: block;";
      	 	 }
   		 });

      	 	   $('#menu').on('mouseleave', function(){
        	menu.style = "display:none;";
		});