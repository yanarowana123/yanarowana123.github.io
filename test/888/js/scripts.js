$(document).ready(function(){
	$('.popup_link').on('click', function(e){
		$('.popup_wrap').fadeIn(150);
		e.stopPropagation();
	});
	var origValue = [];
	$('form input[type=text], form input[type=password]').each(function(i){
		origValue.push($(this).val());
		$(this).focus(function(){
			var defaultText = $(this).val();
			if ($(this).val() == origValue[i])
				$(this).val('');
			$(this).blur(function(){
				if ($(this).val() == '')
					$(this).val(defaultText);
			});
		});
	});
	$('.plans_slider').cycle({
		fx: 'scrollHorz',
		timeout: 3000,
		next: '.p_next',
		prev: '.p_prev'
	});
	$("a.ancLinks").click(function(e) { 
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html, body').animate({
			scrollTop: destination 
		}, 1000);
		e.preventDefault();
	});
	//Maps
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(51.734962, -1.207157),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);


	$(function(){
	    $("ul#ticker01").liScroll({travelocity: 0.1});
	});
	var allPanels = $('.cont');
		allPanels.hide();
		$('#acc li h3').on('click', function() {
			var _this = $(this),
				cont  = _this.next('.cont'),
				speed = 250;
			_this.parent().siblings().children('h3').removeClass('faq-active');
			_this.parent().siblings().children('.cont').slideUp(speed);
			if (cont.is(':visible')) {
				_this.removeClass('faq-active');
				cont.slideUp(speed);
			} else {
				_this.addClass('faq-active');
				cont.slideDown(speed);
			}
		});
});

$(document)
	.on('click', function(e){
		if (!$(e.target).closest('.login_block').length || $(e.target).closest('.pop_close').length) {
			$('.popup_wrap').fadeOut(100);
		}
})
	.on('keydown', function(e){
		var code = e.keyCode ? e.keyCode : e.which;
		if (code == 27) {
			$('.popup_wrap').fadeOut(100);
		}
});

function checklogin() {
	if (document.loginform.username.value=='' || document.loginform.username.value=='Username') {
		alert("Please enter your username!");
		document.loginform.username.focus();
		return false;
	}
	if (document.loginform.password.value=='' || document.loginform.password.value=='Password') {
		alert("Please enter your password!");
		document.loginform.password.focus();
		return false;
	}
	return true;
}

function showform(form) {
	var form1 = document.getElementById(form);
		if (form!='calculator') document.getElementById('calculator').style.display = 'none';
			form1.style.display = 'block';
	}
function closeform(form) {
	var form = document.getElementById(form);
		form.style.display = 'none';
}