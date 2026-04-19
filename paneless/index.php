<?php
/**
 * Main template
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
                <?php if (is_active_sidebar('integration-area') || is_front_page()): ?>
                    <?php get_template_part('template-parts/dashboard-cards'); ?>
                <?php endif; ?>

                <h2 class="section-title"><?php _e('Recent Posts', 'paneless'); ?></h2>

                <?php if (have_posts()): ?>
                <div class="posts-list">
                    <?php while (have_posts()): the_post(); ?>
                    <article class="post-item">
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="post-meta">
                            <?php echo get_the_date(); ?> &bull; <?php the_author(); ?>
                        </div>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>

                <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Previous', 'paneless'),
                    'next_text' => __('Next &raquo;', 'paneless'),
                )); ?>

                <?php else: ?>
                <p><?php _e('No posts found.', 'paneless'); ?></p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>