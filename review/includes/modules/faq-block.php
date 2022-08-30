 <?php  if (have_rows('faq_block_item')):?>
<section  class="faq-section">
    <div class="container ">
      
            <h2 class="section__title text--capitalize text--center">
                <?php the_field('faq_block_title');?>

            </h2>

            <?php if (get_field('faq_block_description')) : ?>
                <div class="section__description">
                    <?php the_field('faq_block_description')?>
                </div>
            <?php endif; ?>
      

<div class="faq_items wrap "itemscope itemtype="https://schema.org/FAQPage" >

      
			         <? while (have_rows('faq_block_item')) : the_row(); ?>
			     <div class="faq_item" data-accordion="container">
			              
			              <div class="item_title" data-accordion="header"  itemscope itemprop="mainEntity"   itemtype="https://schema.org/Question" ><div itemprop="name"><?php the_sub_field('faq_item_title');?></div>
			              <? if(get_sub_field('faq_item_description')){?>
			              <div class="item_description hidden" data-accordion="body" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer"> <div itemprop="text"><?php the_sub_field('faq_item_description');?></div>
			                  
			              </div>
			              <? }?>
			              </div>
			          </div>
			            <? endwhile;?>
			         

   
    
      
</div>   
    
</div>



</section>
<?  endif;?> 