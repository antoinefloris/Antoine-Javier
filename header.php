<!doctype html>
<html lang="<?php language_attributes(); ?>"
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('title'); ?></title>
    <!--| CSS | -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /><!-- Appel de la feuille de stlyle générique -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>" type="text/css"><!-- réinitialisation des valeurs à 0 sur des propriétés CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style/jquery.bxslider.css" /><!-- Appel du carousel clients / projets -->
    <!--| JS | -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.custom.js"></script><!-- Bibliothèque JavaScript conçue pour détecter des fonctionnalités spécifiques de HTML et CSS dans les navigateurs -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script><!-- Librairie JQUERY -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.min.js"></script><!-- Appel JS du carousel -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js"></script><!-- Appel JS du Portfolio -->
	<!-- Appel Google font Raleway -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,800' rel='stylesheet' type='text/css'>
	<!-- Autorise l'usage des nouveaux éléments HTML5 sur IE <9 -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <meta name="viewport" content="width=device-width" /><!-- Optimisation en largeur pour correspondre à la largeur de l'écran du périphérique -->
</head>


<body>

<div id="conteneur">
	<header id="header-accueil">
    	<div id="header-top">
			<div id="recherche">
           	<div id="wrap">
				<!-- <form action="" autocomplete="on">
                 <input id="search" name="search" type="text" placeholder="Vous recherchez ?"><input id="search_submit" value="Rechercher" type="submit">
                  </form>-->
           	</div>
           </div>

		</div>


		<div id="logo"><a href="#">THE<b>ATRE</b>.</a></div>

       <nav id="menu">
       		<ul>
           	    <?php wp_nav_menu(); ?>
           </ul>
       </nav>

       <div class="clearboth"></div>

