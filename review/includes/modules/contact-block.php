<?php 
$faq_page='773';
?>
<section  class="contact-section">
    <div class="container ">
     
              <h2 class="section__title text--capitalize text--underline">
                <?php the_field('contacts_title',$faq_page)?>

            </h2>
            <?php if(get_field('contacts_description',$faq_page)){?>
            <div class="contacts_description">
                <?php the_field('contacts_description',$faq_page)?>
            </div>
            <?php }?>
<div class="contacts wrap">
     <?php  if (have_rows('contact_item',$faq_page)):
			          while (have_rows('contact_item',$faq_page)) : the_row(); ?>
<div class="contacts_item">
    <div class="item_icon">
         <?php $image = get_sub_field('contact_item_icon'); ?>
            <img  src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('contact_item_title'); ?>">
    </div>
     <div class="item_title"><?php the_sub_field('contact_item_title'); ?></div>
      <div class="item_description"><?php the_sub_field('contact_item_description'); ?></div>
       <div class="item_body"><?php the_sub_field('contact_item_body'); ?></div>
</div>
  <? endwhile; endif;?>
    
      
</div>     
</div>



</section>