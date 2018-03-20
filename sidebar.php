<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $redux_demo;
#if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : 
/*
<div id="secondary" class="secondary">

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'theme_location' => 'primary',
				) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>

	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav id="social-navigation" class="social-navigation" role="navigation">
			<?php
				// Social links navigation menu.
				wp_nav_menu( array(
					'theme_location' => 'social',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
</div><!-- .secondary -->
*/
?>
	<section id="sidebar">
		
		<!-- Intro -->
			<section id="intro">
				<?php $logo = $redux_demo['logo']; ?>
					<a href="#" class="logo"><img src="<?php echo $logo['url'] ?>" alt="" /></a>
				<header>
					<h2><?php bloginfo('name' ); ?></h2>
					<p><?php bloginfo('description' ); ?></p>
				</header>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<div id="widget-area" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>
			</section>

		<!-- Mini Posts -->
			<section>
				<div class="mini-posts">
				<?php 
					$args = array(
						'posts_per_page' => 4
						);
					$query = new WP_Query($args); 
				?>
				<?php if($query->have_posts()) : ?>
					<?php while($query->have_posts()) : $query->the_post(); ?>
						<article class="mini-post">
							<header>
								<h3><?php the_title() ?></h3>
								<time class="published" datetime="2015-10-20">October 20, 2015</time>
							</header>
							<a href="<?php the_permalink(); ?>" class="image">
								<?php the_post_thumbnail('sidebar'); ?>
							</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
					<!-- <article class="mini-post">
						<header>
							<h3><a href="#">Vitae sed condimentum</a></h3>
							<time class="published" datetime="2015-10-20">October 20, 2015</time>
							<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
						</header>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
					</article> -->
				</div>
			</section>

		<!-- Posts List 
			<section>
				<ul class="posts">
					<li>
						<article>
							<header>
								<h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
								<time class="published" datetime="2015-10-20">October 20, 2015</time>
							</header>
							<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						</article>
					</li>
					<li>
						<article>
							<header>
								<h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
								<time class="published" datetime="2015-10-15">October 15, 2015</time>
							</header>
							<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						</article>
					</li>
					<li>
						<article>
							<header>
								<h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
								<time class="published" datetime="2015-10-10">October 10, 2015</time>
							</header>
							<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
						</article>
					</li>
					<li>
						<article>
							<header>
								<h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
								<time class="published" datetime="2015-10-08">October 8, 2015</time>
							</header>
							<a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
						</article>
					</li>
					<li>
						<article>
							<header>
								<h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
								<time class="published" datetime="2015-10-06">October 7, 2015</time>
							</header>
							<a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
						</article>
					</li>
				</ul>
			</section>-->

		<!-- About -->
			<section class="blurb">

				<!-- <h2>About</h2>
				<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
				<ul class="actions">
					<li><a href="#" class="button">Learn More</a></li>
				</ul> -->
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a target="_blank" href="https://twitter.com/durvalrafael" class="fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a target="_blank" href="https://facebook.com/durvalrafael" class="fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a target="_blank" href="https://instagram.com/durvalrafael" class="fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a target="_blank" href="https://www.durvalrafael.com.br/feed" class="fa-rss"><span class="label">RSS</span></a></li>
					<li><a target="_blank" href="mailto: duurval@gmail.com" class="fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<p class="copyright">Inspiration: <a href="http://html5up.net">HTML5 UP</a>.</p>
			</section>
	</section>


<?php #endif; ?>
