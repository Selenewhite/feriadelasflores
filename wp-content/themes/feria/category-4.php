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
    <div class="descargarProgramacion"> <a href="<?php bloginfo('template_directory'); ?>/descargables/Programacion.pdf" class="btn" target="_blank">Descarga aquí la programación completa en PDF</a> &nbsp;
      &nbsp; </div>
    <!-- cierra .descargarProgramacion --> 
    
    <!-- CARRUSEL EVENTOS DESTACADOS -->
    <div style="display:none">
      <div class="EventosDestacados clearfix">
        <div class="tit"> <span class="icono"></span> <span>Eventos destacados</span> </div>
        <!-- cierra .tit -->
        
        <div class="galeriaDestacados">
          <div class="well">
            <div id="myCarousel" class="carousel slide">
              <?php
    $myQuery = new WP_Query(array(
       'cat' => 10,
        'posts_per_page' => -1
  ));
  $numPost = count($myQuery->posts);
  $p = $numPost / 3;  
  $j = 1;
  ?>
              <ol class="carousel-indicators">
                <?php for($i = 1; $i < $p; $i++): ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i-1 ?>" class="<?php if($j==1): echo "active"; unset($j); endif; ?>"></li>
                <?php endfor; ?>
              </ol>
              
              <!-- Carousel items -->
              <div class="carousel-inner">
                <?php
    $myQuery = new WP_Query(array(
       'cat' => 10,
        'posts_per_page' => -1
  ));
  $numPost = count($myQuery->posts);
  // The Loop
  if ( $myQuery->have_posts() ):
    $i = 1;
    $j = 1;
  while ( $myQuery->have_posts() ) : $myQuery->the_post();
  ?>
                <?php if($i==1): ?>
                <div class="item<?php if($j==1) : echo ' active'; unset($j); else: echo ''; endif; ?>">
                  <div class="row-fluid">
                    <?php endif; ?>
                    <div class="span4"> <a href="<?php the_permalink(); ?>" class="thumbnail">
                      <?php the_post_thumbnail( 'carousel-destacados' ); ?>
                      </a></div>
                    <div>
                      <?php the_title() ?>
                    </div>
                    <?php if($i==3): ?>
                  </div>
                  <!--/row-fluid--> 
                </div>
                <!--/item-->
                <?php endif; ?>
                <?php
  $i++;
  if($i==4):
    $i = 1;
  endif;
  endwhile;
  endif;
  // Reset Query
  wp_reset_query();
  ?>
              </div>
              <!--/carousel-inner--> 
              
            </div>
            <!--/myCarousel--> 
            
          </div>
          <!--/well--> 
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> </div>
      </div>
      <!-- cierra .EventosDestacados --> 
    </div>
    
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
