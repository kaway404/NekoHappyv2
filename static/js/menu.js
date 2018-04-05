var down = document.getElementById('down');
var menu = document.getElementById('menu');
var newsdiv = document.getElementById('newsdiv');

      	 	 $('#down').click(function(){
        	if (menu.style.display === "block") {
        	 	 menu.style = "display: none;";
        	} else {
            	menu.style = "display: block;";
      	 	 }
   		 });

        $('#now').click(function(){
          if (newsdiv.style.display === "block") {
             newsdiv.style = "display: none;";
          } else {
              newsdiv.style = "display: block;";
           }
       });

      	 	   $('#menu').on('mouseleave', function(){
        	menu.style = "display:none;";
		});

    $('#newsdiv').on('mouseleave', function(){
          newsdiv.style = "display:none;";
    });