</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<footer class="footer">
    <div class="container">
        

                <div class="footer__menu--pages wrap">
                    <?php if (has_nav_menu('footer_menu_pages')) :
                        $nav_args = array(
                            'theme_location' => 'footer_menu_pages',
                            'container' => '',
                            'items_wrap' => '%3$s',
                        );
                        wp_nav_menu($nav_args);
                    endif; ?>
<div class="footer__buton_row">
    <div class="footer_list__more">Show more</div>
</div>

      
                </div>

        <div class="footer__wrap">

           

            <div class="footer__left ">
<a href="/" class="footer__logo">

                <div class="logo__footer">
                    <img src="/wp-content/themes/review/images/logo-footer.svg" alt="logo">
                
                </div>

               

            </a>
               
 <p class="footer__copyright ">Copyright ©<?= date("Y");echo (' '); echo bloginfo() ?>   All Rights Reserved.</p>

               

            </div>
            <div class="footer__center ">
 <div class="footer__menu--post"  >
     <div class="menu_title">Company</div>
                    <?php if (has_nav_menu('footer_menu_post')) :
                        $nav_args = array(
                            'theme_location' => 'footer_menu_post',
                            'container' => '',
                            'items_wrap' => '%3$s',
                        );
                        wp_nav_menu($nav_args);
                    endif; ?>
                </div>

</div>
     <div class="footer__right ">
 <div class="footer__menu--main"  >
     <div class="menu_title">Services</div>
                    <?php if (has_nav_menu('footer_menu_main')) :
                        $nav_args = array(
                            'theme_location' => 'footer_menu_main',
                            'container' => '',
                            'items_wrap' => '%3$s',
                        );
                        wp_nav_menu($nav_args);
                    endif; ?>
                </div>

</div>
        </div>
            <div class="footer__bottom ">
 <div class="footer__menu--terms wrap"  >
                    <?php if (has_nav_menu('footer_menu_terms')) :
                        $nav_args = array(
                            'theme_location' => 'footer_menu_terms',
                            'container' => '',
                            'items_wrap' => '%3$s',
                        );
                        wp_nav_menu($nav_args);
                    endif; ?>
                </div>

</div>

       
    </div>
    <?php get_template_part('includes/modules/popup')?>
</footer>

<?php wp_footer(); ?>
<script>
function asyncCSS(href) {
    var css = document.createElement('link');
    css.rel = "stylesheet";
    css.href = href;
    document.head.appendChild(css);
}
asyncCSS('https://use.fontawesome.com/releases/v5.6.1/css/all.css');
// asyncCSS('style2.css');
// asyncCSS('style3.css');
</script>


</body>
</html>
