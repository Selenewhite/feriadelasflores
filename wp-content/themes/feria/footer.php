 <div class="clearfix row-fluid">
            <div class="span12 Decoration">
                        <?php if(qtrans_getLanguage() == 'es'): ?>
                       <ul class="menuInferior hidden-phone"> 
                           <li class="preguntasFrecuentes"><a href="<?php echo home_url(); ?>/preguntas-frecuentes/" title="Preguntas Frecuentes">Preguntas Frecuentes</a></li>
                           <li class="directorioArtistas"><a href="http://www.feriadelasfloresmedellin.gov.co/directorio/" title="Directorio de artistas" target="_blank">Directorio Artistas</a></li>           
                        </ul>
                         <?php else: ?>
                          <ul class="menuInferior hidden-phone"> 
                           <li class="preguntasFrecuentesEn"><a href="<?php echo home_url(); ?>/en/preguntas-frecuentes/" title="FAQs">FAQs</a></li>
                           <li class="directorioArtistasEn"><a href="http://www.feriadelasfloresmedellin.gov.co/directorio/" title="Artistic Directory" target="_blank">Artistic Directory</a></li>           
                        </ul>
                        <?php endif; ?>    
                              
                
            </div> 
         </div>         

		</div> <!-- end #main -->
</div> <!-- end #content -->
</div> <!-- end #container -->

			<footer role="contentinfo" >

				<div id="inner-footer">
		       
                <ul>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/buro.jpg" width="117" height="79" /> </li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/medellindigital.jpg" width="117" height="79" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/telemedellin.jpg" width="124" height="79" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/alcaldia.jpg" width="124" height="79" /></li>
                </ul>
		
				</div> <!-- end #inner-footer -->

				
			</footer> <!-- end footer -->
		
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>