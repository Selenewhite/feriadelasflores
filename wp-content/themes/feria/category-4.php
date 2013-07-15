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

  <div class="descargarProgramacion">
  <a href="<?php bloginfo('template_directory'); ?>/descargables/Programacion.pdf" class="btn" target="_blank">Descarga aquí la programación completa en PDF</a>  
  &nbsp;
  &nbsp;       
  </div><!-- cierra .descargarProgramacion --> 
  
  <div style="display:none">
  <!-- CARRUSEL EVENTOS DESTACADOS -->  
  
  <div class="EventosDestacados clearfix">
  <div class="tit">
  <span class="icono"></span>
  <span>Eventos destacados</span>         
  </div><!-- cierra .tit --> 
  
  <div class="galeriaDestacados">
  <div class="well">
  
  <div id="myCarousel" class="carousel slide">
  
  <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Carousel items -->
  <div class="carousel-inner">
  
  <div class="item active">
  <div class="row-fluid">
  <div class="span4">
  <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
  <div class="span4">
  <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
  <div class="span4">
  <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
  </div><!--/row-fluid-->
  </div><!--/item-->
  
  <div class="item">
  <div class="row-fluid">
	<div class="span4">
	<a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
	<div class="span4">
	<a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
	<div class="span4">
	<a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
  </div><!--/row-fluid-->
  </div><!--/item-->
  
  
  </div><!--/carousel-inner-->
  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
  </div><!--/myCarousel-->
  
  </div><!--/well-->
  </div>
  </div><!-- cierra .EventosDestacados --> 
  
  <!-- CIERRA CARRUSEL EVENTOS DESTACADOS -->   
  </div> <!-- CIERRE OCULTAR PROGRAMACIÓN -->
  
  

  
  <div class="clearfix row-fluid">  
  <div class="span6 calendario"></div>	
  </div><!-- cierra .row-fluid --> 
  
  <div>
  <section id="options" class="clearfix">
  
  <ul id="filters" class="option-set clearfix" data-option-key="filter">
  <li class="span3"><a href="#filter" data-option-value="*" class="selected">Todos</a></li>
  <li class="span3"><a href="#filter" data-option-value=".manana">Mañana</a></li>
  <li class="span3"><a href="#filter" data-option-value=".tarde">Tarde</a></li>
  <li class="span3"><a href="#filter" data-option-value=".noche">Noche</a></li>

  </ul>
  
  
  </section> <!-- #options -->
  
  <div id="container" class="clearfix">
  
  <div class="element manana">
  
          <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2>  
          <ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  <div class="element manana">
  
            <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2>  
          <ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  <div class="element tarde">
  
            <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2><ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  <div class="element tarde">
  
           <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2>  
          <ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  <div class="element noche">
  
           <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2><ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  <div class="element noche">
  
           <h2>Festival Internacional Interclubes Ciudad de Medellín 2012.</h2><ul>
          <li><i class="icon-time"></i> <strong> Hora:</strong> 8:00 a.m a 5:00 p.m</li>
          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad                                        Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  
  </div> <!-- #container -->  
  
  </div>

  </div> <!-- end #main -->
  
  <?php get_sidebar(); // sidebar 1 ?>
  
  </div> <!-- end #content -->
  </div> <!-- end #container -->

  <?php get_footer(); ?>