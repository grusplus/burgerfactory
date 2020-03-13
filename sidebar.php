<?php
/**
 * The sidebar contains the primary menu and the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grapefruit_Stand
 */

?>


<div class="sidebar row">
    <div class="col-6">
        <aside id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside><!-- #secondary -->
    </div>
    <div class="col-6" style="text-align:left;">
        <p class="tertiary-text"><?php echo get_theme_mod( 'footer_copy' ); ?></p>
    </div><!-- .site-info -->
</div>