
// this effect function here
AOS.init();
// this is js slider 
$(document).ready(function() {
	var owl = $("#owl-demo");
	$(".owl-carousel").owlCarousel({
      nav:true,
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1920,3], //5 items between 1000px and 901px
      itemsTablet: [1200,2], //2 items between 600 and 0
      itemsMobile :[720,1],  // itemsMobile disabled - inherit from itemsTablet option

      
  });

	  // Custom Navigation Events
	  $(".next").click(function(){
	  	owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
	  	owl.trigger('owl.prev');
	  })
	  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
})
	  $(".stop").click(function(){
	  	owl.trigger('owl.stop');
	  });

	});

    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
			
                reader.onload = function (e) {
					$("#blah").css("display", "block");
                    $('#blah')
					
                        .attr('src', e.target.result)
                        .width(276)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
				
            }
        }



