/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

jQuery(function ($) {
	
	// Fake Loader
	$('.fakeloader').fakeLoader({
		timeToHide: 1200,
		bgColor: '#ffb300',
		spinner: 'spinner4',
	});
	
    /* Header Style 1 Sticky Header */
    if($('.header-style-1.sticky-header').length){
        
        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();
              
            if (scrollPos > 300) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }

    /* Header Style 2 Sticky Header */
    if($('.header-style-2.sticky-header').length){
        var headerOffset = $('.header-style-2').offset().top;

        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();

            if (scrollPos > headerOffset + 500) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }

    /* Header Style 2 Padding */
    if($('.header-style-2.header-transparent').length){
        if($('.header-style-2 .header-top-area').length){
            var headerTopHeight = $('.header-style-2 .header-top-area').height();
            
            $('.header-style-2 .header-bottom-area').css('top', headerTopHeight);

            $(window).on('scroll', function () {
                if($(this).scrollTop() > 300){
                    $('.header-style-2.is-sticky .header-bottom-area').css('top', 0);
                } else{
                    $('.header-style-2 .header-bottom-area').css('top', headerTopHeight);
                }
            });

        }
    }

    /* Breadcrumb Padding */
    if( $('.cr-breadcrumb-area').length && $('.header-transparent').length ){
        var transparentHeaderHeight = $('.header-transparent').innerHeight();
        $('.cr-breadcrumb-area').css('padding-top', transparentHeaderHeight + 'px');
    }
	
	// Popular Post SLider Active
	$('.polular-post-slider-active').slick({
		slidesToShow: 3,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});
	
	// Projects Filtering
	$('.sa-projects').imagesLoaded( function() {

		var $grid = $('.sa-projects').isotope({
			itemSelector: '.sa-project-single',
			layoutMode: 'fitRows'
		});
 

		var $buttonGroup = $('.projects-filters').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
		}); 
 
	});
	
	// Projects Slider Active
	$('.sa-projects-slider-active').slick({
		slidesToShow: 4,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: true,
		slidesToScroll: 4,
		responsive: [{
			breakpoint: 1501,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});
	
	// Projects Popup Gallery
	$('.sa-projects-popup-active').lightGallery({
		selector: '.single-project-thumb'
	});

});
