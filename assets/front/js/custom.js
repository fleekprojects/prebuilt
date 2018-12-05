
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

	function show(id,value= null){$(id).slideDown(value);}
	function hide(id,value= null){$(id).slideUp(value);}
	$('select').each(function(){
	    var $this = $(this), numberOfOptions = $(this).children('option').length;

	    $this.addClass('select-hidden');
	    $this.wrap('<div class="select"></div>');
	    $this.after('<div class="select-styled"></div>');

	    var $styledSelect = $this.next('div.select-styled');
	    $styledSelect.text($this.children('option').eq(0).text());

	    var $list = $('<ul />', {
	        'class': 'select-options'
	    }).insertAfter($styledSelect);

	    for (var i = 0; i < numberOfOptions; i++) {
	        $('<li />', {
	            text: $this.children('option').eq(i).text(),
	            rel: $this.children('option').eq(i).val()
	        }).appendTo($list);
	    }

	    var $listItems = $list.children('li');

	    $styledSelect.click(function(e) {
	        e.stopPropagation();
	        $('div.select-styled.active').not(this).each(function(){
	            $(this).removeClass('active').next('ul.select-options').hide();
	        });
	        $(this).toggleClass('active').next('ul.select-options').toggle();
	    });

	    $listItems.click(function(e) {
	        e.stopPropagation();
	        $styledSelect.text($(this).text()).removeClass('active');
	        $this.val($(this).attr('rel'));
	        $list.hide();
	        //console.log($this.val());
	    });

	    $(document).click(function() {
	        $styledSelect.removeClass('active');
	        $list.hide();
	    });

	});



	$('#youHavedomainName').change(function(){
		var value = $( 'input[name=youHavedomainName]:checked' ).val();
if(value == 'no'){
	show('#domainSearch');
	hide('#domainHave');
}else if(value == 'yes'){
	show('#domainHave');
	hide('#domainSearch');
}
else{
	hide('#domainSearch');
	hide('#domainHave');
}

})

    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
			
                reader.onload = function (e) {
					
                    $('#img')
					
                        .attr('src', e.target.result)
                        .width(276)
                        .height(200);
                };
            var fd = new FormData();
        var files = $('#file-upload')[0].files[0];
        fd.append('file',files);
                	 $.ajax({
            url: 'save-user-info',
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response !=0){

                    $("#img").attr("src",response); 
                    $("#img").css("display", "block"); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
                // reader.readAsDataURL(input.files[0]);
				
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
console.log(document.cookie);
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
function SaveChanges1(q) {

	var name= $('#name').val();
	var filepath= $('#img').attr('src');
	var e = document.getElementById(q);
	var industry = e.options[e.selectedIndex].value ;
	var userinfo = [name, industry, filepath];
	$.cookie('userinfo',userinfo);
	window.location.href = baseUrl+"/select-domain";
}

function SaveChanges2() {
	var cook= $.cookie("userinfo");
	var domain= $('#domain').val();
	var have_domain = document.querySelector('input[name="youHavedomainName"]:checked').value;	// var filepath= $('#img').attr('src');
	var cookie=cook+','+have_domain+','+domain;
	$.cookie('userinfo',cookie);
	window.location.href = baseUrl+"/select-theme";
}
function themeSelect(id){
  	$('#theme_id').val(id);
  }
 
function SaveChanges3() {
	var themeid= $('#theme_id').val();
	var cook= $.cookie("userinfo");
	var cookie=cook+','+themeid;
	$.cookie('userinfo',cookie);
	window.location.href = baseUrl+"/other-info";
}
 function packageSelect(id){
  	$('#packageid').val(id);
  }
function SaveChanges4() {
	var cook= $.cookie("userinfo");
	var comment= $('#comment').val();
	var cookie=cook+','+comment;
	$.cookie('userinfo',cookie);
	window.location.href = baseUrl+"/select-package";
}
function SaveChanges5() {
	var packageid= $('#packageid').val();
	var cook= $.cookie("userinfo");
	var cookie=cook+','+packageid;
	$.cookie('userinfo',cookie);
	window.location.href = baseUrl+"/checkout";
}
function SaveChanges6() {

	var name= $('#name').val();
	var phone= $('#phone').val();
	var email= $('#email').val();
	var radio=$('input:radio[name=optradio]:checked').val();
	var cook= $.cookie("userinfo");
	var cookie=cook+','+name+','+phone+','+email+','+radio+','+name;
	$.cookie('userinfo',cookie);

		 $.ajax({
            url: 'checkout/submit',
            type: 'POST',
            data: cookie,
            success: function(response){
                if(response !=0){
                    $("#img").attr("src",response); 
                    $("#img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
	// window.location.href = baseUrl+"/checkout";
}


		