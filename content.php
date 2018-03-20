<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="title">
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
			?>
			
			
		</div>
		<div class="meta">

			<time class="published" datetime="2015-11-01"><?php the_time('j \d\e F \d\e Y') ?></time>
			<a href="#" class="author">
			<span class="name"><?php the_author(); ?></span>
			<?php if(get_avatar( get_the_author_meta( 'ID' ), 36 ) ) : ?>
				<?php get_avatar( get_the_author_meta( 'ID' ), 36 ) ?>

				<?php else: ?>
					
			<?php endif; ?>
			<?php  ?>
			</a>
			<!-- <img src="images/avatar.jpg" alt="" /> -->
		</div>
	</header>
	<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a> -->
	<div class="post-content">
		<?php the_post_thumbnail('post');?>
		<?php the_content(
			'<footer class="meta"><span class="button big">Continue Reading', '</span></footer>' ); ?>
	</div>
	<footer class="meta">
		<ul class="stats">
			<?php twentyfifteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<li class="edit-link icon fa-edit">', '</li>' ); ?>
		</ul>
	</footer>
	<?php 
		if(is_single()) : 
			get_template_part( 'author-bio' );
		endif;
	?>
</article>