<?php get_header(); ?>
    
    <div id="content" class="column">
        <div class="widget-area-home">
            <?php 
                // The front page widget area
                dynamic_sidebar( 'home-welcome' ); ?>
        </div>
        
            <?php get_template_part( 'loop', 'home' ); ?>
    </div>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>