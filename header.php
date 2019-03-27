<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php
        // Changing the title for various sections on the site
        if ( is_home () ) {
            bloginfo( 'name' );
            } elseif ( is_category() || is_tag() ) {
                single_cat_title(); echo ' &bull; ' ; bloginfo( 'name' );
                } elseif ( is_single() || is_page() ) {
                    single_post_title();
                    } else {
                        wp_title('', true);
                        }
                        ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo( 'style-sheet_url' ); ?>" type="text/css" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <div id="site">
            <div id="wrap">
                <div id="header">
                    <?php 
                        // Checking if it is the front page in which case we'll use an h1
                        if ( is_front_page() ) { ?>
                        <h1 id="logo">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'title' ); ?>">
                                <?php
                                    // Getting the site title
                                    bloginfo( 'title' );
                                ?>
                            </a>
                        </h1>
                        <?php }
                        // If it isn't the front page this is what we'll use
                        else { ?>
                        <div id="logo">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'title' ); ?>">
                                <?php 
                                    // Getting the site title
                                    bloginfo( 'title' );
                                ?>
                            </a>
                        </div>
                        <?php } ?>
                        <div class="search">
                            <?php
                                // The default search form
                                get_search_form();
                            ?>
                            <?php 
                                // Checking if there's anything in the Top Menu
                                if ( has_nav_menu( 'top-menu' )) {
                                    
                                    // If there is, adds the Top Menu area
                                    wp_nav_menu( array(
                                        'menu' => 'Top Menu',
                                        'container' => 'div',
                                        'container_class' => 'top-menu',
                                        'theme_location' => 'top-menu',
                                        ));
                                
                                }
                            ?>
                        </div>
                </div>
                <div id="plate">