/*============================
Table of JS Content Start Here
==============================
	01. Preloader
    02. Header Sticky Menu
	03. Header Memu
    04. Nice Select
    05. Scroll to Top
    06. Live Clock
    07. Swiper
============================
Table of JS Content End Here
==========================*/

(function ($) {
    'use strict';

    /*=========================================
    ===== 01. Preloader jQuery Start Here =====
    =========================================*/
    $(window).on("load", function () {
        $(".folding-cube").delay(700).fadeOut(),
        setTimeout(function () {
            setTimeout(function () {
                $("#preloader").hide()
            }, 1500)
        }, 800)
    });
    /*=======================================
    ===== 01. Preloader jQuery End Here =====
    =======================================*/

    $(document).ready(function () {

        $(window).scroll(function(){
            /*==================================================
            ===== 02. Header Sticky Menu jQuery Start Here =====
            ==================================================*/
            if ($(window).scrollTop() >= 50) {
                $('.header-fixed-area').addClass('header-fixed');
            }
            else {
                $('.header-fixed-area').removeClass('header-fixed');
            }
            /*================================================
            ===== 02. Header Sticky Menu jQuery End Here =====
            ================================================*/
        });

        /*===========================================
        ===== 03. Header Memu jQuery Start Here =====
        ===========================================*/
        $('.header-menu-container').meanmenu({
			meanMenuContainer: '.header-menu-area .container',
			meanScreenWidth: "991",
			meanMenuOpen: '<span></span><span></span><span></span>',
		});
        /*=========================================
        ===== 03. Header Memu jQuery End Here =====
        =========================================*/

        /*===========================================
        ===== 04. Nice Select jQuery Start Here =====
        ===========================================*/
        $('select').niceSelect();
        /*=========================================
        ===== 04. Nice Select jQuery End Here =====
        =========================================*/

        /*=============================================
        ===== 05. Scroll to Top jQuery Start Here =====
        =============================================*/
		/*===== 5.1 Scroll to Top Button Display =====*/
		$(window).scroll(function(){		  
			var scrollTopBtn = $(window).scrollTop();		  
			if( scrollTopBtn > 100 ){
				$(".scroll-to-top").fadeIn();
			}else {
				$(".scroll-to-top").fadeOut();
			}
		});
		  
		/*===== 5.2 Scroll to Top Button Clickable =====*/
		$(".scroll-to-top").on('click', function(){
			$("html, body").animate({'scrollTop' : 0}, 1500);
			return false;
		});	  
		/*===========================================
        ===== 05. Scroll to Top jQuery End Here =====
        ===========================================*/

        /*==========================================
		===== 06. Live Clock jQuery Start Here =====
		==========================================*/
        var myVar = setInterval(function() {
            myTimer();
        }, 100);
        
        function myTimer() {
            var d = new Date();
            document.getElementById("time").innerHTML = d.toLocaleTimeString();
        }
        /*========================================
        ===== 06. Live Clock jQuery End Here =====
        ========================================*/

        /*======================================
        ===== 07. Swiper jQuery Start Here =====
        ======================================*/
        var swiper = new Swiper(".post-img-gallery", {
            autoplay: true,
            loop: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
            },
        });
        /*====================================
        ===== 07. Swiper jQuery End Here =====
        ====================================*/

    });

}(jQuery));