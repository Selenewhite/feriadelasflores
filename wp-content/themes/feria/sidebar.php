				<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
                    
                    <?php if ( is_home() ) {?>
    
							<div class="videoFeria">
                            <div class="tit">
                                 <span class="icono"></span>
                                   <span>Video de la feria</span>         
                            </div><!-- cierra .tit -->  
                            
                            <iframe width="300" height="169" src="//www.youtube.com/embed/bQ2KKHzR2DA" frameborder="0" allowfullscreen></iframe>
                         </div><!-- cierra .videoFeria -->	
					
					<?php } else {?>

                         <div style="display:none" class="hoyFeria">
                            <div class="tit">
                                 <span class="icono"></span>
                                   <?php if(qtrans_getLanguage() == 'es'): ?>
                                   <span>Hoy en la feria</span>         
                                    <?php else: ?>
                                   <span>Today's Events</span> 
                                    <?php endif; ?>
                            </div><!-- cierra .tit -->  
                            
                            <div class="galeriaHoySidebar"></div>
                            <!-- cierra .galeriaHoy --> 
                           
                         </div><!-- cierra .hoyFeria -->
                         
                         <div class="infoTurismo">
                         <h3>Info turística</h3>
                         <ul>
                           <li><span class="icono1"></span><a href="<?php echo home_url(); ?>/category/infoturistica/">¿Cómo llegar a Medellín?</a></li>
                       	   <li><span class="icono2"></span><a href="http://medellin.travel/que-hacer-en-medellin/reuniones/directorio-turistico/hospedaje" target="_blank">¿Dónde quedarme en Medellín?</a></li>
                       	   <li><span class="icono3"></span><a href="http://medellin.travel/que-hacer-en-medellin/reuniones/directorio-turistico/restaurantes" target="_blank">¿Dónde comer en Medellín?</a></li>
                         </ul>
                         </div>
                      <?php }?>	
                     
						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

					<?php endif; ?>

				</div>