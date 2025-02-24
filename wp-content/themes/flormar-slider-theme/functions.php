<?php
function flormar_slider_enqueue_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('fts-slider-js', get_template_directory_uri() . '/slider.js', array('swiper-js'), false, true);
}
add_action('wp_enqueue_scripts', 'flormar_slider_enqueue_scripts');
