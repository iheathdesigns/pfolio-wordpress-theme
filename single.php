<?php get_header(); ?>

    <div id="content" class="<?php portfoliocheck(); ?>">
        <?php get_template_part( 'loop', 'single' ); ?>
    </div>
    
<?php 
    
    // Check whether this is NOT the Portfolio category
    if ( !in_category( 'portfolio' )) {
        get_sidebar();
    }
?>
<?php get_footer(); ?>