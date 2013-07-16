<?php
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

// The Query
/*
$myQuery = new WP_Query(array(
     'meta_key' => 'fecha_inicio', 
     'meta_value' => $_POST['fecha']
));*/
$myQuery = new WP_Query(array(
     'cat' => 10
));
// The Loop
if ( $myQuery->have_posts() ):
while ( $myQuery->have_posts() ) : $myQuery->the_post();

$fechaSeleccionada = str_replace('/', '-', $_POST['fecha']);
$fechaSeleccionada = strtotime($fechaSeleccionada);
$fechaInicio = str_replace('/', '-', get_post_meta($post->ID,'fecha_inicio',true));
$fechaInicio = strtotime($fechaInicio);
$fechaFin = str_replace('/', '-', get_post_meta($post->ID,'fecha_fin',true));
$fechaFin = strtotime($fechaFin);

$horaInicio = get_post_meta($post->ID,'hora_inicio',true);
$horaFin = get_post_meta($post->ID,'hora_fin',true);
$jornada = get_post_meta($post->ID,'jornada',true);

$jornadas = explode(',', $jornada);
$humanHoraInicio = date("g:i a", strtotime($horaInicio));
$humanHoraFin = date("g:i a", strtotime($horaFin));

$class = "";

foreach ($jornadas as $j) {
	$class .= trim($j) . " ";
}
?>
  <?php if($fechaSeleccionada >= $fechaInicio AND $fechaSeleccionada <= $fechaFin): ?>  
  <div class="element <?php echo $class ?>">
  
          <h2><?php the_title(); ?></h2>  
          <ul>
	          <li><i class="icon-time"></i> <strong> Hora:</strong> <?php echo $humanHoraInicio ?> a <?php echo $humanHoraFin ?></li>
	          <li><i class="icon-map-marker"></i> <strong>Lugar:</strong> Unidad deportiva de Belén, Unidad Deportiva María Luisa Calle, Coliseo Carlos Mauro Hoyos, Pista de Motrocross.</li>
	          <li><i class="icon-star"></i> <strong>Teléfono:</strong> 369 90 00 Ext 182 </li>
          </ul>
  </div>
  <?php endif; ?>
<?php 
endwhile;
endif;

// Reset Query
wp_reset_query();
?>
