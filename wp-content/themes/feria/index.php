<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			<div class="clearfix row-fluid">
				<!--<div class="hero-unit">
				
					<?php /*?><h1><?php bloginfo('title'); ?></h1>
					
					<p><?php bloginfo('description'); ?></p><?php */?>
				
				</div>-->
			</div>
			<?php
				}
			?>
			
			<!-- FEEDS -->
			<?php if(function_exists('fetch_feed')) {
				include_once(ABSPATH . WPINC . '/feed.php');               // hay que incluir esto
				$feed = fetch_feed('http://www.medellin.gov.co/irj/servlet/prt/portal/prtmode/rss/prtroot/pcmrssserver.Nav?rid=/guid/e07c8b01-38b3-2f10-fbb3-df3742e451d7&NavigationTarget=navurl://6c8fe23e4fdbf5a6e014e890b7d959c5'); // el feed que queremos mostrar
				$limit = $feed->get_item_quantity(7); // especificamos el número de items a mostrar
				$items = $feed->get_items(0, $limit); // se crea un array con los items
			}
			if ($limit == 0) echo '<div>El feed está vacío o no disponible.</div>';
			else foreach ($items as $item) : ?>
			<div>
				<a href="<?php echo $item->get_permalink(); ?>" 
				  title="<?php echo $item->get_date('j F Y @ G:i'); ?>">
					<?php echo $item->get_title(); ?>
				</a>
			</div>
			<div>
				<?php echo substr($item->get_description(), 0, 200); ?> 
				<span>[...]</span>
			</div>
			<?php endforeach; ?>	
			<!-- FIN DE LOS FEEDS -->

			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
                
                <div class="slider">
                
                </div><!-- cierra .slider -->
                
                <div class="hoy">
                	
                    <!-- Titulos -->
                     <div class="clearfix row-fluid">
                        <div class="titHoy span8">
                            <span class="icono"></span>
                            <span>Hoy en la feria</span>         
                        </div><!-- cierra .titHoy -->  
          
                        <div class="span4 titManana hidden-phone">
                             <span>No te pierdas mañana...</span>  
                        </div><!-- cierra .titManana --> 
                       </div>
                        
                       
                    <!-- Galerías -->    
                      <div class="clearfix row-fluid">
                            <div class=" span8 galeriaHoy">
                            
                            </div><!-- cierra .galeriaHoy -->   
                            
                             <div class="span4 galeriaManana">
                        
                       		 </div><!-- cierra .galeriaHoy -->   
   					  </div>
                                   
                    </div><!-- cierra .hoy -->
                
                <div class="row-fluid">
                	<div class="span8">
                         
                         <div id="novedades">  
                                <div class="tit">
                                	<span class="icono"></span>
                                    <span>Novedades</span>         
                                </div><!-- cierra .tit --> 
                                  
                               <div class="noticiasHome"> 
                                 
                                 <div class="noticiaHome">
                                 <img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="200" height="130" class="img-rounded" />
                                
                                <h2> Parque Cultural Nocturno: gran escenario de artistas</h2>
                                <div class="linea"></div>
                                 
                                 <p>Una programación alternativa, cultural e incluyente caracterizó este evento que, durante 6 días, reunió a artistas locales, nacionales e internacionales, convocando cerca de 35 mil espectadores.</p>
                                 
                                 
                                 <div class="links">
                                      <div class="redes">
                                        <span class="twitter"><a href="#">Twitter</a></span>
                                        <span class="facebook"><a href="#">Facebook</a></span>
                                      </div>
                                      
                                      <div class="vermas"><a href="#">Ver más</a></div>
                                   </div><!-- cierra .links --> 
                                 
                                 
                                 </div><!-- cierra .noticiaHome --> 
                                 
                                 <div class="noticiaHome">
                                 <img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="200" height="130" class="img-rounded" />
                                
                                <h2> Parque Cultural Nocturno: gran escenario de artistas</h2>
                                <div class="linea"></div>
                                 
                                 <p>Una programación alternativa, cultural e incluyente caracterizó este evento que, durante 6 días, reunió a artistas locales, nacionales e internacionales, convocando cerca de 35 mil espectadores.</p>
                                 
                                  <div class="links">
                                      <div class="redes">
                                        <span class="twitter"><a href="#">Twitter</a></span>
                                        <span class="facebook"><a href="#">Facebook</a></span>
                                      </div>
                                      
                                      <div class="vermas"><a href="#">Ver más</a></div>
                                   </div><!-- cierra .links --> 
                                   
                                 </div><!-- cierra .noticiaHome --> 
                                
                              
                                 
                                 <div class="noticiaHome">
                                 <img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="200" height="130" class="img-rounded" />
                                
                                <h2> Parque Cultural Nocturno: gran escenario de artistas</h2>
                                <div class="linea"></div>
                                 
                                 <p>Una programación alternativa, cultural e incluyente caracterizó este evento que, durante 6 días, reunió a artistas locales, nacionales e internacionales, convocando cerca de 35 mil espectadores.</p>
                                 
                                 
                                  <div class="links">
                                      <div class="redes">
                                        <span class="twitter"><a href="#">Twitter</a></span>
                                        <span class="facebook"><a href="#">Facebook</a></span>
                                      </div>
                                      
                                      <div class="vermas"><a href="#">Ver más</a></div>
                                   </div><!-- cierra .links --> 
                                 
                                 </div><!-- cierra .noticiaHome --> 
                                 
                                 <div class="noticiaHome">
                                 <img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="200" height="130" class="img-rounded" />
                                
                                <h2> Parque Cultural Nocturno: gran escenario de artistas</h2>
                                <div class="linea"></div>
                                 
                                 <p>Una programación alternativa, cultural e incluyente caracterizó este evento que, durante 6 días, reunió a artistas locales, nacionales e internacionales, convocando cerca de 35 mil espectadores.</p>
                                 
                                 <div class="links">
                                      <div class="redes">
                                        <span class="twitter"><a href="#">Twitter</a></span>
                                        <span class="facebook"><a href="#">Facebook</a></span>
                                      </div>
                                      
                                      <div class="vermas"><a href="#">Ver más</a></div>
                                   </div><!-- cierra .links --> 
                                
                                 </div><!-- cierra .noticiaHome --> 
                                 
                                 
                               </div><!-- cierra .noticiasHome --> 
                           </div><!-- cierra .novedades --> 
                   	</div>
                    
                    
                    <!-- SIDEBAR HOME -->
                    <div class="span4">
                   		<div class="videoFeria">
                            <div class="tit">
                                  <span class="icono"></span>
                                   <span>Video de la feria</span>         
                            </div><!-- cierra .tit -->  
                            
                            <iframe width="300" height="169" src="//www.youtube.com/embed/bQ2KKHzR2DA" frameborder="0" allowfullscreen></iframe>
                         </div><!-- cierra .videoFeria -->
                        
                    </div>
                                         
                </div><!-- cierra row -->
                
                
                
                
                
                
              

					
					    <footer>
					    </footer>
					</article>
					
					
			
				</div> <!-- end #main -->
    
				
    
			</div> <!-- end #content -->

<?php get_footer(); ?>