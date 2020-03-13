<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="row">
                <div class="col-3">
                &nbsp;
                </div>
                <div class="col-6">
                    <?php
                    while ( have_posts() ) : the_post();
                    ?>

                        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div><!-- .post-thumbnail -->

                            <?php if ( !is_front_page() ) : ?>
                                <header class="entry-header">
                                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                </header><!-- .entry-header -->
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php
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
                                <?php grapefruit_stand_entry_footer(); ?>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        if ( is_active_sidebar( 'after-page' ) ) :
                            ?><div class="after-entry-widgets"><?php
                            dynamic_sidebar( 'after-page' );
                            ?></div><?php
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
		</main><!-- #main -->


	</div><!-- #primary -->
    <?php get_footer(); ?>
