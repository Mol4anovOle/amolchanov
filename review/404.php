<?php get_header(); ?>


    <section class="error">
        <div class="container text--center">

            <div class="breadcrumbs">
                <span><a href="<?= home_url(); ?>">Homepage</a></span>
                <span> > </span>
                <span>404</span>
            </div>

<!--            <img src="--><?//= bloginfo('template_url') . '/images/404.png' ?><!--" alt="" class="error__image">-->

            <p class="error__description text--center">Page was not found</p>

            <a href="/" class="error__button button--main text--uppercase">Go To Homepage</a>

        </div>
    </section>


<?php get_footer(); ?>