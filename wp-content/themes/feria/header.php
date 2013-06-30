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

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
        	<div id="cabezoteAlcaldia"  class="clearfix">
                <div class="corazon"></div>
                <div class="logosAlcaldia"></div>
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
                                
                                <ul class="menu menuholder hidden-phone"> 
                                    <li class="menu_inicio"><a href="#" title="Inicio" class="active">Inicio</a></li>
                                    <li class="menu_programacion"><a href="#" title="Programación">Programación</a></li>
                                    <li class="menu_turistica"><a href="#" title="Info Turística">Info Turística</a></li>
                                    <li class="menu_historia"><a href="#" title="Historia">Historia</a></li>
                                    <li class="menu_saladeprensa"><a href="#" title="Sala de Prensa">Sala de Prensa</a></li>
                                    <li class="menu_contactenos"><a href="#" title="Contáctenos">Contáctenos</a></li>
                                    <li class="menu_envivo"><a href="#" title="En Vivo">En Vivo</a></li>
                                </ul>
                              
                                                                
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
                                
                                
                                	<div class="span3 idioma">
                                    	<span class="On">Español</span>
                                    	<span class="Off">English</span>   
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
