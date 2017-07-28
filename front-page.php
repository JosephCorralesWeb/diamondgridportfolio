<?php
/*
Front Page
Featured Post Thumbnails Go Here
*/
?>
<?php get_header(); ?>
    <div class="grid">

        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>

                    <?php
                    $image_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($image_id, 'grid');
                    ?>

                    <a href="<?php the_permalink(); ?>" class="item" title="<?php the_title_attribute(); ?>">
                        <img class="diamond-image" src="<?php echo $image_url[0]; ?>">

                        <div class="overlay"></div>
                        <div class="image-title">
                            <?php the_title(); ?>
                            <br>
                            <span><?php the_time('F j, Y'); ?></span>
                        </div>
                    </a>

                <?php else : ?>

                    <a href="<?php the_permalink(); ?>" class="item" title="<?php the_title_attribute(); ?>">
                        <div class="text-post-background">
                            <div class="text-post-title">
                                <?php echo strtoupper(mb_strimwidth(the_title('', '', false), 0, 19, '...')); ?>
                                <br>
                                <span><?php the_time('F j, Y'); ?></span>
                            </div>
                        </div>
                    </a>

                <?php endif; ?>

            <?php endwhile; ?>

            <!-- end of the loop -->

        <?php else : ?>

            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

        <?php endif; ?>

    </div>

<?php get_footer(); ?>