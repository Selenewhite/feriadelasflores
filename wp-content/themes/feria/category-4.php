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
                    
                   
                    
                     <div class="tit formularioAcreditacion">
                                	<!--<span class="icono"></span>-->
                                    <span>Descarga la programación de la Feria de las flores 2013</span>
                                    
                                    <a href="<?php bloginfo('template_directory'); ?>/descargables/Programacion.pdf" class="btn" target="_blank">Descargar programación</a>  
                                    &nbsp;
                                    &nbsp;       
                      </div><!-- cierra .tit --> 
					

			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			</div> <!-- end #container -->

<?php get_footer(); ?>