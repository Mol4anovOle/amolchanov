<?php get_header(); ?>

<?php get_template_part('includes/sections/post/seo-top') ?>

    <section class="post">
        <div class="container">
            <?php get_template_part('loop'); ?>
        </div>

        
    </section>

<?php get_footer(); ?>