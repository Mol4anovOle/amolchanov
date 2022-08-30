"use strict";
$(document).ready(function () {
    
    $('.category_title:first-of-type').addClass('choosen'); 
          $('.faq_item').each(function(index,elem) {
                let filter=$('.category_title:first-of-type').attr('data-val');
	if ($(elem).attr('data-filtered')==filter) {
	$(elem).addClass('filtered');}
});
     $('.category_title').on('click', function(){
         $('.faq_item').removeClass('filtered')
        $(this).addClass('choosen'); 
        $('.category_title').not(this).removeClass('choosen');

         let filter=$(this).attr('data-val');
       $('.faq_item').each(function(index,elem) {
	if ($(elem).attr('data-filtered')==filter) {
	$(elem).addClass('filtered');

}
});
        
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
        


  
});
