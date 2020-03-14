<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>
			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php if ( 'post' === get_post_type() ) : ?>
						<?php
						endif; ?>
						<?php
						if ( is_single() || is_page()) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

					?>
                        <div class="entry-meta">
						</div><!-- .entry-meta -->

                    </header><!-- .entry-header -->

					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div><!-- .post-thumbnail -->

					<div class="entry-content">
						<?php if ( has_excerpt() ) : ?>
							<p class="intro">
								<?php /* Not using the_excerpt() here because we're also outputting the
								     content and we don't want afterPost hooks firing twice. */ ?>
								<?php echo get_the_excerpt(); ?>
							</p>
						<?php endif;
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'grapefruit-stand' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grapefruit-stand' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
                        <div class="entry-meta">
                            <strong>&bull;<br><br></strong>
                            <div class="tertiary-text" style="font-weight:normal">Originally posted on
                                <?php grapefruit_stand_posted_on(); ?>
                            </div>
                        </div><!-- .entry-meta -->
						<?php grapefruit_stand_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				if ( is_active_sidebar( 'after-entry' ) ) : ?>
					<div class="after-entry-widgets">
						<?php dynamic_sidebar( 'after-entry' ); ?>
					</div>
				<?php
				endif; ?>


                <?php

				//the_post_navigation();

			endwhile; // End of the loop.
			?>
<?php
get_footer();
