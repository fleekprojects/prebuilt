
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
            ! function(d) { var c = "portfilter"; var b = function(e) { this.$element = d(e);
            this.stuff = d("[data-tag]");
            this.target = this.$element.data("target") || "" };
        b.prototype.filter = function(g) { var e = [],
                f = this.target;
            this.stuff.fadeOut("fast").promise().done(function() { d(this).each(function() { if (d(this).data("tag") == f || f == "all") { e.push(this) } });
                d(e).show() }) }; var a = d.fn[c];
        d.fn[c] = function(e) { return this.each(function() { var g = d(this),
                    f = g.data(c); if (!f) { g.data(c, (f = new b(this))) } if (e == "filter") { f.filter() } }) };
        d.fn[c].defaults = {};
        d.fn[c].Constructor = b;
        d.fn[c].noConflict = function() { d.fn[c] = a; return this };
        d(document).on("click.portfilter.data-api", "[data-toggle^=portfilter]", function(f) { d(this).portfilter("filter") }) }(window.jQuery);



