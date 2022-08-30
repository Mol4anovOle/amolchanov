<?php 
$frontpage_id = get_option( 'page_on_front' );
?>
<section  class="stat-section">
    <div class="container ">
      
            <h2 class="section__title text--capitalize text--center">
                <?php the_field('stat_block_title',$frontpage_id);?>

            </h2>

            <?php if (get_field('stat_block_description',$frontpage_id)) : ?>
                <div class="section__description text--center">
                    <?php the_field('stat_block_description',$frontpage_id)?>
                </div>
            <?php endif; ?>
      
<div class="stat_items wrap">

      <?php                 if (have_rows('stat_block_item',$frontpage_id)):
                         while (have_rows('stat_block_item',$frontpage_id)) : the_row();?>
                        
                         <div class="stat_item ">
                             <div class="item_number wrap">
                                  <div class="item_number_value"> <?php the_sub_field('stat_item_number');?></div> 
                                  <div class="item_number_fraction"> <?php the_sub_field('stat_item_number_fraction');?></div>
                             </div>
                             
                                  <div class="item_title"> <?php the_sub_field('stat_item_title');?></div>
                             <div class="item_description"> <?php the_sub_field('stat_item_description');?></div>
                                
         
                                        </div>
                         
                                                        <?php endwhile;  endif;                    reset_rows();?>

   
    
      
</div>     
</div>



</section>