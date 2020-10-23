jQuery(document).ready(function(){

	jQuery("#mmenu").mmenu({
		offCanvas: {
		   position  : "left"
		}
	 });
	 
	jQuery('[data-fancybox]').fancybox({
		youtube : {
			controls : 0,
			showinfo : 0
		},
		vimeo : {
			color : 'f00'
		}
	});

	jQuery("#bannerSlider").owlCarousel({
		navigation : true,
	 	navigationText: [" <i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		items: 1,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [767,1],	
	        	
	});	

	jQuery("#definitely").owlCarousel({
		navigation : true,
	 	navigationText: [" <i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		items: 6,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [767,1],	
	        	
	});	

	jQuery("#storSlid2").owlCarousel({
		navigation : true,
	 	navigationText: [" <i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		items: 4,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [767,1],	
	        	
	});	
	
	jQuery("#storSlid3").owlCarousel({
		navigation : true,
	 	navigationText: [" <i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		items: 4,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [767,1],	
	        	
	});	

	jQuery("#bannerslide").owlCarousel({	
		navigation : true,
	 	navigationText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		singleItem : true,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [767,1],	
	});
	
	
	jQuery("#owl-example").owlCarousel({		
		navigation : false,
	 	navigationText: [" <i class='far fa-arrow-alt-circle-left'></i>", "<i class='far fa-arrow-alt-circle-right'></i>"],
		dots: true,
		autoPlay: true,
		slideSpeed : 1000,
		autoplaySpeed: 4000,
		mouseDrag: true,
		items: 3,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [767,1],	
        	
	});	

	jQuery(document).ready(function(){
	  $("li.categories").click(function(){
		$("ul.categor_list").slideToggle("slow");
	  });
	});	
	
	jQuery(".innerbannerArea ul>li").hover(		
		function() {
		jQuery(".innerbannerArea ul>li").removeClass('active');		
			jQuery(this).addClass('active');
				}	
		);	
		jQuery( ".innerbannerArea ul>li" ).click(function(){
		jQuery(this).toggleClass('active');	
	});
	
	/* print button */
	jQuery('.actionArea a#print').click(function() { 
	   jQuery("a[href]").contents().unwrap();
	   window.print();
	   return false;
	});
	
	/* sticky header */
	var target = jQuery('#bannerWrapper').offset().top;
		jQuery(window).scroll(function() {
			if (jQuery(window).scrollTop() > target) {
			jQuery('#headerWrapper').addClass('sticky');
			} else {
			jQuery('#headerWrapper').removeClass('sticky');       
		}
	});
	
	/* scroll top button */
	jQuery('.scrollto').click(function() {
		jQuery("html,body").stop().animate({scrollTop:jQuery('#middleWrapper').offset().top}); 
	});
	
	jQuery('.closebtn').click(function(e){    
		jQuery('#closepopup').fadeOut('slow', function(){});
	});
	
	 
});


