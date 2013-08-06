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

  <div id="content" class="clearfix row-fluid">

    <div id="main" class="span12 clearfix" role="main">

      <div class="slider visible-desktop">
        <?php echo get_new_royalslider(1); ?>
      </div><!-- cierra .slider -->
      
      
   

        <div class="hoy">
        <!-- Titulos -->
        <div class="clearfix row-fluid">
          <div class="titHoy span8">
            <span class="icono hidden-phone"></span>
            <span>Hoy en la feria</span>         
          </div><!-- cierra .titHoy -->  
          
          <div class="span4 titManana hidden-phone">
              <span>No te pierdas mañana...</span>  
            </div><!-- cierra .titManana --> 

         </div>
         
           
        <div class="clearfix row-fluid">
  
          <div class="span8 galeriaHoy">
          
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
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">XiX encuentro internacional Matancero</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">Temporada Baile Paisa</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">Orquídeas, Pájaros y Flores Feria de Artesanías, XX exposición Feria de las Flores (coctel de inauguración)</div>
              </div>                            
            </li>            
          </ul>
        </div>
        <div class="item">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">Tertulias en Torno a la Arriería y Patrimonio de San Cristó- bal</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">Semana Cultural Silletera</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="" class="img-rounded">
                <div class="textoGaleria">Primer Festival de la Trova Silletero de oro</div>
              </div>                            
            </li>            
          </ul>
        </div> 
        <div class="item">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="">
                <div class="textoGaleria">Festival Xiii Mamimuti</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="">
                <div class="textoGaleria">XXv Concurso de Fotografría de Fauna</div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://lorempixel.com/250/250" alt="">
                <div class="textoGaleria">Muestra de Flores, Folclor, Artesanías y Sabores de Piedras Blancas</div>
              </div>                            
            </li>            
          </ul>
        </div>               
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <!-- CIERRA CARRUSEL EVENTOS DESTACADOS -->          

          </div><!-- cierra .galeriaHoy -->   

          <div class="span4 galeriaManana">
                      </div><!-- cierra .galeriaHoy -->   
        </div>
      </div><!-- cierra .hoy -->

      <div class="row-fluid">
        <div class="span8">

          <div id="novedades">  
           <?php if(qtrans_getLanguage() == 'es'): ?>
           <div class="tit">
              <span class="icono hidden-phone"></span>
              <span>Novedades</span>         
            </div><!-- cierra .tit --> 
            <?php else: ?>
            <div class="tit">
              <span class="icono hidden-phone"></span>
              <span>For tourists</span>         
            </div><!-- cierra .tit --> 
           <?php endif; ?> 
            
            <?php if(qtrans_getLanguage() == 'es'): ?>
            <div class="noticiasHome" id="feed"> 
              <!-- FEEDS -->
              <center id="loading"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif"/><br/><small>Cargando...</small></center>
            </div>       
            <?php else: ?>
                    <?php query_posts('cat=1&tag=turismo'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <section class="post_content">
                            <?php the_post_thumbnail( 'historia' ); ?>
                            <h2><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
          
            </section> <!-- End article section -->
            
            
          </article> <!-- end article -->
          
          <?php endwhile; ?>
          <?php endif; ?>

            <?php endif; ?>                            
          </div><!-- cierra .novedades --> 
        </div>
<!-- SIDEBAR HOME -->
<?php get_sidebar(); // sidebar 2 ?>

<!-- CIERRA SIDEBAR HOME --> 
        </div><!-- cierra row -->  

<div style="display:none" class="clearfix row-fluid afterSidebar">
  <div class="span7">

   <!-- ARTISTAS DE LA FERIA --> 	
   <ul class="artistas nav-tabs">
     <li><h2>Artistas de la feria</h2></li>

     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Música<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">Tropical</a></li>
        <li><a href="#">Popular Tradicional</a></li>
        <li><a href="#">Popular Urbana</a></li>
        <li><a href="#">Clásica</a></li>
        <li><a href="#">Folclor</a></li>
      </ul>
    </li>

    <li><a href="#">Danza</a></li>
    <li><a href="#">Teatro</a></li>

    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Otras Artes<b class="caret"></b></a>
      <ul class="dropdown-menu">
       <li> <a href="#">Magia</a></li>
       <li> <a href="#">Humor</a></li>
       <li> <a href="#">Cuentería</a></li>
     </ul>  
   </li>
 </ul>

 <div class="galeriaArtistas">
   <ul>
    <li class="flechaIzq"><a href="#">Atrás</a></li> 
    <li><img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="160" height="133" /></li>
    <li><img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="160" height="133" /></li>
    <li><img src="<?php bloginfo('template_directory'); ?>/images/silleteros.jpg" width="160" height="133" /></li>
    <li class="flechaDer"><a href="#">Siguiente</a></li> 
  </ul>           
</div>

<!-- CIERRA ARTISTAS DE LA FERIA --> 	
</div>

<div class="span5">
 <div class="galeriaFeria">
 </div>
</div>

</div>  
</div>                          

<?php get_footer(); ?>