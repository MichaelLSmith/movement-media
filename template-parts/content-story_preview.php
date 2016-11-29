<section id="post-<?php the_ID(); ?>" class="stories-list">
       <?php if(in_category('Newsletter')):?>
       <a href="http://<?php the_field('newsletter_url') ?>" target="_blank" rel="bookmark">
       <div class="stories-image">
           <?php
               if ( has_post_thumbnail() ) :
                   the_post_thumbnail();
               endif;
           ?>
       </div>
   <h5 class="stories-title"><?php the_title(); ?> </h5>
   </a>

<?php else: ?>

       <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
   <div class="stories-image">
       <?php
       if ( has_post_thumbnail() ) :
           the_post_thumbnail();
       endif;
       ?>
   </div>
       <h5 class="stories-title"><?php the_title(); ?> </h5>
       </a>
   <?php endif; // if newsletter?>

       <div class="story-meta">
           <span class="story-author">
           <?php the_author(); ?>,
           </span>
           <span class="story-date">
               <?php echo get_the_date(); ?>
           </span>
       </div>
       <div class="stories-category">
           <?php the_category(' '); ?>
       </div>

       <div class ="social-share story-share">
             <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>">
                 <div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/twitter-e1478996500727.png" height="36" width="36" alt="Movement Media logo">
                 </div>
             </a>


             <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="">
                 <div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/facebook-e1478996492964.png" height="36" width="36" alt="Movement Media logo"></div>
             </a>
       </div>
   </section>
