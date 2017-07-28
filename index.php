<?php
/*
Blog Page
*/
?>
<?php get_header(); ?>

    <div class="blog-content">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="blog-post">

                <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

                <div class="entry-meta">
                    <?php diamondgridportfolio_posted_on(); ?>
                </div><!-- .entry-meta -->

                <?php if (has_post_thumbnail()) : ?>

                    <a href="<?php the_permalink(); ?>" class="item" title="<?php the_title_attribute(); ?>">

                        <?php the_post_thumbnail('post'); ?>

                    </a>

                <?php endif; ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

        <?php endif; ?>

    </div>

<?php get_footer(); ?>