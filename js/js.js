$(function(){
    // scroll vers le bas
    $('#par-ici').click(function(e){
		var anim = $('#qui-suis-je');
		$('html, body').animate({scrollTop : anim.offset().top}, 750);
		e.preventDefault();
	});
	//one page nav	
	$('#menu').onePageNav();

	$('#menu-mobile').onePageNav({
		end : function() {
			$('.menu-mobile').slideUp();
		} 
	});
});

$(document).ready(function(){

	// MENU FIXED ON SCROLL
	$(window).bind('scroll', function() {
	var navHeight = $( window ).height() - 70;
		  if ($(window).scrollTop() > navHeight) {
			  $('nav').addClass('fixed');
		  }
		  else {
			  $('#menu').removeClass('fixed');
		  }
	 });

	 //scroll To to
	 $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#scrollToTop').fadeIn();
        } else {
            $('#scrollToTop').fadeOut();
        }
    });
	    //Click event to scroll to top
		$('#scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});

	// MENU MOBILE
	$('.burger-menu').click(function(e){
		$('#menu-mobile').slideDown();
		e.preventDefault();
	});
	
	$('.close-menu').click(function(e){
		$('#menu-mobile').slideUp();
		e.preventDefault();
	});

 });