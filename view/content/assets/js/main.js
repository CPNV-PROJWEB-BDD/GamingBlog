/*
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$header = $('#header'),
		$footer = $('#footer'),
		$main = $('#main'),
		$main_articles = $main.children('article');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ '361px',   '480px'  ],
			xxsmall:  [ null,      '360px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Fix: Flexbox min-height bug on IE.
		if (browser.name == 'ie') {

			var flexboxFixTimeoutId;

			$window.on('resize.flexbox-fix', function() {

				clearTimeout(flexboxFixTimeoutId);

				flexboxFixTimeoutId = setTimeout(function() {

					if ($wrapper.prop('scrollHeight') > $window.height())
						$wrapper.css('height', 'auto');
					else
						$wrapper.css('height', '100vh');

				}, 250);

			}).triggerHandler('resize.flexbox-fix');

		}

	// Nav.
		var $nav = $header.children('nav'),
			$nav_li = $nav.find('li');

		// Add "middle" alignment classes if we're dealing with an even number of items.
			if ($nav_li.length % 2 == 0) {

				$nav.addClass('use-middle');
				$nav_li.eq( ($nav_li.length / 2) ).addClass('is-middle');

			}

	// Main.
		var	delay = 325,
			locked = false;

		// Methods.
			$main._show = function(id, initial) {

				var $article = $main_articles.filter('#' + id);

				// No such article? Bail.
					if ($article.length == 0)
						return;

				// Handle lock.

					// Already locked? Speed through "show" steps w/o delays.
						if (locked || (typeof initial != 'undefined' && initial === true)) {

							// Mark as switching.
								$body.addClass('is-switching');

							// Mark as visible.
								$body.addClass('is-article-visible');

							// Deactivate all articles (just in case one's already active).
								$main_articles.removeClass('active');

							// Hide header, footer.
								$header.hide();
								$footer.hide();

							// Show main, article.
								$main.show();
								$article.show();

							// Activate article.
								$article.addClass('active');

							// Unlock.
								locked = false;

							// Unmark as switching.
								setTimeout(function() {
									$body.removeClass('is-switching');
								}, (initial ? 1000 : 0));

							return;

						}

					// Lock.
						locked = true;

				// Article already visible? Just swap articles.
					if ($body.hasClass('is-article-visible')) {

						// Deactivate current article.
							var $currentArticle = $main_articles.filter('.active');

							$currentArticle.removeClass('active');

						// Show article.
							setTimeout(function() {

								// Hide current article.
									$currentArticle.hide();

								// Show article.
									$article.show();

								// Activate article.
									setTimeout(function() {

										$article.addClass('active');

										// Window stuff.
											$window
												.scrollTop(0)
												.triggerHandler('resize.flexbox-fix');

										// Unlock.
											setTimeout(function() {
												locked = false;
											}, delay);

									}, 25);

							}, delay);

					}

				// Otherwise, handle as normal.
					else {

						// Mark as visible.
							$body
								.addClass('is-article-visible');

						// Show article.
							setTimeout(function() {

								// Hide header, footer.
									$header.hide();
									$footer.hide();

								// Show main, article.
									$main.show();
									$article.show();

								// Activate article.
									setTimeout(function() {

										$article.addClass('active');

										// Window stuff.
											$window
												.scrollTop(0)
												.triggerHandler('resize.flexbox-fix');

										// Unlock.
											setTimeout(function() {
												locked = false;
											}, delay);

									}, 25);

							}, delay);

					}

			};

			$main._hide = function(addState) {

				var $article = $main_articles.filter('.active');

				// Article not visible? Bail.
					if (!$body.hasClass('is-article-visible'))
						return;

				// Add state?
					if (typeof addState != 'undefined'
					&&	addState === true)
						history.pushState(null, null, '#');

				// Handle lock.

					// Already locked? Speed through "hide" steps w/o delays.
						if (locked) {

							// Mark as switching.
								$body.addClass('is-switching');

							// Deactivate article.
								$article.removeClass('active');

							// Hide article, main.
								$article.hide();
								$main.hide();

							// Show footer, header.
								$footer.show();
								$header.show();

							// Unmark as visible.
								$body.removeClass('is-article-visible');

							// Unlock.
								locked = false;

							// Unmark as switching.
								$body.removeClass('is-switching');

							// Window stuff.
								$window
									.scrollTop(0)
									.triggerHandler('resize.flexbox-fix');

							return;

						}

					// Lock.
						locked = true;

				// Deactivate article.
					$article.removeClass('active');

				// Hide article.
					setTimeout(function() {

						// Hide article, main.
							$article.hide();
							$main.hide();

						// Show footer, header.
							$footer.show();
							$header.show();

						// Unmark as visible.
							setTimeout(function() {

								$body.removeClass('is-article-visible');

								// Window stuff.
									$window
										.scrollTop(0)
										.triggerHandler('resize.flexbox-fix');

								// Unlock.
									setTimeout(function() {
										locked = false;
									}, delay);

							}, 25);

					}, delay);


			};

		// Articles.
			$main_articles.each(function() {

				var $this = $(this);

				// Close.
					$('<div class="close">Close</div>')
						.appendTo($this)
						.on('click', function() {
							location.hash = '';
						});

				// Prevent clicks from inside article from bubbling.
					$this.on('click', function(event) {
						event.stopPropagation();
					});

			});

		// Events.
			$body.on('click', function(event) {

				// Article visible? Hide.
					if ($body.hasClass('is-article-visible'))
						$main._hide(true);

			});

			$window.on('keyup', function(event) {

				switch (event.keyCode) {

					case 27:

						// Article visible? Hide.
							if ($body.hasClass('is-article-visible'))
								$main._hide(true);

						break;

					default:
						break;

				}

			});

			$window.on('hashchange', function(event) {

				// Empty hash?
					if (location.hash == ''
					||	location.hash == '#') {

						// Prevent default.
							event.preventDefault();
							event.stopPropagation();

						// Hide.
							$main._hide();

					}

				// Otherwise, check for a matching article.
					else if ($main_articles.filter(location.hash).length > 0) {

						// Prevent default.
							event.preventDefault();
							event.stopPropagation();

						// Show article.
							$main._show(location.hash.substr(1));

					}

			});

		// Scroll restoration.
		// This prevents the page from scrolling back to the top on a hashchange.
			if ('scrollRestoration' in history)
				history.scrollRestoration = 'manual';
			else {

				var	oldScrollPos = 0,
					scrollPos = 0,
					$htmlbody = $('html,body');

				$window
					.on('scroll', function() {

						oldScrollPos = scrollPos;
						scrollPos = $htmlbody.scrollTop();

					})
					.on('hashchange', function() {
						$window.scrollTop(oldScrollPos);
					});

			}

		// Initialize.

			// Hide main, articles.
				$main.hide();
				$main_articles.hide();

			// Initial article.
				if (location.hash != ''
				&&	location.hash != '#')
					$window.on('load', function() {
						$main._show(location.hash.substr(1), true);
					});

})(jQuery);


(function ($) {
	"use strict";

	/*[ Load page ]
    ===========================================================*/
	$(".animsition").animsition({
		inClass: 'fade-in',
		outClass: 'fade-out',
		inDuration: 1500,
		outDuration: 800,
		linkElement: '.animsition-link',
		loading: true,
		loadingParentElement: 'html',
		loadingClass: 'animsition-loading-1',
		loadingInner: '<div data-loader="ball-scale"></div>',
		timeout: false,
		timeoutCountdown: 5000,
		onLoadEvent: true,
		browser: [ 'animation-duration', '-webkit-animation-duration'],
		overlay : false,
		overlayClass : 'animsition-overlay-slide',
		overlayParentElement : 'html',
		transition: function(url){ window.location.href = url; }
	});

	/*[ Back to top ]
    ===========================================================*/
	var windowH = $(window).height()/2;

	$(window).on('scroll',function(){
		if ($(this).scrollTop() > windowH) {
			$("#myBtn").css('display','flex');
		} else {
			$("#myBtn").css('display','none');
		}
	});

	$('#myBtn').on("click", function(){
		$('html, body').animate({scrollTop: 0}, 300);
	});


	/*[ Show header dropdown ]
    ===========================================================*/
	$('.js-show-header-dropdown').on('click', function(){
		$(this).parent().find('.header-dropdown')
	});

	var menu = $('.js-show-header-dropdown');
	var sub_menu_is_showed = -1;

	for(var i=0; i<menu.length; i++){
		$(menu[i]).on('click', function(){

			if(jQuery.inArray( this, menu ) == sub_menu_is_showed){
				$(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
				sub_menu_is_showed = -1;
			}
			else {
				for (var i = 0; i < menu.length; i++) {
					$(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
				}

				$(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
				sub_menu_is_showed = jQuery.inArray( this, menu );
			}
		});
	}

	$(".js-show-header-dropdown, .header-dropdown").click(function(event){
		event.stopPropagation();
	});

	$(window).on("click", function(){
		for (var i = 0; i < menu.length; i++) {
			$(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
		}
		sub_menu_is_showed = -1;
	});


	/*[ Fixed Header ]
   ===========================================================*/
	var posWrapHeader = $('.topbar').height();
	var header = $('.container-menu-header');

	$(window).on('scroll',function(){

		if($(this).scrollTop() >= posWrapHeader) {
			$('.header1').addClass('fixed-header');
			$(header).css('top',-posWrapHeader);

		}
		else {
			var x = - $(this).scrollTop();
			$(header).css('top',x);
			$('.header1').removeClass('fixed-header');
		}

		if($(this).scrollTop() >= 200 && $(window).width() > 992) {
			$('.fixed-header2').addClass('show-fixed-header2');
			$('.header2').css('visibility','hidden');
			$('.header2').find('.header-dropdown').removeClass("show-header-dropdown");

		}
		else {
			$('.fixed-header2').removeClass('show-fixed-header2');
			$('.header2').css('visibility','visible');
			$('.fixed-header2').find('.header-dropdown').removeClass("show-header-dropdown");
		}

	});

	/*[ Show menu mobile ]
    ===========================================================*/
	$('.btn-show-menu-mobile').on('click', function(){
		$(this).toggleClass('is-active');
		$('.wrap-side-menu').slideToggle();
	});

	var arrowMainMenu = $('.arrow-main-menu');

	for(var i=0; i<arrowMainMenu.length; i++){
		$(arrowMainMenu[i]).on('click', function(){
			$(this).parent().find('.sub-menu').slideToggle();
			$(this).toggleClass('turn-arrow');
		})
	}

	$(window).resize(function(){
		if($(window).width() >= 992){
			if($('.wrap-side-menu').css('display') == 'block'){
				$('.wrap-side-menu').css('display','none');
				$('.btn-show-menu-mobile').toggleClass('is-active');
			}
			if($('.sub-menu').css('display') == 'block'){
				$('.sub-menu').css('display','none');
				$('.arrow-main-menu').removeClass('turn-arrow');
			}
		}
	});


	/*[ remove top noti ]
    ===========================================================*/
	$('.btn-romove-top-noti').on('click', function(){
		$(this).parent().remove();
	})


	/*[ Block2 button wishlist ]
    ===========================================================*/
	$('.block2-btn-addwishlist').on('click', function(e){
		e.preventDefault();
		$(this).addClass('block2-btn-towishlist');
		$(this).removeClass('block2-btn-addwishlist');
		$(this).off('click');
	});

	/*[ +/- num product ]
    ===========================================================*/
	$('.btn-num-product-down').on('click', function(e){
		e.preventDefault();
		var numProduct = Number($(this).next().val());
		if(numProduct > 1) $(this).next().val(numProduct - 1);
	});

	$('.btn-num-product-up').on('click', function(e){
		e.preventDefault();
		var numProduct = Number($(this).prev().val());
		$(this).prev().val(numProduct + 1);
	});


	/*[ Show content Product detail ]
    ===========================================================*/
	$('.active-dropdown-content .js-toggle-dropdown-content').toggleClass('show-dropdown-content');
	$('.active-dropdown-content .dropdown-content').slideToggle('fast');

	$('.js-toggle-dropdown-content').on('click', function(){
		$(this).toggleClass('show-dropdown-content');
		$(this).parent().find('.dropdown-content').slideToggle('fast');
	});


	/*[ Play video 01]
    ===========================================================*/
	var srcOld = $('.video-mo-01').children('iframe').attr('src');

	$('[data-target="#modal-video-01"]').on('click',function(){
		$('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

		setTimeout(function(){
			$('.video-mo-01').css('opacity','1');
		},300);
	});

	$('[data-dismiss="modal"]').on('click',function(){
		$('.video-mo-01').children('iframe')[0].src = srcOld;
		$('.video-mo-01').css('opacity','0');
	});

})(jQuery);