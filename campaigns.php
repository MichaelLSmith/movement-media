
<?php
/*
 *	Template Name: Email Archives
 *	See the codex entry on custom template for more information: http://codex.wordpress.org/Page_Templates#Custom_Page_Template
 */

	 get_header();
?>
        <div class='container'>
<?php

          /* We serve both the list of emails and the content of a specific email from this same template  */
             $email_id = ( isset($_REQUEST['email_id']) && $_REQUEST['email_id']!='' )? $_REQUEST['email_id'] : '';
                  if($email_id){
                  //- The email content is stored in a post meta field, not in the post_content field
                  $html = get_post_meta($email_id, 'imc_content', true);
                  echo "<div id='html_response'>{$html}</div>";
                   }

           /* The emails are a custom post type. Grab a list of them using the standard get_posts() function
            * Official documentation here: https://codex.wordpress.org/Template_Tags/get_posts
            * We skip a few parameters that aren't applicable, the others are included here for reference
            */
                  else{
					if( get_query_var( 'paged' ) )
						$my_page = get_query_var( 'paged' );
					else {
					//- if using a static page as the homepage
					if( get_query_var( 'page' ) )
						$my_page = get_query_var( 'page' );
					else
						$my_page = 1;
					set_query_var( 'paged', $my_page );
					$paged = $my_page;
					}

					global $wp_query;

					$args = array(
						'posts_per_page' 	=> 5,
						'offset' 			=> 0,
						'paged'				=> $my_page,
						'category'			=> '',
						'category_name'		=> '',
						'orderby'			=> 'post_date',
						'order'				=> 'DESC',
						'include'			=> '',
						'exclude'			=> '',
						'meta_key'			=> '',
						'meta_value'		=> '',
						'post_type'			=> 'imc_email_campaign',
						'post_status'		=> array('publish', 'draft'),
						'suppress_filters'	=> true
						);

					$emails = new WP_Query($args);
					$pagecount = $emails->max_num_pages;
					?>
						<h2>View Past Emails</h2>
						<ul style='list-style:none;margin-top:20px;'>
					<?php
					while($emails->have_posts()):
						$emails->the_post();
						//- The email subject line is stored in a post meta field
						$email_subject = get_post_meta($post->ID, 'imc_email_subject', true);
					?>
						<li style='margin: 10px 0'>
							<span class='date' style='color: #000;font-weight:800;margin-right:10px;'><?= the_time('F j, Y');?></span> <a class='ajax-load' href="" data-id="<?=$post->ID?>"><?= $email_subject?></a>
						</li>
					<?php endwhile;?>
					</ul>
						<p>Showing page <?=$paged;?> of <?=$pagecount;?>  <?php previous_posts_link('« More Recent Emails', $pagecount);?>  <?= ($curpage > 1 && $paged != $pagecount)?'|':'';?>  <?php next_posts_link('Older Emails »', $pagecount); ?>
						</p>
							<div id='loading_status' style='display:none; font-size:36px;text-align:center;'>loading...</div>
							<iframe src='' id="email_iframe" width='100%' style='overflow:hidden'></iframe>
						<script>
						jQuery(document).ready( function($) {
							var frame = $('#email_iframe').contents().find('html');
							$( '.ajax-load' ).click(function( event ){
								event.preventDefault();
								//- clear any existing iframe content
								frame.html('');
								$('#loading_status').toggle();
								var url = "<?= $_SERVER['REQUEST_URI'];?>";
								frame.load(url, { email_id: $(this).data('id') }, function( response ){
									var html = $(response).find('#html_response').get(0);
									frame.html(html);
										//- make sure all images are loaded before calculating height
										var $el = frame, deferreds;
										deferreds = $el.find('img').map(function(){
											var deferred = $.Deferred();
											this.onload = function imgOnLoad() {
											deferred.resolve();
											};
											return deferred;
										});
										$.when.apply($, deferreds).done(function () {
											var height = $(html).outerHeight(true);
											$('#loading_status').toggle();
											$('#email_iframe').height(height);
										});
									});
								});

						});
						</script>
				   <?php } ?>



			</div><!--end container-->


<?php get_footer(); ?>
