/*global $ */
$=jQuery
$(document).ready(function() {

  "use strict";

  $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
  //Checks if li has sub (ul) and adds class for toggle icon - just an UI

  $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
  //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

  //$(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");
  
  $(".menu > ul").before('<span class=\"menu-mobile\"></span>');

  // append mobile toggle button
  $( '.sub-menu' ).after( '<span class="menu-toggle"><i class="icon-menu-plus"></i></span>' );

  //Adds menu-mobile class (for mobile toggle menu) before the normal menu
  //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
  //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
  //Done this way so it can be used with wordpress without any trouble

  $(".menu > ul > li").hover(function(e) {
    if ($(window).width() > 768) {
      $(this).children("ul").stop(true, false).fadeToggle(150);
      e.preventDefault();
    }
  });
  //If width is more than 943px dropdowns are displayed on hover


  $("li > .menu-toggle").click(function() {
    if ($(window).width() <= 768) {
      $(this).prev("ul").fadeToggle(150);
      $(this).find('i').toggleClass('icon-menu-plus icon-menu-minus');
    }
  });
  //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

  $(".menu-mobile").click(function(e) {
    $(".menu > ul").toggleClass('show-on-mobile');
    e.preventDefault();
  });
  //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});

  (function($) {
    "use strict";

    var $navbar = $("#menu-container"),
        y_pos = $navbar.offset().top,
        height = $navbar.height();

    $(document).scroll(function() {
        var scrollTop = $(this).scrollTop();

        if ($(window).width() > 768) {
          if (scrollTop > y_pos + height) {
            $navbar.addClass("navbar-fixed").animate({
                top: 0
            });
          } else if (scrollTop <= y_pos) {
              $navbar.removeClass("navbar-fixed").clearQueue().animate({
                  top: "-48px"
              }, 0);
          }
        } 
    });

})(jQuery, undefined);
