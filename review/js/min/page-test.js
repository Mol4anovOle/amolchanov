"use strict";

$(document).ready(function () {

const time = $('.seconds');
function timerDecrement() {
  setTimeout(function() {
    const newTime = time.text() - 1;
    
    time.text(newTime);
    
    if(newTime > 0) timerDecrement();
  }, 1000);
}

// 	$("select[name='length'] option[value='very_short']").text('50 words');
// 	$("select[name='length'] option[value='short']").text('250 words');
// 	$("select[name='length'] option[value='medium']").text('500 words');
// 	$("select[name='length'] option[value='long']").text('750 words');
       $( '.show_article' ).click(function(){
          $('.show_article').prop('disabled', true);
        let articleBody='';
	    console.log($('.article_id').val());
	    $.ajax({
			url: myajax['url'],
			type: 'POST',
		
			data: {
			    action:'show_essay',
			  			param4:$('.article_id').val(),
		
			    
			},
			
			success: function( result ) {
			    
		
			    let	someStuff =result;	
			    alert (someStuff);
			  articleBody=$.parseJSON(someStuff).data;
		

			alert (articleBody);
					
				$('.preview_essay').html(articleBody);
			$('.output').show();
				
			
		
			},
 


		});
	});
 let generatedArticleId=0;
  
      checkFunction();
      
           $( '.generator_button' ).click(function(){
   $('.generator_button').prop('disabled', true);
   let generatedArticle=0;

$.ajax({
			url: myajax['url'],
			type: 'POST',
		
			data: {
			    action:'generate',
			  		param1:$('#essayTitle').val(),
			param2:$('#essayKeywords').val(),
			param3:$('select option:selected').val()
			    
			},
			
			success: function( data ) {
		
			let	generatedArticle =data;
			$('#loading_wrap').show()
		timerDecrement();
		alert(generatedArticle);
				generatedArticleId=$.parseJSON(generatedArticle).ref_key;
				 	alert(generatedArticleId);	
				 	 $(".show_article").removeAttr("disabled");  
            $('.generator_instruction').hide();
				 	 setTimeout(function() {
			     $('#loading_wrap').remove();
			      $(".show_button_block").removeAttr("disabled").show();  
          console.log (generatedArticleId);
				 	$('.article_id').val(generatedArticleId);
        }, 150000);
				//  $('.article_id').val(generatedArticleId);
// 			$('.show_button_block').show();
// 			$('.generator_instruction').hide();
		
	
		
			},
    


		});

	});
	
	


function checkFunction(anyData){
     if (($('#essayTitle').val()!=='')&&( $('#essayKeywords').val()!=='')){
        
    $('.generator_button').prop('disabled', false);
     } else{
        //  console.log('pusto');
     }
   
 };   
$('.generator_button').prop('disabled', true);
$('.show_button').prop('disabled', true);
$('.show_article').prop('disabled', true);
$('#essayTitle').keyup(function(){

    checkFunction();
    
})
$('#essayKeywords').keyup(function(){
    let keywordsCheck=$('#essayKeywords').val();
    
    let keywordsChecked=keywordsCheck.replace(/\s/g, ',');
      let keywordsChecked1=keywordsChecked.replace('  ', ' ');
       let keywordsChecked2=keywordsChecked1.replace(',,', ', ');
       const arrWords=keywordsChecked2.split(',');
       const arrWordsFirst=arrWords.slice(0,5);
       let resultString=arrWordsFirst.toString();
        
   console.log(keywordsChecked);
   console.log(arrWords);
      console.log(arrWordsFirst);
       console.log(resultString);
       $('#essayKeywords').val(resultString);
       checkFunction();
})




  
});
