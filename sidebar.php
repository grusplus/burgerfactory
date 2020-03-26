<?php
/**
 * The sidebar contains the primary menu and the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grapefruit_Stand
 */

?>


<div class="containerr">
    <div class="sidebar row">
        <div class="col-12">
            <aside id="secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside><!-- #secondary -->
        </div>
    </div>
</div>