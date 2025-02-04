<?php
    add_action('wp_enqueue_scripts', 'web01_scripts');

    function web01_scripts() {
        wp_enqueue_style('web01-style', get_stylesheet_uri());
        wp_enqueue_style('assets-css-style', get_template_directory_uri() . '/assests/css/style.css');
        wp_enqueue_style('normalize-style', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
        wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);
    }

    add_theme_support( 'menus');


        // Подключаем стандартные стили Gutenberg
    function mytheme_enqueue_gutenberg_styles() {
        // Подключаем стили блоков Gutenberg на фронтенд
        wp_enqueue_style('wp-block-library');
    }
    add_action('wp_enqueue_scripts', 'mytheme_enqueue_gutenberg_styles');


//nav_link active
    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

    function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'nav-vertical-col-2' || 'nav-vertical-col-2' || 'nav-vertical-top') {

        if ($item->current) {
            $atts['class'] = 'current_btn_active_vertical';
        }
    };

    return $atts;
}

// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes__vertical', 10, 3);

//     function filter_nav_menu_link_attributes_vertical($atts, $item, $args) {
//     if ($args->menu === 'nav-vertical-top') {

//         if ($item->current) {
//             $atts['class'] = 'current_btn_active';
//         }
//     };

//     return $atts;
// }




?>