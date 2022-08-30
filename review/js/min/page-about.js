"use strict";
$(document).ready(function () {

       let $element = $('.item_number_value');
    let counter = 0;
$(window).scroll(function() {
  let scroll = $(window).scrollTop() + $(window).height();
 
  let offset = $element.offset().top
 
  if (scroll > offset && counter == 0) {
  $('.item_number_value').each(function () {
  $(this).prop('Counter',0).animate({
  Counter: $(this).text()
  }, {
  duration: 2000,
  easing: 'swing',
  step: function (now) {
  $(this).text(Math.ceil(now));
  }
  });
});
    counter = 1;
  }
});   
$('.hww_items_carousel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
 nextArrow: '<i class="angle-right" aria-hidden="true"></i>',
        prevArrow: '<i class="angle-left" aria-hidden="true"></i>',
    

});

        
$('.testimonials_items_carousel').slick({
    centerMode: true,
  centerPadding: '80px',
  dots: true,
  infinite: true,
  speed: 300,
//   autoplay:true,
  slidesToShow: 3,
  slidesToScroll: 1,
 nextArrow: '<i class="angle-right" aria-hidden="true"></i>',
        prevArrow: '<i class="angle-left" aria-hidden="true"></i>',
    
 responsive: [
    {
      breakpoint: 767,
      settings: {
            centerMode: false,
  centerPadding: '0',
        slidesToShow: 1,
         centerMode: false,
  centerPadding: '0',
            }
    }
 
  ]
});
   $(".accordion").ready(function () {
        $("[data-accordion=header]").each(function (o) {
            $(this).parent().toggleClass("open"), $(this).toggleClass("open").next("[data-accordion=body]").slideToggle(0);
        });
    });
    var o = function (o) {
        var a = $(o.target).closest("[data-accordion=header]");
        a.length && a.toggleClass("open").next("[data-accordion=body]").not(":animated").slideToggle();
    };
    $("[data-accordion=container]").on("click", o),
        $("[data-accordion=header]").each(function (o) {
            $(this).parent().toggleClass("open"), $(this).toggleClass("open").next("[data-accordion=body]").slideToggle(0);
        });
        
       
       
      if ($(window).width() < 400) {
 
   $('#orderformph-new-2-iframe').on('load',function(){

  $('#orderformph-new-2-iframe').removeAttr( 'style' );
  
  $('#orderformph-new-2-iframe').css({
       height: "645px",
       width: "100%",
       border:"0px",
       padding:"0px",
       overflow:"scroll",

  });

 

});
}

  
});
