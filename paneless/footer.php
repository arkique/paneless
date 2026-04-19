<?php
/**
 * Footer template
 */
?>

<footer class="site-footer">
    <div class="container footer-inner">
        <?php
        $copyright = get_theme_mod('paneless_copyright', get_bloginfo('name'));
        ?>
        <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html($copyright); ?></p>
        
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'   => false,
            'menu_class'   => 'footer-menu',
            'fallback_cb'   => false,
        ));
        ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>