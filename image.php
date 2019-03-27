<?php get_header(); ?>

    <div id="content">
        <?php
        // Loop it
        if ( have_posts ()) : while ( have_posts() ) : the_post(); ?>
        
        <div class="medium-image">
            <?php echo wp_get_attachment_image( $post->ID,
            $size='medium', false); ?>
        </div>
        
        
        <?php 
        // End the loop
        endwhile; endif; ?>
        
        <div class="navigation">
            <div class="nav-previous">
                <?php next_image_link( 'thumbnail' ); ?>
            </div>
            <div class="nav-next">
                <?php previous_image_link( 'thumbnail' ); ?>
            </div>
        </div>
    </div>
    
<?php get_sidebar( 'attachment' ); ?>
<?php get_footer(); ?>