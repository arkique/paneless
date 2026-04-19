<?php
/**
 * Dashboard cards template part
 */
?>

<div class="dashboard-cards">
    <div class="dashboard-card">
        <h3 class="dashboard-card-title"><?php _e('Recent Activity', 'paneless'); ?></h3>
        <div class="dashboard-card-content">
            <?php
            $recent = wp_get_recent_posts(array('numberposts' => 3));
            if ($recent):
            ?>
            <ul>
                <?php foreach ($recent as $post): ?>
                <li><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
            <p><?php _e('No recent activity', 'paneless'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="dashboard-card">
        <h3 class="dashboard-card-title"><?php _e('Quick Links', 'paneless'); ?></h3>
        <div class="dashboard-card-content">
            <ul>
                <?php
                $bookmarks = get_bookmarks(array('limit' => 5));
                foreach ($bookmarks as $bookmark):
                ?>
                <li><a href="<?php echo $bookmark->link_url; ?>"><?php echo $bookmark->link_name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="dashboard-card">
        <h3 class="dashboard-card-title"><?php _e('Integrations', 'paneless'); ?></h3>
        <div class="dashboard-card-content">
            <p><?php _e('Placeholders for Sonarr/Radarr status', 'paneless'); ?></p>
            <p style="font-size: 0.875rem; color: var(--text-muted);"><?php _e('Configure widgets in WordPress admin', 'paneless'); ?></p>
        </div>
    </div>
</div>