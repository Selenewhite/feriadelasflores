<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">
				
					<div class="page-header">
          <?php if (is_category()) { ?>
            <?php if(qtrans_getLanguage() == 'es'): ?>
                       <ul class="breadcrumb">
                              <li class="home"><a href="<?php echo home_url(); ?>">Home</a></li>
                              <li class="active"><?php single_cat_title(); ?></li>
                          </ul>
                        <?php else: ?>
                       <ul class="breadcrumb">
                              <li class="home"><a href="<?php echo home_url(); ?>/en/">Home</a></li>
                              <li class="active"><?php single_cat_title(); ?></li>
                          </ul>                        
                        <?php endif; ?>  
          <?php } ?>
					</div>

            <div class="tit">
              <span class="icono"></span>
                <span>Acreditación de Prensa.</span> 
                <a href="<?php echo home_url(); ?>/acreditacion-de-prensa-para-la-feria-de-las-flores-2013/" class="ver">Acreditarme</a>        
            </div><!-- cierra .tit -->             


                         <div id="novedades">  
           <?php if(qtrans_getLanguage() == 'es'): ?>
           <div class="tit">
              <span class="icono"></span>
              <span>Novedades</span>         
            </div><!-- cierra .tit --> 
            <?php else: ?>
            <div class="tit">
              <span class="icono"></span>
              <span>News</span>         
            </div><!-- cierra .tit --> 
           <?php endif; ?> 

            <div class="noticiasHome"> 
              <!-- FEEDS -->
              <?php 
              if(function_exists('fetch_feed')) {
                include_once(ABSPATH . WPINC . '/feed.php');               // hay que incluir esto
                $feed = fetch_feed('http://www.medellin.gov.co/irj/servlet/prt/portal/prtmode/rss/prtroot/pcmrssserver.Nav?rid=/guid/e07c8b01-38b3-2f10-fbb3-df3742e451d7&NavigationTarget=navurl://6c8fe23e4fdbf5a6e014e890b7d959c5'); // el feed que queremos mostrar
					
				if(!isset($feed->errors)){
					$limit = $feed->get_item_quantity(2); // especificamos el número de items a mostrar
					$items = $feed->get_items(0, $limit); // se crea un array con los items
				}
              }
              if ($limit == 0) echo '';
              else foreach ($items as $item) : ?>
              <div class="noticiaHome">
                <?php
                $img =  stristr ( $item->get_content() , "<img"); 

                $second = strpos($img, ">");
                
                $img = substr($img, 0, $second);  

                $src = substr($img, strpos($img, "src=") + 5 ) ;                
                $params = preg_split('[\"|\']', $src, 2);                  
                if($params[0] == "" || $params[0] == "/" || $params[0] == " "){
                  $src = get_template_directory_uri() . "/images/genericaFeed.jpg";
                }
                else{
                  $src = $params[0];
                }
                ?>         
                <img src="<?php echo $src ?>" width="200" height="130" class="img-rounded" />
                <h2><?php echo $item->get_title(); ?></h2>
                <div class="linea"></div>
                <p><?php echo substr(strip_tags ($item->get_content()), 0, 200) ?>...</p>
                <div class="links">
                  <div class="redes">
                    <span class="twitter">
                      <a href="https://twitter.com/share?text=<?php echo $item->get_title(); ?>&url=<?php echo $item->get_permalink(); ?>" target="_blank">
                        Twitter
                      </a>
                    </span>
                    <span class="facebook">
                      <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php echo $item->get_permalink(); ?>&amp;p[title]=<?php echo $item->get_title(); ?>&amp;p[summary]=<?php echo substr(strip_tags ($item->get_content()), 0, 200) ?>">
                        Facebook
                      </a>
                    </span>
                  </div>
                  <?php if(qtrans_getLanguage() == 'es'): ?>
                  <div class="vermas">
                    <a target="_BLANK" href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_date('j F Y @ G:i'); ?>">Ver más</a>
                  </div>
                  <?php else: ?>
                   <div class="readmore">
                    <a target="_BLANK" href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_date('j F Y @ G:i'); ?>">Read more</a>
                  </div>
                  <?php endif; ?>    
                </div>              
              </div>
              <?php endforeach; ?>  
              <?php 
              if(function_exists('fetch_feed')) {
                include_once(ABSPATH . WPINC . '/feed.php');               // hay que incluir esto
                $feed = fetch_feed('http://noticias.telemedellin.tv/tag/feriaflores/feed'); // el feed que queremos mostrar
				if(!isset($feed->errors)){
					$limit = $feed->get_item_quantity(2); // especificamos el número de items a mostrar
					$items = $feed->get_items(0, $limit); // se crea un array con los items
				}
              }
              if ($limit == 0) echo '';
              else foreach ($items as $item) : ?>
              <div class="noticiaHome">
                <?php
                $img =  stristr ( $item->get_content() , "<img"); 
                $second = strpos($img, ">");
                $img = substr($img, 0, $second);                
                $src = substr($img, strpos($img, "src=") + 5 ) ;                
                $params = preg_split('[\"|\']', $src, 2); 
                if($params[0] == "" || $params[0] == "/" || $params[0] == " "){
                  $src = get_template_directory_uri() . "/images/genericaFeed.jpg";
                }
                else{
                  $src = $params[0];
                }                 
                ?>
                <img src="<?php echo $src ?>" width="200" height="130" class="img-rounded" />
                <h2><?php echo $item->get_title(); ?></h2>
                <div class="linea"></div>
                <p><?php echo substr(strip_tags ($item->get_content()), 0, 200) ?>...</p>
                <div class="links">
                  <div class="redes">
                    <span class="twitter">
                      <a href="https://twitter.com/share?text=<?php echo $item->get_title(); ?>&url=<?php echo $item->get_permalink(); ?>" target="_blank">
                        Twitter
                      </a>
                    </span>
                    <span class="facebook">
                      <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php echo $item->get_permalink(); ?>&amp;p[title]=<?php echo $item->get_title(); ?>&amp;p[summary]=<?php echo substr(strip_tags ($item->get_content()), 0, 200) ?>">
                        Facebook
                      </a>
                    </span>
                  </div>
                  <div class="vermas">
                    <a target="_BLANK" href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_date('j F Y @ G:i'); ?>">Ver más</a>
                  </div>
                </div>              
              </div>
              <?php endforeach; ?>                
              <!-- FIN DE LOS FEEDS -->         
          </div><!-- cierra .novedades --> 
        
                     
                     
                    
                  <div style="display:none">  
                    
                     <div id="novedades">  
                                <div class="tit">
                                	<span class="icono"></span>
                                    <span>Boletines</span> 
                                    <a href="#" class="ver">Ver todos</a>        
                                </div><!-- cierra .tit --> 
                                  
                               <div class="noticiasHome"> 
                                 
                                 <!-- NOTICIA -->
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
                                 
                                 <!-- NOTICIA -->
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
                                 
                                 <!-- NOTICIA -->
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
                    </div><!-- end display none --> 
                           
                           <div class="kitdeprensa">
                           		
                                
                                <div class="tit">
                                	<span class="icono"></span>
                                    <?php if(qtrans_getLanguage() == 'es'): ?>
                                    <span>Kit de prensa</span>
                                     <?php else: ?>
                                     <span>Press kit</span>
                                      <?php endif; ?>         
                                </div><!-- cierra .tit --> 
                            
                            <div class="clearfix row-fluid">
                            
                                <div class="span6 logoDescarga">
                                <span class="descarga">
