<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"
            onclick="return false;"><?php echo esc_html( 'Skip to content' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div id="site-branding">
                    <div class='logo'>
                        <a href="https://localhost:8888/inhabitent/" rel="home">
                            <h1 class="site-title">Inhabitent</h1>
                        </a>
                    </div>
                </div><!-- #site branding -->
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="menu-main-navigation-container">
                        <button class="menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
                        <?php wp_nav_menu( array( 'echo' => true,'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                    <div class="header-search">
                        <?php get_search_form(); ?>
                    </div>
                </nav><!-- #site-navigation -->

            </div><!-- #container -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">