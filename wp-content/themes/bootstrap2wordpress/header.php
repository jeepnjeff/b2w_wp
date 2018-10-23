<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap Link=================================== -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome Icon ==================================== -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

<!--  Google Fonts======================================== -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

<!-- TypeKit Fonts============================================== -->
<link rel="stylesheet" href="https://use.typekit.net/ift6kax.css">



	<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>
  <!-- Header =================================== -->
	<header class="site-header" role="banner">

<!-- navbar wrapper================-->
<div class="navbar-wrapper">
		<!-- NavBar======================== -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" date-target=".navbar-collapse">
										<span class="sr-only">Toggle Navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
						</div>
						<!--NAVBAR HEADER-->

						<?php
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'container'     	=>  'nav',
							'container_class' =>  'navbar-collapse collapse',
							'menu_class'			=>  'nav navbar-nav navbar-right'
						))	
						?>
						</div>
				</div>
				<!--container-->
		</div>
		<!--END NAVBAR ================-->
</div>
<!--END NAVBAR WRAPPER-->
</header>

	<div id="content" class="site-content">
