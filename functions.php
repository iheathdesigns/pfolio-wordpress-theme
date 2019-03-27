<?php
    // We need textdomain for localization support,
    // with language files in the /lang folder
    load_theme_textdomain( 'simple-pfolio', TEMPLATEPATH . '/lang' );
    // This is the default content width, 640 px
    if ( ! isset ( $content_width ))
    $content_width = 640;
    
    //Adding theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );
    
    //Telling WordPress to use editor-style.css for the visual editor
    add_editor_style();
    
    //Adding feed links to header
    add_theme_support( 'automatic-feed-links' );
    
    // MENU AREA
    // ---------
    // Adding and defining the Menu area found in the header.php file
    register_nav_menus( array(
        'top-menu' => __( 'Top Menu', 'simple-pfolio' ),
        ));
        
    // WIDGET AREAS
    //-------------
    // Right column widget area
    register_sidebar( array(
        'name' => __( 'Default Right Column', 'simple-pfolio' ),
        'id' => 'default-right-column', 
        'description' => __( 'The right column on pages outside the Portfolio.',
        'simple-pfolio' ),
        ));
        
    // Right column widget area on the Portfolio Category
    register_sidebar( array(
        'name' => __( 'Portfolio Right Column', 'simple-pfolio' ),
        'id' => 'portfolio-right-column',
        'description' => __( 'The right column on the Portfolio category.',
        'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget news %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Right column widget area on the front page
    register_sidebar( array(
        'name' => __( 'Front Page Right Column', 'simple-pfolio' ),
        'id' => 'frontpage-right-column',
        'description' => __( 'The right column on the front page.', 'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget news %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Left column in the footer
    register_sidebar( array(
        'name' => __( 'Footer Left Side', 'simple-pfolio' ),
        'id' => 'footer-left-side',
        'description' => __( 'The left hand side of the footer.', 'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Middle column in the footer
    register_sidebar( array(
        'name' => __( 'Footer Middle Column', 'simple-pfolio' ),
        'id' => 'footer-middle-column',
        'description' => __( 'The middle column in the footer.', 'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Right column in the footer
    register_sidebar( array(
        'name' => __( 'Footer Right Column', 'simple-pfolio' ),
        'id' => 'footer-right-column',
        'description' => __( 'The right hand column in the footer.', 'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Far right column in the footer
    register_sidebar( array(
        'name' => __( 'Footer Far Right Column', 'simple-pfolio' ),
        'id' => 'footer-far-right-column',
        'description' => __( 'The far right column in the footer.', 'simple-pfolio' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
    // Front page widget area
    register_sidebar( array(
        'name' => __( 'Front Page Welcome Area', 'simple-pfolio' ),
        'id' => 'home-welcome',
        'description' => __( 'The welcome area in the content column on the front page.', 'simple-pfolio' ),
        'before_widget' => '<div id="%1$s" class="widget-home %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
        
        
    // PORTFOLIO CATEGORY CHECK
    // Function to be used with div#content
    function portfoliocheck() {
        // Check whether this is NOT the portfolio category
        // If it is NOT, echo column
        if ( !in_category( 'portfolio' )) {
            echo 'column';
        }
        // If it is in the Portfolio category, echo widecolumn
        else {
            echo 'widecolumn';
        }
    }
?>