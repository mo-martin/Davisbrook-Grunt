/* Responsive Nav - */
$(document).ready(function(){
   $("button.navtoggle").click(function(){
        $(".mainlinks").slideToggle();
    });
	
    var current_width = $(window).width();
    if(current_width < 780){
      $(".mainlinks").css("display","");
    }
	else {
		$(".mainlinks").css("display","flex");
	}

  $(window).resize(function(){
    var current_width = $(window).width();
    if(current_width > 780){
      $(".mainlinks").css("display","");
    }
	else {
		$(".mainlinks").css("display","");
	}
  });

/* Add active class to nav */
var path = window.location.pathname.split("/").pop();
if ( path == '' ) {
    path = 'index.php';
}
var target = $('nav .responsivenav a[href="'+path+'"]');
var target2 = $('.secondarynav a[href="'+path+'"]');
target.addClass('active');
target2.addClass('active');

  
/* Google map disable wheel*/ 


$('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
	$('#canvas1').on('click', function () {
		$('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
	});
	$("#map_canvas1").mouseleave(function () {
		$('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
	});
});