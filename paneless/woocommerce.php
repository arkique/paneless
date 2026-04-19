<?php
/**
 * WooCommerce template
 */
get_header();
?>

<?php if (is_active_sidebar('integration-area')): ?>
<div class="integration-area">
    <div class="container">
        <?php dynamic_sidebar('integration-area'); ?>
    </div>
</div>
<?php endif; ?>

<main class="main-content">
    <div class="container">
        <div class="content-area<?php echo is_active_sidebar('sidebar-1') ? ' has-sidebar' : ''; ?>">
            <div class="primary-content">
                <?php woocommerce_content(); ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>