var down = document.getElementById('down');
var menu = document.getElementById('menu');
var newsdiv = document.getElementById('newsdiv');
var newsdiv2 = document.getElementById('newsdiv2');

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
              newsdiv2.style = "display: none;";
           }
       });

         $('#now2').click(function(){
          if (newsdiv2.style.display === "block") {
             newsdiv2.style = "display: none;";
          } else {
              newsdiv2.style = "display: block;";
              newsdiv.style = "display: none;";
           }
       });

    $('#menu').on('mouseleave', function(){
        	menu.style = "display:none;";
		});

    $('#newsdiv').on('mouseleave', function(){
          newsdiv.style = "display:none;";
    });

     $('#newsdiv2').on('mouseleave', function(){
          newsdiv2.style = "display:none;";
    });