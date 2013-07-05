<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
                        <?php if ( in_category("historia")) { ?>
                        
                        <div class="page-header">
                                <h1 class="single-title" itemprop="headline">
                                    <?php the_title(); ?>
                                </h1>
                            </div>
						
                        <?php } else { ?>
                        	 
							 <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                             
                             <div class="page-header">
                                <h1 class="single-title" itemprop="headline">
                                    <?php the_title(); ?>
                                </h1>
                            </div>
                        <?php } ?>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							
							<?php the_content(); ?>
                            
                            <p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> </p>
							
							<?php wp_link_pages(); ?>
                            
                            <?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Editar articulo","bonestheme"); ?></a>
							<?php } ?>
					
						</section> <!-- end article section -->
					
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
</div> <!-- end #container -->

<?php get_footer(); ?>