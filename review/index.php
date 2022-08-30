<?php get_header(); ?>

    <section class="seo-top">

    <div class="container seo-top__wrap">

      


        <h1 class="seo-top__title text--capitalize">
           Blog
        </h1>

    </div>

</section>
<section id="blog" class="common-blog section">
		<div class="container">
            <div class="blog-inner-post">
                <?php if ( have_posts() ) { ?>
                    <div class="posts wrap">
                        <?php	while ( have_posts() ) {
                            the_post();
                            $image_id = get_post_thumbnail_id();
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            ?>
                            <div class="post">
                                <div class="inner">
                                     <?php if (get_the_post_thumbnail_url()) { ?>
                                        <a class="post-image-link" href="<?php the_permalink(); ?>">
                                            <img class="post-image" src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-original="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo $image_alt; ?>">
                                        </a>
                                    <?php } else { ?>
                                        <a class="post-image-link" href="<?php the_permalink(); ?>">
                                            <img class="post-image" ssrc="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-original="<?= bloginfo('template_url') . '/images/blog-1.jpg' ?>" alt="">
                                        </a>
                                    <?php } ?>
                                    <div class="info">
                                        <address><time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j Y'); ?></time></address>
                                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <div class="description"><?php the_excerpt();?></div>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                   <div class="more_posts">Show more post</div
                <?php } ?>
            </div>
       
        </div>
	</section>
<?php get_footer(); ?>