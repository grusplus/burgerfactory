<?php
/**
 * The template for displaying blog and archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<div class="col-12 archive-entry-list">

        <?php if ( is_front_page() && is_home()) : ?>
            <?php the_content(esc_html__( 'More', 'grapefruit-stand' )); ?>
		<?php elseif ( have_posts() ) : ?>

			<?php if ( is_search() ) : ?>
				<header class="page-header">
					<h1 class="front-page-category">
						<?php printf( esc_html__( 'Search Results for: %s', 'grapefruit-stand' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				</header>
			<?php elseif ( is_archive() ): ?>
				<header class="page-header">
				<?php
				the_archive_title( '<h1 class="front-page-category">Hey Now', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				</header><!-- .page-header -->
			<?php else: ?>
				<h4>Articles From 2016-2019</h4>
                <p class="secondary-text">
                    From 2016 to 2019 I wrote a weekly-ish blog on a little bit of everything. The most common topics
                    were mental health, personal improvement and finance. There was also a bit of whaaaaaaat mixed in. These
                    are all the articles.
                </p>
			<?php endif; ?>

			<div class="entry-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<p>
							<?php
							$title = get_the_title();
							if( !empty( $title ) ) :
								the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
							else:
								echo sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) . "Untitled" . '</a>';
							endif;
							?>
                                <?php if ( 'post' === get_post_type() ) : ?>
                                <span class="tertiary-text" style="margin-left:10px;">
                                    <?php grapefruit_stand_posted_on(); ?>
                                    &bull; <?php grapefruit_stand_entry_category(); ?>
                                </span>
							</p>
							<?php endif; ?>
						</header>
					</article>
				<?php endwhile; ?>
			</div>

			<?php

			the_posts_navigation();

		else : ?>

			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'grapefruit-stand' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'grapefruit-stand' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'grapefruit-stand' ); ?></p>
						<?php
							get_search_form();

					else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'grapefruit-stand' ); ?></p>
						<?php
							get_search_form();

					endif; ?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->
		<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
