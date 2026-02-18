<?php
get_header();
?>

<main id="main-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e('No content found', 'luna'); ?></p>
    <?php
    endif;
    ?>
</main>

<?php
get_footer();
