AOS.init();
objectFitImages('img.ofi');


jQuery(function($) {
  'use strict';
		
	$(document).ready(function(){
		
		nav_child();
		
		// ナビボタン
		$('.navBtn').click(function(){
		console.log('aaa');
			$(this).toggleClass('open');
			if($(this).hasClass('open') !== false) {
				$('.gNav').addClass('open');
			} else {
				$('.gNav').removeClass('open');
			}
		});
		
		// 働く環境 スライダー
		if($('body').hasClass('environment')){

			/* main alider */
			var mainSwiper_tokyo = new Swiper('.tokyo .slider-main', {
				loop: true,
				loopedSlides: 5,
				centeredSlides: true,
				speed: 500,
				spaceBetween: 20,
				navigation: {
					prevEl: '.tokyo .swiper-button-prev',
					nextEl: '.tokyo .swiper-button-next',
				},
				paginationClickable: true,
				pagination: {
					el: '.tokyo .swiper-pagination',
					clickable: true,
				}
			});
			/* thumbnnail slider tokyo*/
			var thumbSwiper_tokyo = new Swiper('.tokyo .slider-thumb', {
				loop: true,
				slidesPerView: 5,
				spaceBetween: 10,
				grabCursor: true,
				slideToClickedSlide: true,
			});
			//4系～ メインとサムネイルを紐づける
			mainSwiper_tokyo.controller.control = thumbSwiper_tokyo;
			thumbSwiper_tokyo.controller.control = mainSwiper_tokyo;

			/* main alider */
			var mainSwiper_nobeoka = new Swiper('.nobeoka .slider-main', {
				loop: true,
				loopedSlides: 5,
				speed: 500,
				spaceBetween: 20,
				navigation: {
					prevEl: '.nobeoka .swiper-button-prev',
					nextEl: '.nobeoka .swiper-button-next',
				},
				paginationClickable: true,
				pagination: {
					el: '.nobeoka .swiper-pagination',
					clickable: true,
				}
			});
			/* thumbnnail slider nobeoka*/
			var thumbSwiper_nobeoka = new Swiper('.nobeoka .slider-thumb', {
				loop: true,
				slidesPerView: 5,
				spaceBetween: 10,
				grabCursor: true,
				slideToClickedSlide: true,
			});
			//4系～ メインとサムネイルを紐づける
			mainSwiper_nobeoka.controller.control = thumbSwiper_nobeoka;
			thumbSwiper_nobeoka.controller.control = mainSwiper_nobeoka;
		}
		
	});
	// end document ready.
	
	
	$(window).on('load resize',function(){
		nav_child();
	});
	// end load resize.
	
	
	/*------------
	 set
	-------------*/
	function nav_child(){
		var point = $(window).width() > 889;
		var parent = $('.gNav_item.has_child');
		
		if(point){
			$('.nav_child').css('display','none');
			$(function(){
				parent.on({
					mouseenter: function() {
						$(this).children('.nav_child').fadeIn('fast');
					},
					mouseleave: function() {
						$(this).children('.nav_child').fadeOut('fast');
					}
				})
			})
			
		}
		else {
			parent.off();
			$('.nav_child').css('display','block');
//			parent.css('pointerEvents','none');
//			$('.gNav_item.has_child').on('click', function() {
//				alert('aaa');
//				$(this).children('.nav_child').slideToggle();
//			})
//			
		}
	}
  
});