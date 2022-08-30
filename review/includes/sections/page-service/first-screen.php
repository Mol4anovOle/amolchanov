<section class="first-section">

    <div class="container">
<div class="wrap">
        <div class="first-section__left flex--column">
            <h1 class="first-section__title text--capitalize">
                <?php get_field('head_title') ? the_field('head_title') : get_the_title() ?>

            </h1>

            <?php if (get_field('head_description')) : ?>
                <div class="first-section__description">
                    <?php the_field('head_description') ?>
                </div>
            <?php endif; ?>
            
            <div class="first-section__image">
                 <img width="100%" height="auto" src="/wp-content/themes/review/images/first-screen.png"  alt="<?= the_sub_field('head_title'); ?>">
            </div>
        </div>

   <div class="first-section__right">
       <!--Start Edu-Profit.com code-->
<script type="text/javascript">
var partner_id = 21988;
var sub_id = "online-essays.org";
var height_ph_new_design_cust_calc_stem="900px";
var width_ph_new_design_cust_calc_stem = "100%";
(function() {
var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
sc.src = 'https://www.edu-profit.com/orderformph-new3.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
})();
</script>
<div id="orderformph-new-3"></div>
<!--End Edu-Profit.com code--></div>

        </div>
</div>
  
</div>

</section>
