<?php
/**
 * Header template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <div class="site-branding">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'     => false,
                'menu_class'    => 'nav-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <?php echo paneless_get_user_menu(); ?>
    </div>
</header>