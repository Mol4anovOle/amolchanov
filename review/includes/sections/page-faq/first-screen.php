<section class="first-section">

    <div class="container">
<div class="wrap">
        <div class="first-section__left">
            <h1 class="first-section__title text--capitalize">
                <?php get_field('head_title') ? the_field('head_title') : get_the_title() ?>

            </h1>

            <?php if (get_field('head_description')) : ?>
                <div class="first-section__description">
                    <?php the_field('head_description') ?>
                </div>
            <?php endif; ?>
          <!--  <a href="/" class="button--main">Order now</a>-->
        </div>

   

   <div class="first-section__right">
       <? if(get_field('head_image')){
          $image= get_field('head_image');?>
           <img  src="<?php echo $image['url'];?>"  alt="<?php the_field('head_title');?>">
       <?php }?>
    

        </div>

  
</div>
</div>
</section>