<a href="<?php bloginfo('template_directory'); ?>/descargables/LogoFeria2013.zip"><?php if(qtrans_getLanguage() == 'es'): ?>Descargar logo<?php else: ?>Download logo <?php endif; ?> </a></span>   
                                </div>
                                
                                <div class="span6 logosVarios">
                                <span class="descarga"><a href="<?php bloginfo('template_directory'); ?>/descargables/sellosCRV.zip"><?php if(qtrans_getLanguage() == 'es'): ?>Descargar logos de eventos<?php else: ?>Download event logos<?php endif; ?></a></span> 
                                </div>
                            
                            </div><!-- cierra row -->
                            
                            <div class="clearfix row-fluid">
                            
                               
                                
                                <div class="span6 galeriaFeriaD">
                               <iframe align="center" src="http://www.flickr.com/slideShow/index.gne?group_id=2056371@N23" width="307" height="182" frameBorder="0" scrolling="no"></iframe>
                                <span class="descarga"><a href="http://www.flickr.com/groups/2056371@N23/" target="_blank"><?php if(qtrans_getLanguage() == 'es'): ?>Ver galería: Feria de las flores 2011<?php else: ?>Gallery: Feria de las Flores 2011<?php endif; ?></a></span>
                                </div>
                                
                                <div class="span6 galeriaFeriaD">
                              <iframe align="center" src="http://www.flickr.com/slideShow/index.gne?set_id=72157630977675876" width="307" height="182" frameBorder="0" scrolling="no"></iframe><br />
                                <span class="descarga"><a href="http://www.flickr.com/groups/2056371@N23/" target="_blank"><?php if(qtrans_getLanguage() == 'es'): ?>Ver galería: Desfile de silleteritos 2012<?php else: ?>Gallery: Desfile de silleteritos 2012<?php endif; ?></a></span>
                                </div>
                            
                            </div><!-- cierra row -->
                            
                              <div class="clearfix row-fluid">
                            
                               
                               
                                 
                                <div class="span6 galeriaFeriaD">
                              <iframe align="center" src="http://www.flickr.com/slideShow/index.gne?" width="307" height="182" frameBorder="0" scrolling="no"></iframe>
                                <span class="descarga"><a href="http://www.flickr.com/groups/2056371@N23/" target="_blank"><?php if(qtrans_getLanguage() == 'es'): ?>Ver galería: Imágenes de Medellín<?php else: ?>Gallery: Pictures of Medellín<?php endif; ?></a></span>
                                </div>
                                
                                
                                
                                <div class="span6 logoDescarga">
                                <span class="descarga"><a href="<?php bloginfo('template_directory'); ?>/descargables/Programacion.pdf"><?php if(qtrans_getLanguage() == 'es'): ?>Descargar programación<?php else: ?>Download Schedule<?php endif; ?></a></span>
                                </div>
                            
                            </div><!-- cierra row -->
                            
                             <div class="clearfix row-fluid" style="display:none;">
                                 <div class="span6 videoFeria">
                                    <iframe width="307" height="182" src="//www.youtube.com/embed/bQ2KKHzR2DA" frameborder="0" allowfullscreen></iframe>
                                     <span class="descarga"><a href="#">Descargar video</a></span> 
                                    </div>
                            
                            
                                <div class="span6 logoDescarga">
                                <span class="descarga"><a href="#">Descargar cuña</a></span>
                                </div>
                                
                                
                            
                            </div><!-- cierra row -->
                             </div><!-- cierra .kitdeprensa -->
					</div>
                


				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			</div> <!-- end #container -->

<?php get_footer(); ?>