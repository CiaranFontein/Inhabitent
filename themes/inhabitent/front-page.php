<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="home-hero">
            <img src="/inhabitent/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg">
        </section>
        <section class="product-info container">
            <h2>Shop Stuff</h2>
            <div class="product-type-blocks">
                <?php
                $arg = [
                    'taxonomy' => 'product-type',
                    'hide_empty' => true
                ];
                $terms = get_terms($arg);

                foreach($terms as $term){
                    ?>
                <div class="product-type-block-wrapper">
                    <?php
                    $icon = get_template_directory_uri() . '/images/product-type-icons/'.$term->slug . '.svg';

                    ?>
                    <img src="<?php echo $icon ?>">
                    <p>
                        <?php echo $term->description ?>
                    </p>
                    <p>
                        <a href="<?php get_term_link($term); ?>" class="btn">
                            <?php echo $term->slug . " stuff" ?> </a>
                    </p>
                </div>
                <?php
                };
            ?>
            </div>
        </section>
        <section class=" latest-entries">
            <div class="container">
                <h2> Inhabitent Journal </h2>
                <?php
                        $args = array(
                            'post-type' => 'post',
                            'posts_per_page' => 3
                        );
                    $query = new WP_Query($args);
                    ?>
                <ul>
                    <?php
                        if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li>
                        <div class="thumbnail-wrapper">
                            <img src=<?php the_post_thumbnail_url() ?>
                                class="wp-post-image attachment-large size-large" />
                        </div>
                        <div class="post-info-wrapper">
                            <span class="entry-meta">
                                <span class="posted-on">
                                    <time class="posted-on published">
                                        <?php 
                                            echo get_the_date(); 
                                        ?>
                                    </time>
                                </span>
                                <?php 
                                    echo " / ";
                                    comments_number();
                                ?>
                            </span>
                            <h3>
                                <a href=<?php the_permalink(); ?>>
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <a class="black-btn btn" href=<?php the_permalink() ?>>Read Entry</a>
                    </li>
                    <?php
                            endwhile; 
                                the_posts_navigation();
                                wp_reset_postdata();
                                else : ?>
                    <h2>Nothing found!</h2>
                    <?php endif; ?>
                </ul>
            </div><!-- #container -->
        </section><!-- #section latest-entries-->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
    get_footer();
?>