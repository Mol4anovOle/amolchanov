<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#50B7BD">
    <title><?php  wp_title(); ?></title>
    <link rel="shortcut icon" href="">


    <?php wp_head(); ?>
  <meta name="google-site-verification" content="eV-frDFuziMqJuBkh9glsVY1VYbVmbrEBCinZ7qS6CA" />
</head>

<?php include(locate_template('main-vars.php', true)); ?>

<body>

<header class="header">

    <div class="container">

        <div class="header__wrap">

            <a href="/" class="header__logo">

                <div class="logo__desktop">
                    <img src="/wp-content/themes/review/images/logo.svg" alt="logo">
                
                </div>

                <div class="logo__mobile">
                 <img src="/wp-content/themes/review/images/logo.svg" alt="logo">
                
                </div>

            </a>



            <nav class="header__navigation navigation">
                <?php if (has_nav_menu('header_menu')) :
                    $nav_args = array(
                        'theme_location' => 'header_menu',
                        'container' => '',
                        'items_wrap' => '%3$s',
                    );
                    wp_nav_menu($nav_args);
                endif; ?>
<a class="button--main"  href="/order/" >Order</a>


            </nav>

                        <div class="header__hamburger js-hamburger">
                <div class="hamburger-line1"></div>
                <div class="hamburger-line2"></div>
                <div class="hamburger-line3"></div>
            </div>

        </div>

    </div>

</header>

<main id="main" class="main">