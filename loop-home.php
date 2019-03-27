<?php

    // The home loop
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php
                    // Fetching a thumbnail from post attachments
                    // First some parameters for later
                    $args = array(
                        'numberposts' => 1,
                        'post_type' => 'attachment',
                        'status' => 'publish',
                        'post_mime_type' => 'image',
                        'post_parent' => $post->ID
                        );
                        $images =& get_children($args);
                        // Loop the attachments
                        foreach ( (array) $images as $attachment_id =>
                        $attachment ) {
                        // Output an attachment in thumbnail size
                        echo wp_get_attachment_image($attachment_id,
                         'thumbnail', '');
                        }
                    ?>
            </a>
        </div>
        <div class="entry-content">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <?php the_excerpt(); ?>
        </div>
    </div>
    
<?php
    
    // Loop ends
    endwhile; endif;
?>

    <div class="navigation">
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older entries', 'simple-pfolio' )); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer entries <span class="meta-nav">&rarr;</span>', 'simple-pfolio' )); ?></div>
    </div>