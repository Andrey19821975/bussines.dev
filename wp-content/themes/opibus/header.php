<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Opibus</title>
	<meta name="Description" content="">
	<meta name="Keywords" content="">

	<meta name="twitter:card" content="summary">  <!--type of window-->
	<meta name="twitter:site" content="Site">
	<meta name="twitter:title" content="Opibus">
	<meta name="twitter:description" content="Description of site">
	<meta name="twitter:creator" content="автор">
	<meta name="twitter:image:src" content="img/mt-1069-home-header-bg.jpg">
	<meta name="twitter:domain" content="madfrog.biz/opibus">

	<meta property="og:locate" content="en_En">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Opibus">
	<meta property="og:description" content="Description of site">
	<meta property="og:url" content="madfrog.biz/opibus">
	<meta property="og:image" content="img/mt-1069-home-header-bg.jpg">
	<meta property="og:site_name" content="Site Name">
	<link rel="manifest" href="img/manifest.json">
	<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="img/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/mstile-144x144.png">
	<meta name="msapplication-config" content="img/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php if( get_field('favicon-16x16') ):?>
	<link rel="icon" type="image/png" href="<?php the_field('favicon-16x16')?>" sizes="16x16">											
	<?php endif; ?>	
	<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">

	<link rel="apple-touch-icon" href="img/favicon-120x120.png">
	<link rel="apple-touch-icon" href="img/favicon-180x180.png" sizes="180x180">
	<link rel="apple-touch-icon" href="img/favicon-152x152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="img/favicon-167x167.png" sizes="167x167">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:400,700" rel="stylesheet">

	<?php wp_head(); ?>
	<style>
	#toTop {
		background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/buttonup.png'?>);
	}
	@font-face {
		font-family:'Glyphicons Halflings';
		src:url(<?php echo get_stylesheet_directory_uri() . '/libs/fonts/glyphicons-halflings-regular.eot'?>);
		src:url(<?php echo get_stylesheet_directory_uri() . '/libs/fonts/glyphicons-halflings-regular.eot?#iefix'?>) format('embedded-opentype'),
		url(<?php echo get_stylesheet_directory_uri() . '/libs/fonts/glyphicons-halflings-regular.woff2'?>) format('woff2'),
		url(<?php echo get_stylesheet_directory_uri() . '/libs/fonts/glyphicons-halflings-regular.woff' ?>) format('woff'),
		url(<?php echo get_stylesheet_directory_uri() . '/libs/fonts/glyphicons-halflings-regular.ttf' ?>) format('truetype'),
		url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}

		body:after {
			content:url(<?php echo get_stylesheet_directory_uri() . '/img/close.png'?>) url(<?php echo get_stylesheet_directory_uri() . '/img/loading.gif'?>) url(<?php echo get_stylesheet_directory_uri() . '/img/prev.png'?>) url(<?php echo get_stylesheet_directory_uri() . '/img/next.png'?>);display:none}
			.lb-data .lb-close {
				background:url(<?php echo get_stylesheet_directory_uri() . '/img/close.png'?>) top right no-repeat;
			}	
			.lb-nav a.lb-next {
				background:url(<?php echo get_stylesheet_directory_uri() . '/img/next.png'?>) right 48% no-repeat
			}
			.lb-nav a.lb-prev {
				background:url(<?php echo get_stylesheet_directory_uri() . '/img/prev.png'?>) left 48% no-repeat;
			}		
			.lb-cancel {
				background:url(<?php echo get_stylesheet_directory_uri() .'/img/loading.gif'?>) no-repeat
			}
	</style>
</head>