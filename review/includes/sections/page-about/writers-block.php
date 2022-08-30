<section  class="writers-section">
    <div class="container ">
      
            <h2 class="section__title text--capitalize text--underline">
                <?php the_field('writers_block_title');?>

            </h2>

            <?php if (get_field('writers_block_description')) : ?>
                <div class="section__description">
                    <?php the_field('writers_block_description')?>
                </div>
            <?php endif; ?>
      
<div class="writers-grid wrap">
      <?php                 if (have_rows('writer_person')):
                         while (have_rows('writer_person')) : the_row();?>
                         <div class="writer_item">
                             <div class="writer_item_image">
         <?php $image = get_sub_field('writer_item_image'); ?>
            <img  src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('writer_item_name'); ?>">
                                 </div>
                            
                                <div class="writer_item_name ">
                                <?php the_sub_field('writer_item_name');?>
                                
                                  </div>
                                  
            <?php if (get_sub_field('writer_item_description')) : ?>
                <div class="writer_item_description">
                    <?php the_sub_field('writer_item_description')?>
                </div>
            <?php endif; ?>
            <div class="writer_body">
                <?php the_sub_field('writer_item_body')?>
            </div>
                             </div>
                         
                         
                                                        <?php endwhile;  endif;                    reset_rows();?>

    
    
</div>       

</div>



</section>