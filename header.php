<?php
/**
 * The header.
 *
 * @package Grapefruit_Stand
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>

<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Inter,Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    #mc-embedded-subscribe, #mce-EMAIL{border-radius:6px !important}
    #mc_embed_signup form{text-align:left}

</style>

</head>

<body <?php body_class( get_theme_mod( 'color_scheme', 'color-scheme-light' )); ?>>
	<div id="site-wrapper">
	<div id="page" class="site container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'grapefruit-stand' ); ?></a>

		<header id="masthead" class="row site-header" role="banner">
			<div class="col-12 top-navigation">
                <?php echo wp_nav_menu(array('menu'=>'top')); ?>
            </div>
			<div class="col-1"></div>
			<div class="col-10">
				<?php if ( is_front_page() ) :
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description">
                            <?php echo substr($description, 0, strpos($description, ".") + 1); /* WPCS: xss ok. */ ?>
                            <span class="highlight"><?php echo substr($description, strpos($description, ".") + 1); /* WPCS: xss ok. */ ?></span>
                        </p>
                    <?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
            <?php if ( is_active_sidebar( 'before-content' ) ) :
                ?><div class="row"><div class="col-12 before-content-widgets">

                <?php
                dynamic_sidebar( 'before-content' );
                ?></div></div><?php
            endif; ?>