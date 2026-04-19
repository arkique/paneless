<?php
/**
 * Archive template
 */
get_header();
?>

<main class="main-content">
    <div class="container">
        <header class="archive-header">
            <h1 class="archive-title">
                <?php if (is_category()): ?>
                    <?php single_cat_title(); ?>
                <?php elseif (is_tag()): ?>
                    <?php single_tag_title(); ?>
                <?php elseif (is_author()): ?>
                    <?php echo get_the_author(); ?>
                <?php elseif (is_date()): ?>
                    <?php the_archive_title(); ?>
                <?php else: ?>
                    <?php _e('Archives', 'paneless'); ?>
                <?php endif; ?>
            </h1>
        </header>

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
</main>

<?php get_footer(); ?>