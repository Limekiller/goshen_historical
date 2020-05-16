<?php

add_theme_support( 'post-thumbnails' );


function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}

function add_scripts() {
    wp_enqueue_script('main', get_template_directory_uri().'/public/scripts/main.js', array('jquery'), '1.0');

    wp_enqueue_script('ajax', get_template_directory_uri().'/public/scripts/ajax.js', array('jquery'), '1.0');
    wp_localize_script('ajax', 'ajax', array('ajaxurl' => get_template_directory_uri().'/ajax.php'));

    wp_enqueue_style('css', get_template_directory_uri().'/public/styles/style.css');
}

function create_posts_shortcode($atts) {
    extract(shortcode_atts( array (
        'category' => 'uncategorized'
    ), $atts, 'multilink' )); 

    $final_string = '';

    query_posts("type=post&category_name=".$category);
    if (have_posts() ) {
       $final_string .= '<h1>'.$category.'</h1><div class="news-container">'; 
       while ( have_posts() ) {
           the_post(); 
           $permalink = get_the_permalink();
           $thumbnail = get_the_post_thumbnail();
           $title = get_the_title();
           $date = get_the_date();
           $content = wp_trim_words(get_the_content(), 20, "...");
           $final_string .= '<a href="'.$permalink.'"><div class="news">';
           if (has_post_thumbnail()) {
                $final_string .= $thumbnail;
           }
           $final_string .= '<div class="news-info-holder"><h2>';
           $final_string .= $title.'</h2>'.$date.'<p>'.$content.'</p></div></div></a>';
       }
       $final_string.= '</div';
    }
    return $final_string;
}

function get_wc_cart_info() {
    echo json_encode([WC()->cart->cart_contents_count, WC()->cart->cart_contents_total]);
    die();
}

add_action ('wp_ajax_nopriv_get_wc_cart_info', 'get_wc_cart_info') ;
add_action('wp_enqueue_scripts', 'add_scripts');
add_action('init', 'register_menus');
add_shortcode('archive', 'create_posts_shortcode');

