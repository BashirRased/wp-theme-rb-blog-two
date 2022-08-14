(function ($) {
  'use strict';

  $(document).ready(function(){

    /*==========================================
		===== 01. Live Clock jQuery Start Here =====
		==========================================*/
    var myVar = setInterval(function() {
      myTimer();
    }, 100);
  
    function myTimer() {
      var d = new Date();
      document.getElementById("time").innerHTML = d.toLocaleTimeString();
    }
    /*========================================
		===== 01. Live Clock jQuery End Here =====
		========================================*/
    
    /*=================================================
		===== 01. Header Menu Fixed jQuery Start Here =====
		=================================================*/
    $(window).scroll(function(){
			if ($(window).scrollTop() >= 50) {
				$('.header-menu-area').addClass('header-menu-fixed');
			}
			else {
				$('.header-menu-area').removeClass('header-menu-fixed');
			}
		});
    /*===============================================
		===== 01. Header Menu Fixed jQuery End Here =====
		===============================================*/

    /*===================================================
		===== 01. Multi Dropdown Menu jQuery Start Here =====
		===================================================*/
    $(".sub-menu .sub-menu").addClass("header-menu-multi-dropdown");
    $(".header-menu-multi-dropdown").removeClass("sub-menu");
    $(".header-menu-multi-dropdown").siblings("a").append
		('<i class="fa-solid fa-angle-right"></i>');
    /*=================================================
		===== 01. Multi Dropdown Menu jQuery End Here =====
		=================================================*/

    /*=============================================
		===== 01. Dropdown Menu jQuery Start Here =====
		=============================================*/
    $(".sub-menu").addClass("header-menu-dropdown");
    $(".header-menu-dropdown").removeClass("sub-menu");
    $(".header-menu-dropdown").siblings("a").append
		('<i class="fa-solid fa-chevron-down"></i>');
    /*===========================================
		===== 01. Dropdown Menu jQuery End Here =====
		===========================================*/

    /*===========================================================
		===== 01. Dropdown Menu Button for Mobile Device jQuery Start Here =====
		===========================================================*/
    $(".menu-item-has-children").children("a").append('<button class="dropdown-menu-btn"><span class="fa-solid fa-chevron-down"></span></button>');

    $('.dropdown-menu-btn').on("click", function (event) {
      event.preventDefault();
      $(this).parent("a").siblings("ul").toggleClass('dropdown-menu-open');
  });
    /*=========================================================
		===== 01. Dropdown Menu Button for Mobile Device jQuery End Here =====
		=========================================================*/

    /*====================================================
		===== 01. Scroll To Top Button jQuery Start Here =====
		====================================================*/
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
          $('.scroll-to-top').fadeIn();
      } else {
          $('.scroll-to-top').fadeOut();
      }
    });

    $(".scroll-to-top").on('click', function(){
      $("html, body").animate({'scrollTop' : 0}, 700);
      return false;
    });
    /*==================================================
		===== 01. Scroll To Top Button jQuery End Here =====
		==================================================*/

  });

}(jQuery));