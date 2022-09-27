<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              Molchanov.com
 * @since             1.0.0
 * @package           Recommended
 *
 * @wordpress-plugin
 * Plugin Name:       Recommended Product Pro
 * Plugin URI:        Recommended-Product-Pro.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Molchanov OV
 * Author URI:        Molchanov.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       recommended
 * Domain Path:       /languages
 */



if (!defined('ABSPATH')) {
    exit;
}

use LoeCoder\Plugin\ProductRecommendations\Product_Recommendations;

if (!class_exists(Product_Recommendations::class)) {
   require plugin_dir_path(__FILE__) . 'includes/class-product-recommendations.php';
}

/**
 * Plugin execution
 * @since    1.0.0
 */
function leo_product_recommendations() {
    return Product_Recommendations::init(__FILE__);
}
leo_product_recommendations();

