<section class="partner-bluebox-linkarea">
    <div class="bluebox-2col-flex">

        <div class="highlights-bluebox bluebox1 bluebox">
            <div class="bluebox-heading bluebox-innerflex">
                <span class="bluebox1-icon"><img src="<?php get_template_directory() . '/wp-content/uploads/2016/11/highlights-star.png'?>" alt="Highlights Star" height="42" width="38"></span>
                <h2 class="bluebox-2col-title">Highlights</h2>
            </div>

            <!-- Start of Partner Highlights -->
            <div id="partner-page-hightlights">
                <h6>Highlighted Stories</h6>
                <?php
                // WP_Query arguments
                $args = array (
                    'posts_per_page'=> '4',
                	'category_name' => 'highlight',
                    'post_type'        => array( 'post' ),
                    'tax_query'     => array(
                                    array(
                                        'taxonomy'  => 'client-name',
                                        'field'     => 'id',
                                        'terms'     => $partnerName
                                    )
                    )
                );

                // The Query
                $query = new WP_Query( $args );
                // The Loop
                if ( $query->have_posts() ) : ?>
                <?php
                while ( $query->have_posts() ) :
                    $query->the_post();
                ?>
                    <li id="post-<?php the_ID(); ?>">
                        <a
                            href="<?php echo esc_url( get_permalink() ) ?>"
                            rel="bookmark"><?php the_title(); ?>
                        </a>
                    </li>
            <?php endwhile; ?>
                </ul>
            <?php endif;
                // Restore original Post Data
                wp_reset_postdata();
                 ?>
            </div><!-- #partner-page-highlights -->
            <div id="partner-page-recent">
                <h6>Most Recent Stories</h6>
                <?php

                //Code to call most recent stories for each client.

                // WP_Query arguments
                $args = array (
                    'posts_per_page'=> '4',
                    'order'         => 'DESC',
                    'orderby'       => 'date',
                    'post_type'        => array( 'post' ),
                    'tax_query'     => array(
                                    array(
                                        'taxonomy'  => 'client-name',
                                        'field'     => 'id',
                                        //$partnerName ACF tax field setting the query to specific partner name based on category.
                                        'terms'     => $partnerName
                                    )
                    )
                );

                // The Query
                $query = new WP_Query( $args );
                // The Loop
                if ( $query->have_posts() ) : ?>
                <?php
                while ( $query->have_posts() ) :
                    $query->the_post();
                ?>
                    <li id="post-<?php the_ID(); ?>">
                        <a
                            href="<?php echo esc_url( get_permalink() ) ?>"
                            rel="bookmark"><?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php endif;
                // Restore original Post Data
                wp_reset_postdata();
                 ?>
             </div>


        </div><!-- highlights-bluebox bluebox1 bluebox -->

        <div class="videos-bluebox bluebox2 bluebox">
            <div class="bluebox-heading bluebox-innerflex">
              <span class="bluebox2-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/11/videos-camera.png" alt="Videos-Camera" height="92" width="50"></span>
              <h2 class="bluebox-2col-title">Videos</h2>
            </div>


            <?php
            // WP_Query arguments
            $args = array (
                'post_type'        => array( 'movementmedia_videos' ),
                'category_name'    => 'highlight',
                'tax_query'        => array(
                                array(
                                    'taxonomy'  => 'client-name',
                                    'field'     => 'id',
                                    'terms'     => $partnerName
                                )
                )
            );

                // The Query
                $query = new WP_Query( $args );
                // The Loop
                if ( $query->have_posts() ) : ?>
                    <ul class="bluebox-indiv">
                <?php
                    while ( $query->have_posts() ) :
                        $query->the_post();
                ?>
                        <li id="post-<?php the_ID(); ?>">
                            <a
                                href="<?php echo esc_url( get_permalink() ) ?>"
                                rel="bookmark"><?php the_title(); ?>
                            </a>
                        </li>
                <?php endwhile; ?>
                    </ul>
                <?php endif;
                // Restore original Post Data
                wp_reset_postdata();
                ?>
        </div><!-- videos-bluebox bluebox2 bluebox -->
     </div><!-- Story Highlights bluebox-2col-flex -->
</section>
