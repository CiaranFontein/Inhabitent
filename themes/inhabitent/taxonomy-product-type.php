<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1><?php echo substr(get_the_archive_title(), 13) ?></h1>
                <div class="taxonomy-description">
                    <p>
                        <?php echo term_description(); ?>
                    </p>
                </div>
            </header><!-- .page-header -->
            <div class="product-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="product-grid-item">
                    <div class="thumbnail-wrapper product-grid-item">
                        <a href="<?php echo the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                        </a>
                    </div>
                    <div class="product-info">
                        <h2 class="entry-title"><?php echo the_title() ?><h2>
                                <span class="price"><?php echo get_post_field(price) ?></span>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div><!-- #container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>