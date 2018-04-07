$("document").ready(function(){
  $("#busca").keyup(function(){
	var $this = $(this);
	var val   = $this.val();
	console.log(val);
	
	if(val == ""){
		$('.src').html("");
	}else{
		$.ajax({
		  url: "busca.php",
		  type: "POST",
		  data: {nome: val},
		  cache: false,
		  
		  success: function(res){
			$('.src').html(res);
		  }
		  
		});
	}
	
  });
  
  $('html, body').click(function(){
	$('.src').html("");
  });
  
});


$("document").ready(function(){
  $("#buscat").keyup(function(){
	var $this = $(this);
	var val   = $this.val();
	console.log(val);
	
	if(val == ""){
		$('.srcc').html("");
	}else{
		$.ajax({
		  url: "busca.php",
		  type: "POST",
		  data: {nome: val},
		  cache: false,
		  
		  success: function(res){
			$('.srcc').html(res);
		  }
		  
		});
	}
	
  });
  
  $('html, body').click(function(){
	$('.srcc').html("");
  });
  
});
