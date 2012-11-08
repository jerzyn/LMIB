<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link href="<?php echo get_template_directory_uri(); ?>/print.css" media="print" rel="stylesheet" type="text/css" />
		<!--[if IE]>
		 <link href="<?php echo get_template_directory_uri(); ?>/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->
		<link href="<?php echo get_template_directory_uri(); ?>/pie.css" rel="stylesheet" type="text/css" />
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	<body <?php body_class(); ?>>
		<div id="wrap">
			<nav id="top-main" role="navigation">
				<div class="wrapper">
					<? //php bones_main_nav(); ?>
					<ul>
						<li><a href="#">About Us</a><span> / </span></li>
						<li><a href="#">Host Cities</a><span> / </span></li>
						<li><a href="#">Copa</a><span> / </span></li>
						<li><a href="#">Transport</a><span> / </span></li>
						<li><a href="#">Language</a><span> / </span></li>
						<li><a href="#">Forum</a></li>
					</ul>
				</div>
			</nav>
			<div class="wrapper">
				<section id="main">
					<div id="logo">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/LMIB_logo.png"></a>
					</div>
					<div id="counter"></div>
					<form id="search">
						<input type="text" placeholder="search" />
						<div>
							<input type="submit" value="Search">
						</div>					
					</form>
					<div id="languages">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/LMIB_languages_PORT.png" alt="Portuguese"/></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/LMIB_languages_SPAIN.png" alt="Espanol Castellano"/></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/LMIB_languages_ENG.png" alt="English"/></a>
					</div>
				</section>
				<nav id="cities">
					<ul>
						<li><a href="#">Cuiaba</a><span> / </span></li>
						<li><a href="#">Porto Alegre</a><span> / </span></li>
						<li><a href="#">Salvador</a><span> / </span></li>
						<li><a href="#">Curitiba</a><span> / </span></li>
						<li><a href="#">Recife</a><span> / </span></li>
						<li><a href="#">Sao Paulo</a><span> / </span></li>
						<li><a href="#">Natal</a><span> / </span></li>
						<li><a href="#">Rio de Janeiro</a><span> / </span></li>
						<li><a href="#">Fortaleza</a><span> / </span></li>
						<li><a href="#">Belo Horizonte</a><span> / </span></li>
						<li><a href="#">Manaus</a><span> / </span></li>
						<li><a href="#">Brasilia</a></li>
					</ul>
				</nav>