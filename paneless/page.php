<?php
/**
 * Page template
 */
get_header();
?>

<main class="main-content">
    <div class="container">
        <article class="single-page">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>