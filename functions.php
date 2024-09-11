<?php
if (!function_exists('vcm')):
    function vcm()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'vcm_main_menu')
        ));
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
endif;
add_action('after_setup_theme', 'vcm');
function get_excerpt($limit, $source = null)
{
    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    return $excerpt;
}

function load_select2_assets()
{
    // Enqueue Select2 CSS
    wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css');

    // Enqueue Select2 JS
    wp_enqueue_script('select2-js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js', array('jquery'), null, true);

    // Custom script to initialize Select2
    wp_add_inline_script('select2-js', '
            jQuery(document).ready(function($) {
                // Initialize Select2 on page load
                setTimeout(function() {
                    $(".enable-select2").select2();
                }); // Adding a small delay to ensure full load
                
                // Re-initialize Select2 after CF7 form loads (for AJAX forms)
                document.addEventListener("wpcf7mailsent", function() {
                    $(".enable-select2").select2();
                }, false);
            });
        ');
    wp_add_inline_script('select2-js', '
    jQuery(document).ready(function($) {
        setTimeout(function() {
            $(".enable-select2").select2({
                placeholder: "Artist Name"
            });
        });
        
        document.addEventListener("wpcf7mailsent", function() {
            $(".enable-select2").select2({
                placeholder: "Artist Name"
            });
        }, false);
    });
');

}
add_action('wp_enqueue_scripts', 'load_select2_assets');


