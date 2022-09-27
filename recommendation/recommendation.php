<?php
/**
 * Plugin Name: WooCommerce Recommendations simple
 * Plugin URI: http://woocommerce.com/
 * Description: Recommendation product .
 * Version: 1.0.0
 * Author: Molchanov Oleksandr
 * Author URI: http://yourdomain.com/
 * Developer: Your Name
 * Developer URI: http://yourdomain.com/
 * Text Domain: woocommerce-extension
 * Domain Path: /languages
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


// Test to see if WooCommerce is active (including network activated).
$plugin_path = trailingslashit(WP_PLUGIN_DIR) . 'woocommerce/woocommerce.php';

if (
    in_array($plugin_path, wp_get_active_and_valid_plugins())
    || in_array($plugin_path, wp_get_active_network_plugins())
) {



//add to panel new tab
    add_filter('woocommerce_product_data_tabs', function ($tabs)
    {





        array_push($tabs, array(
            'label' => __('Recommended', 'woocommerce'),
            'target' => 'linked_product_data',

        ));

        return $tabs;
    });


}

