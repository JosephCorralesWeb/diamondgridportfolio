<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>

    <?php get_template_part('template-parts/content', 'page'); ?>

    <div id="post-wrapper">
    <div class="entry-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<div class="entry-title">', '</div>'); ?>
    </header>
    <div class="post-image">
        <?php
        if (is_page('about-inquire')) : ?>
            <div class="portrait">
                <?php the_post_thumbnail('post'); ?>
            </div>
        <?php else :
            the_post_thumbnail();
        endif;
        ?>
    </div>
    <div class="the-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
    </div>
    <div class="entry-pagination">
        <div class="previous-post">
            <?php previous_post_link('%link', 'Previous Post', false); ?>
        </div>
        <div class="next-post">
            <?php next_post_link('%link', 'Next Post', false); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>