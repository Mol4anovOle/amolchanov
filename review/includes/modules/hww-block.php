<?php 
$frontpage_id = get_option( 'page_on_front' );
?>
<section  class="hww-section">
    <div class="container ">
      
            <h2 class="section__title text--capitalize text--underline">
                <?php the_field('hww_block_title',$frontpage_id);?>

            </h2>

            <?php if (get_field('hww_block_description',$frontpage_id)) : ?>
                <div class="section__description">
                    <?php the_field('hww_block_description',$frontpage_id)?>
                </div>
            <?php endif; ?>
      <?php                 if (have_rows('hww_block_item',$frontpage_id)):?>
<div class="hww_items ">
     <?php while (have_rows('hww_block_item',$frontpage_id)) : the_row();?>
    <div class="hww_item wrap">
      
                        
                       
                             <div class="hww_item_text wrap">
                                 <div class="hww_block_item_number text--uppercase">
                                     <?php echo get_row_index(); ?> Step</div>
                                 <div class="hww_item_title ">
                                     
                                <?php the_sub_field('hww_item_title');?>
                                   <?php if (get_sub_field('hww_item_description')) : ?>
                <div class="hww_item_description">
                    <?php the_sub_field('hww_item_description')?>
                </div>
            <?php endif; ?>
                                  </div>
                                  
                                 </div>  
                           <div class="hww_item_image">
                               <?php $image=get_sub_field('hww_item_image');?>
                               <img src="<?php echo $image['url'];?>" alt="hww_step">
                           </div>
                           
                            
                            
                                
         
                             </div>
                                                     
                         
                                                        <?php endwhile;?>
                                                        
                                                      

    </div> 
     <?php  endif;                    reset_rows();?>
      
</div>     




</section>