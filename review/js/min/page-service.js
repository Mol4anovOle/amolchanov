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
        }),
       
        });
       
   
const time = $('.seconds');
function timerDecrement() {
  setTimeout(function() {
    const newTime = time.text() - 1;
    
    time.text(newTime);
    
    if(newTime > 0) timerDecrement();
  }, 1000);
}

	


  
});
