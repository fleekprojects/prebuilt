
// this effect function here
AOS.init();
// this is js slider
$(document).ready(function() {
	  // var stripe = Stripe('pk_test_L59T4T2utlwOMMVqxVGYnsRK');
	  $('#phone').mask('(000) 000-0000');	 
	  	
		if ($("input[name='youHavedomainName']:checked").val() == 0) {
        $('#domainSearch').show();
        $('#domainHave').hide();
    } else if ($("input[name='youHavedomainName']:checked").val() == 1) {
        $('#domainHave').show();
        $('#domainSearch').hide();
    } else {
        $('#domainSearch').hide();
        $('#domainHave').hide();
    }
	

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
  $('input[type=radio][name=youHavedomainName]').change(function() {
    var value = $(this).val();
    if (value == 0) {
        $('#domainSearch').show();
        $('#domainHave').hide();
    } else if (value == 1) {
        $('#domainHave').show();
        $('#domainSearch').hide();
    } else {
        $('#domainSearch').hide();
        $('#domainHave').hide();
    }

})

	function show(id,value= null){$(id).slideDown(value);}
	function hide(id,value= null){$(id).slideUp(value);}
	$('sselect').each(function(){
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





    function readURL(input) {
            if (input.files && input.files[0]) {
               
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
                    $("#imgname").val(response); 
                    $("#img").attr("src",'uploads/logos/'+response); 
                    $("#img").css("display", "block")
                   		 .width(276)
                        .height(200); // Display image element
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

var getUrl = window.location;
var cpath="/prebuilt";
var delaytime=5000;

function SaveChanges1() {
	var name= $('#name').val();
	var imgname= $('#imgname').val();
	var industry = $('#industry_id option:selected').val();

	if(name ==""){

	$('#errorname').html('<small style="color:red;"> Please Enter Business Name </small>');
	setTimeout(function(){$('#errorname').empty();}, delaytime);

	} else if(industry ==""){
	$('#errorindustry').html('<small style="color:red;"> Please Select Industry </small>');
	setTimeout(function(){$('#errorindustry').empty();}, delaytime);



	}  else{


		var formarr=[name,industry,imgname];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[0]=formarr[0];
		userinfo[1]=formarr[1];
		userinfo[2]=formarr[2];
		$.cookie('userinfo',userinfo,{path:cpath});
		window.location.href = baseUrl+"select-domain";
	}
}


function SaveChanges2() {
	var domain= $('#domain').val();
	var domainaddress= $('#domain_name_search').val();
	var have_domain = $('input[name="youHavedomainName"]:checked').val();
		 // var filepath= $('#img').attr('src');
		 
	if(have_domain ==1){

	   if (/^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$/.test(domain)){
    
	
		if(domain ==""){
		$('#errordomain').html('<small style="color:red;"> Please Enter Domain Name</small>');
		setTimeout(function(){$('#errordomain').empty();}, delaytime);
		}
		 else{

		var formarr=[have_domain,domain];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[3]=formarr[0];
		userinfo[4]=formarr[1];

		$.cookie('userinfo',userinfo,{path:cpath});
		window.location.href = baseUrl+"select-theme";
		}
		
	  }
	 else {
	 	
	    $('#errordomain').html('<small style="color:red;"> Invalid Domain Name EXAMPLE (google.com) </small>');
	    setTimeout(function(){$('#errordomain').empty();}, delaytime);
		 
		}
	}
	else
	{

		if(domainaddress ==""){
		$('#errordomainaddress').html('<small style="color:red;"> Please Enter Domain Address</small>');
			setTimeout(function(){$('#errordomainaddress').empty();}, delaytime);
		
		}
		 else{


		var formarr=[have_domain,domain];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[3]=formarr[0];
		userinfo[4]=formarr[1];



		$.cookie('userinfo',userinfo,{path:cpath});

		window.location.href = baseUrl+"select-theme";
		}


	}

}
function themeSelect(id){
	$(this).addClass('testing');
  	$('#theme_id').val(id);
  }
 
function SaveChanges3() {
	var themeid= $('#theme_id').val();
	
	if(themeid ==""){
		$('#errortheme').html('<small style="color:red;"> Please select atleast one</small>');

	}
	else{
		var formarr=[themeid];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[5]=formarr[0];

		$.cookie('userinfo',userinfo,{path:cpath});

	window.location.href = baseUrl+"other-info";
	}
}
 function packageSelect(id){
  	$('#packageid').val(id);
  }
function SaveChanges4() {

	var comment= $('#comment').val();
	var formarr=[comment];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[6]=formarr[0];

		$.cookie('userinfo',userinfo,{path:cpath});

		window.location.href = baseUrl+"select-package";
	
}
function SaveChanges5() {
	var packageid= $('#packageid').val();

	if(packageid ==""){
		$('#errorpackage').html('<small style="color:red;"> Please select atleast one</small>');
		 setTimeout(function(){$('#errorpackage').empty();}, delaytime);
  
	}
	else{

	var formarr=[packageid];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[7]=formarr[0];

		$.cookie('userinfo',userinfo,{path:cpath});

	window.location.href = baseUrl+"checkout";
	}
}


   $( document ).ready(function() {

  $('body').on('click', '.theme-box'  , function(e) {
  	//e.preventDefault();

     $('.theme-box').removeClass( "active" );
    $(this).addClass( "active" );
    
} );

$('.i_info').click( function() {
      $('.i_info').removeClass( "selected" );
    $(this).addClass( "selected" );

} );









  var stripe = Stripe('pk_test_L59T4T2utlwOMMVqxVGYnsRK');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: "#020202",
   
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

	var owl = $("#owl-demo");
	$(".owl-carousel").owlCarousel({
      nav:true,
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1920,3], //5 items between 1000px and 901px
      itemsTablet: [1200,2], //2 items between 600 and 0
      itemsMobile :[720,1],  // itemsMobile disabled - inherit from itemsTablet option


  });

card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Create a token or display an error when the form is submitted.
var form = document.getElementById('checkoutform');
form.addEventListener('submit', function(event) {
   
  event.preventDefault();
  	var phone=$('#phone').val();
	var email=$('#email').val();
	var radio=$('input:radio[name=optradio]:checked').val();

		if(phone ==""){

	$('#errorphone').html('<small style="color:red;"> Please Enter Phone Number </small>');
	 setTimeout(function(){$('#errorphone').empty();}, delaytime);
	}
	else if(email ==""){
	$('#erroremail').html('<small style="color:red;"> Please Enter Email Address </small>');
 	setTimeout(function(){$('#erroremail').empty();}, delaytime);

	} 
	else if(radio != 1 && radio != 0){


	$('#errorradio').html('<small style="color:red;"> Please select atleast one option</small>');
	 setTimeout(function(){$('#errorradio').empty();}, delaytime);


	}
	else{
		$('#paynow').hide();
		$('#loadergif').show();
		var cook= $.cookie("userinfo");
	var cookie=cook+','+phone+','+email+','+radio;

	var formarr=[phone,email,radio];

		if (typeof $.cookie('userinfo') === 'undefined'){
			var userinfo=[];
		}
		else{
			var userinfo= $.cookie('userinfo').split(",");
		}
		userinfo[8]=formarr[0];
		userinfo[9]=formarr[1];
		userinfo[10]=formarr[2];

		$.cookie('userinfo',userinfo,{path:cpath});

	
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } 
   
   
        else {
        
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
	}
});
function stripeTokenHandler(token) {


  // Insert the token ID into the form so it gets submitted to the server
  if(token){
  var form = document.getElementById('checkoutform');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);

  	
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();

  }
  else {
     $('#card-errors').append('Your card number is invalid.');

  }
}


});


		
