<?php
/**
 * Single post template
 */
get_header();
?>

<main class="main-content">
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="single-post">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-meta">
                <?php echo get_the_date(); ?> &bull; <?php the_author(); ?>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>