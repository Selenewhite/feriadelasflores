<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/bootstrap-datepicker.js" ></script>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/datepicker.css" type="text/css" />


		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
        
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/libs/jquery-1.7.1.min.js" ></script>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap.calendar.js" ></script>

      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/bootstrap.calendar.css" type="text/css" />

      
	  <script type="text/javascript">
        $(document).ready(function(){

          var evnts = function(){
              return {
                      "event":
                          [
                               {"date":"01/01/2012","title":"1"}
                              ,{"date":"02/02/2012","title":"2"}
                              ,{"date":"03/03/2012","title":"34"}
                              ,{"date":"04/04/2012","title":"123"}
                              ,{"date":"05/05/2012","title":"223"}
                              ,{"date":"06/06/2012","title":"4"}
                              ,{"date":"07/07/2012","title":"5"}
                              ,{"date":"08/08/2012","title":"14"}
                              ,{"date":"09/09/2012","title":"10"}
                              ,{"date":"10/10/2012","title":"10"}
                              ,{"date":"11/11/2012","title":"10"}
                              ,{"date":"12/12/2012","title":"10"}
                          ]
                      }
          };

         $('.calendario' ).Calendar({ 'events': evnts, 'weekStart': 1 })
         .on('changeDay', function(event){ alert(event.day.valueOf() +'-'+ event.month.valueOf() +'-'+ event.year.valueOf() ); })
         .on('onEvent', function(event){ alert(event.day.valueOf() +'-'+ event.month.valueOf() +'-'+ event.year.valueOf() ); })
         .on('onNext', function(event){ alert("Next"); })
         .on('onPrev', function(event){ alert("Prev"); })
         .on('onCurrent', function(event){ alert("Current"); });
      });

    </script>
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
        <div class="blanco">
        	<div id="cabezoteAlcaldia"  class="clearfix">	
                <div class="corazon"></div>
               
                <div class="logosAlcaldia">
                	 <div class="redesAlcaldia">
                	<ul>
                    	<li><a href="http://www.facebook.com/alcaldiademed" target="_blank" title="Facebook"><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.png" /></a></li>
                        <li><a href="http://twitter.com/alcaldiademed" target="_blank" title="Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/Twitter.png" /></a></li>
                        <li><a href="http://www.youtube.com/alcaldiademed" target="_blank" title="Youtube"><img src="<?php bloginfo('template_directory'); ?>/images/Youtube.png" /></a></li>
                        <li><a href="http://www.flickr.com/photos/90282908@N03/" target="_blank" title="Flickr"><img src="<?php bloginfo('template_directory'); ?>/images/Flickr.png" /></a></li>
                        
                </div>
                </div>
                
            </div>
         </div>
            <div class="lineaHeader"></div>
        
			<div id="inner-header" class="clearfix">
				<div class="navbar">
					
						<div class="container-fluid nav-container">
							
                            <nav role="navigation">
								<a id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
                                <div class="brand"></div>
								</a>
                               
                               <div class="row">
                                <?php if(qtrans_getLanguage() == 'es'): ?>
                                <ul class="menu menuholder hidden-phone"> 
                                    <li class="menu_inicio"><a href="#" title="Inicio" class="active">Inicio</a></li>
                                    <li class="menu_programacion"><a href="<?php echo home_url(); ?>/category/programacion/" title="Programación">Programación</a></li>
                                    <li class="menu_turistica"><a href="<?php echo home_url(); ?>/category/infoturistica/" title="Info Turística">Info Turística</a></li>
                                    <li class="menu_historia"><a href="<?php echo home_url(); ?>/category/historia/" title="Historia">Historia</a></li>
                                    <li class="menu_saladeprensa"><a href="<?php echo home_url(); ?>/category/saladeprensa/" title="Sala de Prensa">Sala de Prensa</a></li>
                                    <li class="menu_contactenos"><a href="<?php echo home_url(); ?>/contacto" title="Contáctenos">Contáctenos</a></li>
                                    <li class="menu_envivo"><a href="<?php echo home_url(); ?>/?page_id=6" title="En Vivo">En Vivo</a></li>
                                </ul>
                                <?php else: ?>
                                 <ul class="menuEn menuholderEn hidden-phone"> 
                                    <li class="menu_inicio"><a href="#" title="Inicio" class="active">Inicio</a></li>
                                    <li class="menu_programacion"><a href="<?php echo home_url(); ?>/en/category/programacion/" title="Programación">Programación</a></li>
                                    <li class="menu_turistica"><a href="<?php echo home_url(); ?>/en/category/infoturistica/" title="Info Turística">Info Turística</a></li>
                                    <li class="menu_historia"><a href="<?php echo home_url(); ?>/en/category/historia/" title="Historia">Historia</a></li>
                                    <li class="menu_saladeprensa"><a href="<?php echo home_url(); ?>/en/category/saladeprensa/" title="Sala de Prensa">Sala de Prensa</a></li>
                                    <li class="menu_contactenos"><a href="<?php echo home_url(); ?>/en/contacto" title="Contáctenos">Contáctenos</a></li>
                                    <li class="menu_envivo"><a href="<?php echo home_url(); ?>/en/?page_id=6" title="En Vivo">En Vivo</a></li>
                                </ul>
                                <?php endif; ?>
                                                                
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
                                
                            
                                
                                	<div class="span3 idioma">
                                    
                                    	 <!-- Widget de idioma -->   
											<?php if ( function_exists('dynamic_sidebar')) :
                                                dynamic_sidebar('idioma');
                                            ?>
                                            <?php endif; ?>
                                         <!-- Widget de idioma --> 
                                    	
                                    </div> 
                                    
                                	<div class="span3 offset2 buscador"><?php get_search_form( $echo ); ?></div>
                                </div>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					
				</div> <!-- end .navbar -->
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
