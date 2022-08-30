<?php
/* Template Name: SEO Page */
get_header();

?>

<?php get_template_part('includes/sections/page/seo-top') ?>

    <div class="seo-page">
        <div class="container">
            <?php
            if (have_posts()) {
                the_post();
                the_content();
            }
            ?>
        </div>

       
    </div>

<?php
get_footer();
?>