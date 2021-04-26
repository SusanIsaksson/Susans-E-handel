<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('woocommerce');

//placering av menyer
add_action('after_setup_theme', 'register_menu');

function register_menu() {
    register_nav_menu('Huvudmeny', 'Meny placerad i header');
    register_nav_menu('Footermeny', 'Meny placerad i footer');
    register_nav_menu('Sidebarmeny', 'Meny placerad i sidebar');
}

// widget för logo namnet Susan's E-handel i header
register_sidebar(
    [
        'name' => 'Logo namn',
        'description' => 'företagets namn',
        'id' => 'logo',
        'before_widget' => ''
    ]
);




add_action('wp_enqueue_scripts', 'ehandelCss');

function ehandelCss() {
    wp_enqueue_style('ehandelstil', get_template_directory_uri() .'/style.css');
   

    wp_enqueue_script('fontawesome', get_template_directory_uri() .'/https://kit.fontawesome.com/2ab6c683d8.js', [], false, true);

}

add_action('woocommerce_after_shop_loop_item_title', 'addHook');

function addHook() {
    echo 'vegan produkt';
};

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);

