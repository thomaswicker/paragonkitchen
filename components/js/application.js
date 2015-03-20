/*
     _    ____  ____  _     ___ ____    _  _____ ___ ___  _   _       _ ____  
    / \  |  _ \|  _ \| |   |_ _/ ___|  / \|_   _|_ _/ _ \| \ | |     | / ___| 
   / _ \ | |_) | |_) | |    | | |     / _ \ | |  | | | | |  \| |  _  | \___ \ 
  / ___ \|  __/|  __/| |___ | | |___ / ___ \| |  | | |_| | |\  | | |_| |___) |
 /_/   \_\_|   |_|   |_____|___\____/_/   \_\_| |___\___/|_| \_|  \___/|____/ 
                                                                                                                                                                                                                                                                                                                 
*/

$(document).ready(function() {

  $('#about').on('scrollSpy:enter', function() {
    $('#nav_about a').addClass('activeNav');
  });

  $('#about').on('scrollSpy:exit', function() {
    $('#nav_about a').removeClass('activeNav');
  });

  $('#classes').on('scrollSpy:enter', function() {
    $('#nav_classes a').addClass('activeNav');
  });

  $('#classes').on('scrollSpy:exit', function() {
    $('#nav_classes a').removeClass('activeNav');
  });

  $('#calendar').on('scrollSpy:enter', function() {
    $('#nav_calendar a').addClass('activeNav');
  });

  $('#calendar').on('scrollSpy:exit', function() {
    $('#nav_calendar a').removeClass('activeNav');
  });

  $('#services').on('scrollSpy:enter', function() {
    $('#nav_services a').addClass('activeNav');
  });

  $('#services').on('scrollSpy:exit', function() {
    $('#nav_services a').removeClass('activeNav');
  });

  $('#contact').on('scrollSpy:enter', function() {
    $('#nav_contact a').addClass('activeNav');
  });
  
  $('#contact').on('scrollSpy:exit', function() {
    $('#nav_contact a').removeClass('activeNav');
  });

  $('.scrollspy').scrollSpy(); 

  // Code for handling the FAQs hide/show
  var faqContainer = $('.faqs-block');
  var faqHeader = $('.faqs-header');
  var faqBody = $('.faqs-block p');

  faqHeader.on('click', function () {
    $(this).toggleClass('activeFAQHeader');
    $(this).next().toggleClass('hiddenFAQ');
  });

});


$(document).foundation({
    accordion: {
    // specify the class used for accordion panels
    content_class: 'content',
    // specify the class used for active (or open) accordion panels
    active_class: 'active',
    // allow multiple accordion panels to be active at the same time
    multi_expand: false,
    // allow accordion panels to be closed by clicking on their headers
    // setting to false only closes accordion panels when another is opened
    toggleable: true
  }
});


var t = $("#backtotop").offset().top;

$(window).scroll(function(){
  if($(this).scrollTop() > t) {
    $('.nav_elements a').attr('style', 'color: white');
    $('.top-bar').css({"background-image":"none"});
    $('.top-bar').css({"background-color":"#00616D", "min-height":"60px"});
    $('.name a img').prop('src', 'http://www.paragonkitchen.com/wp-content/themes/paragonkitchen/img/logo_white.png').attr('style', 'max-width: 140px', 'top: 0px', 'left: 30px');;
    $('.top-bar-section ul li').css('margin-top', '7px');
  } else {
    $('.name a img').attr('style', 'max-width: 200px', 'top: 5px', 'left: 30px');
    $('.top-bar').css({"background-image":"url('http://www.paragonkitchen.com/wp-content/themes/paragonkitchen/img/superhero_stripe.jpg')"});
    $('.name a img').prop('src', 'http://www.paragonkitchen.com/wp-content/themes/paragonkitchen/img/logo.png');
    $('.top-bar-section ul li').css('margin-top', '18px');
  }
});

$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('.scrolltotop-button:hidden').stop(true, true).fadeIn();
  } else {
      $('.scrolltotop-button').stop(true, true).fadeOut();
  }
});


//JS FOR ACCORDION

(function($) {

  $('.accordion-content-1').show();

  var allPanels = $('.accordion-content')
  var heads = $('.accordion-header');
    $('.accordion-header').on('click', function() {
      $this = $(this);
      $target =  $this.parent().find('div.accordion-content');

      $this.addClass('accordion-active');

      if(!$target.hasClass('accordion-active')){
      heads.removeClass('accordion-selected');
      $(this).addClass('accordion-selected');
      allPanels.removeClass('accordion-active').slideUp();
      $target.addClass('accordion-selected').slideDown();
    }
  });

})(jQuery);


