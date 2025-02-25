<?php
/**
 * Plugin Name: Flormar Test Slider
 * Author: Vlad Slipenkyi
 */

if (!defined('ABSPATH')) {
    exit; 
}

function fts_check_woocommerce() {
    if (!class_exists('WooCommerce')) {
        deactivate_plugins(plugin_basename(__FILE__));
        wp_die('Цей плагін потребує активного WooCommerce.');
    }
}
register_activation_hook(__FILE__, 'fts_check_woocommerce');

function fts_enqueue_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
    wp_enqueue_style('fts-slider-css', plugin_dir_url(__FILE__) . 'slider.css'); 

    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('fts-slider-js', plugin_dir_url(__FILE__) . 'slider.js', array('swiper-js'), false, true);
}
add_action('wp_enqueue_scripts', 'fts_enqueue_scripts');

function fts_product_slider($atts) {
    $atts = shortcode_atts(array(
        'max-price' => '',
        'min-price' => '',
    ), $atts);

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
    );

    $meta_query = array();

    if (!empty($atts['min-price'])) {
        $meta_query[] = array(
            'key'     => '_price',
            'value'   => $atts['min-price'],
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if (!empty($atts['max-price'])) {
        $meta_query[] = array(
            'key'     => '_price',
            'value'   => $atts['max-price'],
            'compare' => '<=',
            'type'    => 'NUMERIC',
        );
    }

    if (!empty($meta_query)) {
        $args['meta_query'] = $meta_query;
    }
    $query = new WP_Query($args);
    ob_start();
    ?>
    <div class="fts-slider swiper">
    <h2>המוצרים הנמכרים ביותר </h2>

        <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post(); global $product; ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo get_woocommerce_currency_symbol() . $product->get_price(); ?></p>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('flormar-test-slider', 'fts_product_slider');
