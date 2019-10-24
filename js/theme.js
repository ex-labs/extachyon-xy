(function($){

	$(document).ready(function() {

		//console.log("Ready for Duty");
        $(".down-box").click(function() {
        $('html,body').animate({
            scrollTop: $("#feature").offset().top},'slow');
        });

		//Init AOS
		AOS.init();
		
		//Add Mobile Nav Class 
		$(".menu-updated-menu-container").addClass('mobile-nav-bg');

		//Add Tachyon Classes to Nav
		var navCount = $("#top-menu li").length;

		for ( i=0; i < navCount; i++ ) {
			$("#top-menu li a").addClass("white-70");
		}

		//Add Tachyon Classes to Custom Logo
		$("custom-logo-link").addClass("dib w4 h2 pa1 grow-large border-box");
		
		var aboveHeight = $('nav').outerHeight();


		//when scroll
        $(window).scroll(function(){

            //if scrolled down more than the header’s height
            if ($(window).scrollTop() > aboveHeight){
             	// if yes, add “fixed” class to the <nav>
              	$("nav").addClass('fixed');
              	$("nav").addClass('navfixed');
              	$("nav").css('background', '#00449e');

            } else {
                // when scroll up or less than aboveHeight
                $("nav").removeClass('fixed');
                $("nav").removeClass('navfixed');
                $("nav").css('background', 'none');
           
            }
        });

        //Mobile Nav Toggle 
        $("#mobile-nav").on("click", function(){
        	$(".mobile-nav-bg").addClass("mobile-nav-open");
        	$("body").addClass('noscroll');
        });

        $(".close-mobile-nav").on("click", function(){
        	$(".mobile-nav-bg").removeClass("mobile-nav-open");
        	$("body").removeClass('noscroll');
        });


	});

})(jQuery);