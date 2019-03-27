<div id="sidebar-container">
    <ul id="sidebar">
        <li id="postmeta" class="widget">
            <p>
                <!-- Link back to original post -->
                &larr; <a href="<?php echo get_permalink( $post->post_parent ); ?>">
                    <?php echo get_the_title( $post->post_parent ); ?>
                </a>
            </p>
            <h1>
                <?php
                    // Title of the attachment
                    the_title();
                ?>
            </h1>
            <p class="meta-attachment">
                <!-- Metadata -->
                <?php the_date(); ?>
                <?php echo __( 'by', 'simple-pfolio' ); ?>
                <?php the_author(); ?>
                <?php edit_post_link(); ?>
            </p>
            <?php
                // Outputs the attachment Caption if available
                if ( !empty( $post->post_excerpt )) {
                    echo '<h2>';
                    the_excerpt();
                    echo '</h2>';
                }
            ?>
            
            <?php
                // Outputs the attachment Description if available 
                if ( !empty( $post->post_excerpt )) {
                    echo '<div class="entry-attachment">';
                    the_content();
                    echo '</div';
                }
            ?>
            
            <?php
                // If it is an image, output data
                // Thanks Twenty Ten
                if ( wp_attachment_is_image() ) {
                    $metadata = wp_get_attachment_metadata();
                    echo '<p>';
                    printf( __( 'The full sized image is %s pixels', 'simple-pfolio' ),
                    sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
                    wp_get_attachment_url(),
                    esc_attr( __( 'Link to full-size image', 'simple-pfolio' )),
                    $metadata['width'],
                    $metadata['height']
                    )
                );
                echo '</p>';
                }
            ?>
        </li>
    </ul>
</div>