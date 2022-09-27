<?php
if (have_rows('product_item')) {
    ; ?>
    <section class="recommendations-products" style="
    max-width: 1600px;
    padding: 4vw 6vw;
    margin: 0 auto;
">

        <h2>Our recommendations</h2>
        <div class="wrap" style="display: flex;justify-content: space-evenly;flex-wrap:wrap">
            <?php while (have_rows('product_item')) : the_row(); ?>
                <div class="recommended_product_item">

                    <?php $product_pade_id = url_to_postid(get_sub_field('product_items_link'));

                    ?>
                    <div class="recommended_product_item_image">
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($product_pade_id), 'single-post-thumbnail'); ?>

                        <img src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">

                    </div>
                    <div class="recommended_product_item_title"
                         style="margin:10px 0"><?php echo get_the_title($product_pade_id); ?></div>
                    <div class="recommended_product_item_price">
                        <bdi><span class="woocommerce-Price-currencySymbol">$</span><?php
                            $product = wc_get_product($product_pade_id);
                            echo($product->get_price()); ?></bdi>
                    </div>
                    <a style="margin:10px 0 0" href="?add-to-cart=<?php echo $product_pade_id ?>>" data-quantity="1"
                       class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                       data-product_id="<?php echo $product_pade_id; ?>>" data-product_sku=""
                       aria-label="Add “<?php echo get_the_title($product_pade_id); ?>” to your cart" rel="nofollow">Add
                        to cart</a>

                </div>
            <?php endwhile; ?>
        </div>


    </section>
<?php }; ?>