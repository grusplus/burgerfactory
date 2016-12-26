<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Burger_Factory
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title">
		<?php
		if( !empty( get_the_title() ) ) :
			the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
		else:
			echo sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) . "Untitled" . '</a>';
		endif;
		?>
		</h2>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php burger_factory_entry_category(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
