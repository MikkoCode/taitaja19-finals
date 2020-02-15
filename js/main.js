jQuery(function($) {'use strict';

	//Responsive Nav
	$('li.dropdown').find('.fa-angle-down').each(function(){
		$(this).on('click', function(){
			if( $(window).width() < 768 ) {
				$(this).parent().next().slideToggle();
			}
			return false;
		});
	});

	//Fit Vids
	if( $('#video-container').length ) {
		$("#video-container").fitVids();
	}

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $portfolio_selectors = $('.portfolio-filter >li>a');
		
		if($portfolio_selectors.length) {
			
			var $portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.portfolio-item',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}

	});


	$('.timer').each(count);
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
		
	// Search
	$('.fa-search').on('click', function() {
		$('.field-toggle').fadeToggle(200);
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
		});
	});

	// Progress Bar
	$.each($('div.progress-bar'),function(){
		$(this).css('width', $(this).attr('data-transition')+'%');
	});

	if( $('#gmap').length ) {
		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 43.04446,
			lng: -76.130791,
			scrollwheel:false,
			zoom: 16,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		map.addMarker({
			lat: 43.04446,
			lng: -76.130791,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#3e8bff',
		});
	}





});

$(document).ready(function () {
    $("ul.elements li").hover(
		function() {
			$("#pepper").attr("src", "../images/pepper-robot-esittelykuva.png");
            $(this).css("color","black");
		});
    $("#kamera").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_24.jpg").fadeIn("fast");
			});
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			});
            $(this).css("color","black");
		});
    $("#kaynnistys").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_12.png").fadeIn("fast");
			 });
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			});
            $(this).css("color","black");
		});
    $("#mikki").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_5.png").fadeIn("fast");
			 });
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			 });
            $(this).css("color","black");
		});
    $("#kaiutin").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_23.jpg").fadeIn("fast");
			 });
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			});
            $(this).css("color","black");
		});
    $("#lataus").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_11.png").fadeIn("fast");
			 });
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			});
            $(this).css("color","black");
		});
    $("#naytto").hover(
		function() {
			$("#pepper").fadeOut(function() {
			 $(this).attr("src", "../images/robo_pepper_9.jpg").fadeIn("fast");
			 });
             $(this).css("color","#42c0f0");
		},
		function() {
			$("#pepper").fadeOut(function() {
			$(this).attr("src", "../images/pepper-robot-esittelykuva.png").fadeIn("fast");
			});
            $(this).css("color","black");
		});
    $("#siirra").addClass('disabled');
});

example2Left = document.getElementById('example2-left');
example2Right = document.getElementById('example2-right');

var left = new Sortable(example2Left, {
     group: {
        name: 'shared',
        pull: 'clone', // To clone: set pull to 'clone'
        put: false
    },
    animation: 150,
    sort: false
});

var itemsToSend = [];
var indexi = 0;

var right = new Sortable(example2Right, {
    group: 'shared',
    animation: 150,
    onAdd: function (/**Event*/evt) {
		$("#siirra").removeClass('disabled');
		var item = evt.item.innerText;
		itemsToSend.push(item);
		$('<input>').attr({
	    type: 'hidden',
	    name: item,
	    value: item
		}).appendTo('#siirraform');
	},
	sort: false
});

$( "#tyhjenna" ).click(function() {
  location.reload();
});
