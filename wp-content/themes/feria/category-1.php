<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">
				
					<div class="page-header">
					<?php if (is_category()) { ?>
                    	 <ul class="breadcrumb">
                              <li class="home"><a href="#">Home</a></li>
                              <li class="active"><?php single_cat_title(); ?></li>
                          </ul>
                          
					<?php } ?>
					</div>
					
                  
                    
                    <?php query_posts('cat=1&tag=turismo'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="post_content">
                            <?php the_post_thumbnail( 'historia' ); ?>
                            <h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
					
						</section> <!-- end article section -->
						
						
					</article> <!-- end article -->
					
					<?php endwhile; ?>
                    <?php wp_reset_query(); ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					   
 
					    <section class="post_content">
                          <div class="clearfix row-fluid">
                          
                          Bla 
 
                          </div>

					    </section>
					   
					</article>
					
					<?php endif; ?>
			

			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			</div> <!-- end #container -->

<?php get_footer(); ?>