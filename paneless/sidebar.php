<?php
/**
 * Sidebar template
 */
?>

<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar-1')): ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else: ?>
        <div class="widget">
            <h2 class="widget-title"><?php _e('Search', 'paneless'); ?></h2>
            <?php get_search_form(); ?>
        </div>
        <div class="widget">
            <h2 class="widget-title"><?php _e('Recent Posts', 'paneless'); ?></h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array('numberposts' => 5));
                foreach ($recent_posts as $post):
                ?>
                <li><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>