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
                    'hide_empty' => false
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
                        <a href="<?php echo get_term_link($term); ?>" class="btn">
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
                            'post_type' => 'post',
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
                            <span class="entry-metafront-page-meta">
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
        <section class="adventures-container container">
            <h2>Latest Adventures</h2>
            <?php
                $adventuresCount = 0;
                        $adv_args = array(
                            'post_type' => 'adventure',
                            'posts_per_page' => 4
                        );
                    $adv_query = new WP_Query($adv_args);
                    ?>
            <div class="adventures-grid">
                <?php
                        if ( $adv_query->have_posts() ) : ?>
                <?php while ( $adv_query->have_posts() ) : $adv_query->the_post(); ?>
                <?php
                    $adventuresCount+=1;
                    switch($adventuresCount){
                        case 1: ?>
                <div class="one adventure-cell">
                    <div class="header">
                        <h3><?php echo get_the_title() ?></h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <img src="<?php echo the_post_thumbnail_url() ?>">

                </div>
                <?php break;
                case 2: ?>
                <div class="two adventure-cell">
                    <div class="header">
                        <h3><?php echo get_the_title() ?></h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <img src="<?php echo the_post_thumbnail_url() ?>">

                </div>
                <?php break;
                case 3: ?>
                <div class="three adventure-cell">
                    <div class="header">
                        <h3><?php echo get_the_title() ?></h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <img src="<?php echo the_post_thumbnail_url() ?>">
                </div>
                <?php break;
                case 4: ?>
                <div class="four adventure-cell">
                    <div class="header">
                        <h3><?php echo get_the_title() ?></h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <img src="<?php echo the_post_thumbnail_url() ?>">
                </div>
                <?php break;
                }
                
                endwhile;
                else : ?>
                <h2>Nothing found!</h2>
                <?php endif; ?>
                <p class="see-more">
                    <a href="https://inhabitent.com/adventures" class="btn">More Adventures</a>
                </p>

            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
    get_footer();
?>