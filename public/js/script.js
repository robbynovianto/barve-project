$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 10) {
	    $("#header").css("background" , "black");
	  }

	  else{
		  $("#header").css("background" , "transparent");
	  }
  })
})
