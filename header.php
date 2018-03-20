<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">
		<header id="header">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav id="site-navigation" class="links main-navigation" role="navigation">
			<?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'theme_location' => 'primary',
				) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>
			
			<nav class="main">
				<ul>
					<li class="search">
						<a class="fa-search" href="#search">Search</a>
						<form id="search" method="get" action="s">
							<input type="text" name="s" placeholder="Busca" />
						</form>
					</li>
					<li class="menu">
						<a class="fa-bars" href="#menu">Menu</a>
					</li>
				</ul>
			</nav>
		</header>

	<!-- Menu -->
		<section id="menu">

			<!-- Search -->
				<section>
					<form class="search" method="get" action="#">
						<input type="text" name="query" placeholder="Search" />
					</form>
				</section>

			<!-- Links -->
				<section>
					<ul class="links">
						<li>
							<a href="#">
								<h3>Lorem ipsum</h3>
								<p>Feugiat tempus veroeros dolor</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>Dolor sit amet</h3>
								<p>Sed vitae justo condimentum</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>Feugiat veroeros</h3>
								<p>Phasellus sed ultricies mi congue</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>Etiam sed consequat</h3>
								<p>Porta lectus amet ultricies</p>
							</a>
						</li>
					</ul>
				</section>

			<!-- Actions -->
				<section>
					<ul class="actions vertical">
						<li><a href="#" class="button big fit">Log In</a></li>
					</ul>
				</section>

		</section>

	<!-- .sidebar -->
	
	<div id="main" class="site-content">
