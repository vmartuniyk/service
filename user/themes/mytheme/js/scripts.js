$(document).ready(function() {

	setTimeout(function () {
		$('html').addClass('loaded');

		TweenMax.from(".ict_text", 2, {delay:.7,autoAlpha:0}, 0.17)
		var tl = new TimelineLite()
		.staggerFrom(".letter_svg_go", 1, {x:30,autoAlpha:0}, 0.15)
		.staggerFrom(".text_nr_logo", 1, {x:5,autoAlpha:0}, 0.08)
		.from(".line_title_g", 1, {delay:1.5,y:30,autoAlpha:0}, 0.15)
		.from(".txt_web_dev", 1, {delay:1.5,y:30,autoAlpha:0}, 0.15)
		.from(".header_top", 1, {delay:2,y:30,autoAlpha:0}, 0.15)
		.from(".bottom_socials", 1, {delay:2.2,y:-30,autoAlpha:0}, 0.15)
		.staggerFrom(".pagination_slider_go nav > div", 1, {x:30,autoAlpha:0}, 0.25)
		TweenMax.to(".pagination_slider_go", 0.5, {delay:5,css:{className:'+=transition'}});


		var tl_other_page = new TimelineLite()
		.staggerFrom(".header_other_page,.header_pg_descr > div,.descr_article_go *,.category_design li", 1, {y:30,autoAlpha:0}, 0.15);
	},300);

	new WOW().init();

	$('#work_car_process').owlCarousel({
		margin: 10,
		nav: false,
		items: 1,
		dotsContainer: '#carousel_dots_process',
		// autoplay: true,
		// autoplayTimeout: 5000,
		// smartSpeed: 800,
	});

	$('#carousel_home').owlCarousel({
		margin: 0,
		nav: false,
		dots:false,
		loop: false,
		items: 1,
		// autoplay: true,
		// autoplayTimeout: 5000,
		smartSpeed: 800,
		// animateOut: 'fadeOut',
		// dotsContainer: '#pagination_carousel',
	});

	$('a[href="#"]').on("click", function (even) {
		even.preventDefault();
	});

	if($('.block_grid_portf > .row').hasClass('grid')) {
		var containerEl = document.querySelector('.grid');
		var mixer = mixitup(containerEl);	
	}

     // burger mobile
	$('.menu-icon').on("click", function () {
		$(this).toggleClass( "opened" );
		if ($(this).hasClass('opened')) {
			$('.menu').fadeIn();
			$('.site_menu li').addClass('animate');
			$('html').addClass('hidden_scroll')
			$('.header_other_page').addClass('fixed_menu')
			$('.menu_language_g,.logo_center_hd_g').fadeOut();
		} else {
			$('.menu').fadeOut();
			$('.site_menu li').removeClass('animate');
			$('html').removeClass('hidden_scroll')
			$('.header_other_page').removeClass('fixed_menu')
			$('.menu_language_g,.logo_center_hd_g').fadeIn();
		}
	});
	// Close menu ESC
	$(document).keyup(function(e) {
		if (e.key === "Escape") {
			$('.menu').fadeOut();
			$('.site_menu li').removeClass('animate');
			$('html').removeClass('hidden_scroll')
			$('.menu-icon').removeClass( "opened" );
			$('.header_other_page').removeClass('fixed_menu')
			$('.menu_language_g,.logo_center_hd_g').fadeIn();
		}
	});

	// on scroll header top
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 30) {
			$('.header_other_page').addClass('fixed')
		}else {
			$('.header_other_page').removeClass('fixed')
		}
	});

	$(window).on("load", function () {
		// $('.in_to_work_go > img').matchHeight();
	});
	var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy"
	});

	// Gallery web design
	$('.see_project').on("click", function () {
		show_initial();

		TweenMax.from(".block_gallery_image", .4, {scale:.95,autoAlpha:0}, 0.25)
		// block_gallery_image
	});
	$('.close_gallery_modal,.black_mock').on("click", function () {
		close_modal_gallery();
	});
	$(document).keyup(function(e) {
		if (e.key === "Escape") {
			close_modal_gallery();
		}
	});


});

function show_initial() {
	$('.black_mock,.modal_web_design').fadeIn();
	$('.modal_web_design').scrollTop(0);
	$('html').addClass('hidden_scroll')
}
function close_modal_gallery() {
	$('.black_mock,.modal_web_design').fadeOut()
	$('html').removeClass('hidden_scroll')
}
