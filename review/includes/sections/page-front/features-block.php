<section  class="features-section">
    <div class="container ">
      
            <h2 class="section__title text--capitalize text--center">
                <?php the_field('features_block_title');?>

            </h2>

            <?php if (get_field('features_block_description')) : ?>
                <div class="section__description text--center">
                    <?php the_field('features_block_description')?>
                </div>
            <?php endif; ?>
      
<div class="features_items wrap">
      <?php                 if (have_rows('features_block_item')):
                         while (have_rows('features_block_item')) : the_row();?>
                         <div class="features_item">
                             <div class="feature_item_image">
         <?php $image = get_sub_field('feature_item_image'); ?>
            <img width="auto" height="200" src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('feature_item_title'); ?>">
                                 </div>
                            
                                <div class="feature_item_title ">
                                <?php the_sub_field('feature_item_title');?>
                                
                                  </div>
                                  
            <?php if (get_sub_field('feature_item_description')) : ?>
                <div class="feature_item_description">
                    <?php the_sub_field('feature_item_description')?>
                </div>
            <?php endif; ?>
                             </div>
                         
                         
                                                        <?php endwhile;  endif;                    reset_rows();?>

    
    
</div>       

</div>



</section>