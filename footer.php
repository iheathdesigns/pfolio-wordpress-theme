<div id="footer">
    <div class="footer-left">
        <div id="footer-thumbs">
            <ul>
                <?php 
                    // Store 4 posts from Portfolio in $lastposts
                    // then loop it with foreach
                    $lastposts = get_posts( 'numberposts=4&category_name=portfolio' );
                    foreach( $lastposts as $post ) :
                        setup_postdata( $post ); // Gives us post access
                ?>
                <li class="footer-thumb-post">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            // Fetching a thumbnail from post attachments
                            // First some parameters for later
                            $args = array(
                                'numberposts' => 1,
                                'post_type' => 'attachment',
                                'status' => 'publish',
                                'post_mime_type' => 'image',
                                'post-parent' => $post->ID
                                );
                                $images =& get_children($args);
                                // Loop the attachments
                                foreach ( (array) $images as $attachment_id => $attachment ) {
                                    // Output an attachment in thumbnail size
                                    echo wp_get_attachment_image($attachment_id, array(130, 130), '');
                                    
                                }
                        ?>
                    </a>
                </li>
                <?php
                    // Stop loop
                    endforeach; ?>
            </ul>
        </div>
        <div class="footer-column left">
            <ul class="footer-widget-area">
                <?php 
                    // The Footer Left Side widget area
                    dynamic_sidebar( 'footer-left-column' );
                ?>
                <li class="widget widget-area-empty">
                    Left widget column - drop a widget here!
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="footer-column-middle left">
            <ul class="footer-widget-area footer-widget-area-middle">
                <?php 
                    // The Footer Left Side widget area
                    dynamic_sidebar( 'footer-middle-column' );
                ?>
                <li class="widget widget-area-empty">
                    Middle widget column - drop a widget here!
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="footer-column right">
            <ul class="footer-widget-area">
                <?php
                    // The Footer Left Side widget area
                    dynamic_sidebar( 'footer-right-column' );
                ?>
                <li class="widget widget-area-empty">
                    Right widget column - drop a widget here!
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="footer-right">
        <ul>
            <?php
                // The Footer Right Side widget area
                dynamic_sidebar( 'footer-right-side' );
            ?>
            <li class="widget widget-area-empty">
                Far right widget column - drop a widget here!
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <div id="footer-bottom">
        <p><?php bloginfo( 'title' ); ?> is proudly powered by <a href="https://wordpress.org" title="WordPress">WordPress</a></p>
    </div>
</div>

</div> <!-- ends #plate -->
</div> <!-- ends #wrap -->
</div> <!-- ends #site -->

<?php wp_footer(); ?>
</body>
</html>