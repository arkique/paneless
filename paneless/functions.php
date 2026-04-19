<?php
/**
 * Paneless Theme Functions
 */

function paneless_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width' => 600,
        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 2,
            'max_rows' => 8,
            'default_columns' => 4,
            'min_columns' => 2,
            'max_columns' => 5,
        ),
    ));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'paneless'),
        'footer' => __('Footer Menu', 'paneless'),
    ));

    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'paneless_setup');

function paneless_scripts() {
    wp_enqueue_style('paneless-style', get_stylesheet_uri());
    wp_enqueue_style('paneless-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'paneless_scripts');

function paneless_widgets_init() {
    register_sidebar(array(
        'name'          => __('Integration Area', 'paneless'),
        'id'            => 'integration-area',
        'description'  => __('Widget area for Sonarr/Radarr integration placeholders', 'paneless'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Sidebar', 'paneless'),
        'id'            => 'sidebar-1',
        'description'  => __('Add widgets here to appear in sidebar', 'paneless'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'paneless_widgets_init');

function paneless_customize_register($wp_customize) {
    $wp_customize->add_setting('paneless_accent_color', array(
        'default'   => '#0066cc',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'paneless_accent_color', array(
        'label'    => __('Accent Color', 'paneless'),
        'section'  => 'colors',
        'settings' => 'paneless_accent_color',
    )));

    $wp_customize->add_setting('paneless_copyright', array(
        'default'   => get_bloginfo('name'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('paneless_copyright', array(
        'label'    => __('Copyright Text', 'paneless'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'paneless_customize_register');

function paneless_get_user_menu() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_name = esc_html($current_user->display_name);
        $admin_url = admin_url();
        $logout_url = wp_logout_url(home_url());

        $menu = '<ul class="user-menu">';
        $menu .= '<li class="user-menu-item has-dropdown">';
        $menu .= '<a href="#" class="user-name">' . get_avatar($current_user->ID, 24) . ' ' . $user_name . '</a>';
        $menu .= '<ul class="user-dropdown">';
        $menu .= '<li><a href="' . get_author_posts_url($current_user->ID) . '">Profile</a></li>';
        if (current_user_can('manage_options')) {
            $menu .= '<li><a href="' . $admin_url . '">Admin</a></li>';
        }
        $menu .= '<li><a href="' . $logout_url . '">Logout</a></li>';
        $menu .= '</ul>';
        $menu .= '</li>';
        $menu .= '</ul>';
        return $menu;
    } else {
        $login_url = wp_login_url(home_url());
        return '<ul class="user-menu"><li><a href="' . $login_url . '" class="login-link">Login</a></li></ul>';
    }
}