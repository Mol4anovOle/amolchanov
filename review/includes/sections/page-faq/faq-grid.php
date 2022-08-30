<section  class="faq-section">
    <div class="container ">
      
<div class="faq_grid wrap">
<div class="titles flex--column">
    <?php if (have_rows('faq_titles')):
			          while (have_rows('faq_titles')) : the_row(); ?>
    <div class="category_title" data-val="<?php the_sub_field('title_filter')?>"><?php the_sub_field('title_name')?></div>
  <? endwhile; endif;?>
</div>
<div class="faq_items" itemscope itemtype="https://schema.org/FAQPage">
    <?php  if (have_rows('faq_item')):
			          while (have_rows('faq_item')) : the_row(); ?>
			          <div data-filtered="<?php the_sub_field('faq_item_category')?>" class="faq_item" data-accordion="container" >
			              
			              <div class="item_title" data-accordion="header"  itemscope itemprop="mainEntity"   itemtype="https://schema.org/Question" >
			                  <div  itemprop="name"><?php the_sub_field('faq_item_title');?></div>
			              <? if(get_sub_field('faq_item_description')){?>
			              <div class="item_description hidden" data-accordion="body" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer"> 
			              <div itemprop="text"><?php the_sub_field('faq_item_description');?></div>
			                  
			              </div>
			              <? }?>
			              </div>
			          </div>
			            <? endwhile; endif;?>
</div>
      
			         

   
    
      
</div>     
</div>



</section>