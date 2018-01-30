$(function(){

  if($(window).width() > 768) {
    var space = $(".frame").height() - $(".frame .container").height();
    if (space > 120) {
        $(".frame").height($(window).height() - 200);
    } else {
        $(".frame").height($(window).height() - 130);
    }
    $(".apresentation img").hide();
  } else {
    $(".frame").height("auto");
    $(".apresentation").height($(window).height() - 200);
    $(".apresentation img").show();
  }
  $(window).resize(function(){
    if($(window).width() > 768) {
      var space = $(".frame").height() - $(".frame .container").height();
      if (space > 120) {
          $(".frame").height($(window).height() - 200);
      } else {
          $(".frame").height($(window).height() - 130);
      }
    } else {
      $(".frame").height("auto");
      $(".apresentation").height($(window).height() - 200);
      $(".apresentation img").show();
    }
  });

  $(".max-height").height($(window).height());
  $(".alert").hide();

  $(".cancel").click(function(){
    $("input").val("");
  });

  $(window).scroll(function(){
    var s = $(this).scrollTop();
    if (s < 10) {
      $(".text-hide-on-scroll").show("slow");
    } else {
      $(".text-hide-on-scroll").hide("fast");
    }
  });

  $(".like-btn").hover(function() {
    $(".reaction-icon").each(function(index, element) {
      setTimeout(function(){
        $(element).addClass("show");
      }, index * 200);
    	});
  }, function() {
    $(".reaction-icon").removeClass("show")
  });
})
