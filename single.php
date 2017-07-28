<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>
    <div id="post-wrapper">
    <?php if (has_post_thumbnail()) : ?>
    <div class="image-content">
    <?php else : ?>
    <div class="entry-content">
    <?php endif; ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<div class="entry-title">', '</div>'); ?>
        <div class="entry-meta">
            <?php diamondgridportfolio_posted_on(); ?>
        </div>
    </header>
    <div class="post-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="the-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
    </div>
    <?php if(has_post_thumbnail()) : ?>
    <div class="image-pagination">
    <?php else : ?>
    <div class="entry-pagination">
    <?php endif; ?>
        <div class="previous-post">
            <?php previous_post_link('%link', 'Previous Post', false); ?>
        </div>
        <div class="next-post">
            <?php next_post_link('%link', 'Next Post', false); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>