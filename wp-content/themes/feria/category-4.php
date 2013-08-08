<?php get_header(); ?>

<div id="content" class="clearfix row-fluid">
  <div id="main" class="span8 clearfix" role="main">
    <div class="page-header">
      <?php if (is_category()) { ?>
      <?php if(qtrans_getLanguage() == 'es'): ?>
      <ul class="breadcrumb">
        <li class="home"><a href="<?php echo home_url(); ?>">Home</a></li>
        <li class="active">
          <?php single_cat_title(); ?>
        </li>
      </ul>
      <?php else: ?>
      <ul class="breadcrumb">
        <li class="home"><a href="<?php echo home_url(); ?>/en/">Home</a></li>
        <li class="active">
          <?php single_cat_title(); ?>
        </li>
      </ul>
      <?php endif; ?>
      <?php } ?>
    </div>
    <div class="descargarProgramacion"> 
    <a href="<?php bloginfo('template_directory'); ?>/descargables/Programacion.pdf" class="btn" target="_blank">
    <?php if(qtrans_getLanguage() == 'es'): ?>Descarga aquí la programación completa en PDF
    <?php else: ?>Download PDF schedule here
    <?php endif; ?>
    
    </a> &nbsp; &nbsp; 
    </div>
    <!-- cierra .descargarProgramacion --> 
    
             <!-- CARRUSEL EVENTOS DESTACADOS -->
    <div id="myCarousel" class="carousel slide span12">
      <!-- Indicators -->
     <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>-->
      <div class="carousel-inner">
        <div class="item active">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/silleteros.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">56° Desfile de silleteros, un homenaje a los 200 años de la cultura paisa</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/BannerParqueCulturaNocturno.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">Parque Cultural Nocturno</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/trova.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">Festival Nacional de la Trova “Ciudad de Medellín”</div>
              </div>                            
            </li>            
          </ul>
        </div>
        <div class="item">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/FestivalZonaquesuena.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">Zona que Suena</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/GigantesWEB-2.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">Gigantes de Flores: Trompo – Pirinola – Catapiz y Parqués</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://www.feriadelasfloresmedellin.gov.co/wp-content/uploads/2013/07/autos.jpg" alt="" class="img-rounded">
                <div class="textoGaleria">18° Desfile de Autos Clásicos y Antiguos</div>
              </div>                            
            </li>            
          </ul>
        </div> 
        <div class="item">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://localhost/feriadelasflores/wp-content/themes/feria/images/genericaFeed.jpg" alt="">
                <div class="textoGaleria">Orquídeas, Pájaros y Flores Feria de Artesanías, XX exposición Feria de las Flores</div>
              </div>
            </li>
            <li class="span4">

            </li>
            <li class="span4">
                            
            </li>            
          </ul>
        </div>               
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <!-- CIERRA CARRUSEL EVENTOS DESTACADOS -->
    
    <div class="clearfix row-fluid">
      <div class="span6 calendario"></div>
    </div>
    <!-- cierra .row-fluid -->
    
    <div>
      <section id="options" class="clearfix">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <li class="span3"><a href="#filter" data-option-value="*" class="selected">Todos</a></li>
          <li class="span3"><a href="#filter" data-option-value=".manana">Mañana</a></li>
          <li class="span3"><a href="#filter" data-option-value=".tarde">Tarde</a></li>
          <li class="span3"><a href="#filter" data-option-value=".noche">Noche</a></li>
        </ul>
      </section>
      <!-- #options -->
      <center id="loading" style="display:none;">
        <img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif"/>
      </center>
      <div id="container" class="clearfix">
        <?php
  $fechaHoy = date("j/n/Y");
  
  $myQuery = new WP_Query(array(
       'cat' => 10,
        'posts_per_page' => -1
  ));
  // The Loop
  if ( $myQuery->have_posts() ):
  while ( $myQuery->have_posts() ) : $myQuery->the_post();
  $fechaSeleccionada = str_replace('/', '-', $fechaHoy);
  $fechaSeleccionada = strtotime($fechaSeleccionada);
  $fechaInicio = str_replace('/', '-', get_post_meta($post->ID,'fecha_inicio',true));
  $fechaInicio = strtotime($fechaInicio);
  $fechaFin = str_replace('/', '-', get_post_meta($post->ID,'fecha_fin',true));
  $fechaFin = strtotime($fechaFin);

  $horaInicio = get_post_meta($post->ID,'hora_inicio',true);
  $horaFin = get_post_meta($post->ID,'hora_fin',true);
  $jornada = get_post_meta($post->ID,'jornada',true);
  $lugar = get_post_meta($post->ID,'lugar',true);
  $telefono = get_post_meta($post->ID,'telefono',true);

  $jornadas = explode(',', $jornada);
  $humanHoraInicio = date("g:i a", strtotime($horaInicio));
  if(trim($horaFin) === ""){
    $tieneHoraFin = false;
  }
  else{
    $tieneHoraFin = true;
    $humanHoraFin = date("g:i a", strtotime($horaFin));
  }

  $class = "";

  foreach ($jornadas as $j) {
    $class .= trim($j) . " ";
  }
  ?>
        <?php if($fechaSeleccionada >= $fechaInicio AND $fechaSeleccionada <= $fechaFin): ?>
        <a href="<?php the_permalink(); ?>">
        <div class="element <?php echo $class ?>">
          <h2>
            <?php the_title(); ?>
          </h2>
          <ul>
            <li><i class="icon-time"></i> <strong> Hora:</strong> <?php echo $humanHoraInicio ?> <?php echo ($tieneHoraFin) ? " a $humanHoraFin" : "" ?></li>
            <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> <?php echo $lugar ?></li>
            <li><i class="icon-star"></i> <strong>Teléfono:</strong> <?php echo $telefono ?></li>
          </ul>
        </div>
        </a>
        <?php endif; ?>
        <?php 
  endwhile;
  endif;

  // Reset Query
  wp_reset_query();
  ?>
      </div>
      <!-- #container --> 
      
    </div>
  </div>
  <!-- end #main -->
  
  <?php get_sidebar(); // sidebar 1 ?>
</div>
<!-- end #content -->
</div>
<!-- end #container -->

<?php get_footer(); ?>
