<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        <article class="single-product hentry">
            <div class="product-image-wrapper">
                <?php  ?>
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>
            </div>
            <div class="product-content-wrapper">
                <div class="entry-header">
                    <h1 class="entry-title orange"><?php echo get_the_title() ?></h1>
                </div>
                <div class="entry-content">
                    <p class="price"><?php echo CFS()->get('price'); 
					// echo get_post_field('price'); 
					?></p>
                    <p><?php echo get_the_content() ?></p>
                </div>
            </div>
            <?php endwhile; // End of the loop. ?>
        </article>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>