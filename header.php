<?php
/**
 * The template for displaying the header
 *
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset');?>" />
		<meta name="description" content="<?php bloginfo('description')?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri());?>/img/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
		<!-- JavaScript -->
		<script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.js"></script>
		<!-- /JavaScript -->
		<!--[if lt IE 8]>
			<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/jshtml5.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/jshtml5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
<body <?php body_class();?>>
<div id="container">
	<header id="header">
		<div id="headerInner">
			<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="bg"/></a>
			<div class="headerText">
				<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('title'); ?></a></h1>
				<p class="caption"><span><?php bloginfo('description');?></span></p>
			</div>
		</div><!-- /#headerInner -->
		<div id="spMainMenu" class="spContent"><span id="spToggle">Menu</span></div>
		<nav id="mainMenu" role="navgation">
			<?php wp_nav_menu();?>
		</nav>
	</header><!-- /#header -->
	<div id="wrap" class="clearfix">