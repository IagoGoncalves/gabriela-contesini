jQuery(document).ready(function ($) {
	var windowWidth = window.innerWidth;
// Menu
	let url = window.location.pathname;
	let parts = url.split('/');
	let lastPart = parts.pop() || parts.pop();
	if (lastPart == 'gabriela-contesini') {
		$('.li-home').addClass( "active" );
		$('.li-sobre').removeClass( "active" );
		$('.li-cafe').removeClass( "active" );
		$('.li-contato').removeClass( "active" );
	}
	if (lastPart == 'sobre'){
		$('.li-home').removeClass( "active" );
		$('.li-sobre').addClass( "active" );
		$('.li-cafe').removeClass( "active" );
		$('.li-contato').removeClass( "active" );
	}
	if (lastPart == 'cafe'){
		$('.li-home').removeClass( "active" );
		$('.li-sobre').removeClass( "active" );
		$('.li-cafe').addClass( "active" );
		$('.li-contato').removeClass( "active" );
	}
	if (lastPart == 'contato'){
		$('.li-home').removeClass( "active" );
		$('.li-sobre').removeClass( "active" );
		$('.li-cafe').removeClass( "active" );
		$('.li-contato').addClass( "active" );
	}
//Swiper banner
	var swiper = new Swiper('.swiper-banner', {
		speed: 1500,
		parallax: true,
		loop: true,
		spaceBetween: 30,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 3000,
		},    
	});
});
