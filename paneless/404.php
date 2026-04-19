<?php
/**
 * 404 template
 */
get_header();
?>

<main class="main-content">
    <div class="container">
        <div class="error-404">
            <h1>404</h1>
            <p><?php _e('Page not found', 'paneless'); ?></p>
            <p><?php _e('The page you are looking for does not exist.', 'paneless'); ?></p>
            <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Go to homepage', 'paneless'); ?></a></p>
        </div>
    </div>
</main>

<?php get_footer(); ?>