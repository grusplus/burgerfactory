<?php
/**
 * The sidebar contains the primary menu and the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Burger_Factory
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<div style="box-shadow: 5px 4px 18px rgba(0, 0,0,0.1);position:relative;background-color:#FED852;color:#444;padding:18px 18px 18px 18px;margin-right:10px;border-radius:8px">
<img style="width:48px;position:absolute;top:-18px;right:-18px;" src="https://d33wubrfki0l68.cloudfront.net/6980792beb6c6649e56b220b4e833e7b71549529/e1878/img/logo.png">
<p style="margin-top:0;margin-bottom:0;font-size:14px;">
This obnoxious yellow rectangle is all up in your bid'ness to
tell you about my latest project, <strong>Grapefruit, an app for managing your mental health.</strong>
<br><br>
Coming soon. Poke the eyes for details!
<br><br>
<button style="width:100%" onclick="window.open(
  'https://haveagrapefruit.com',
  '_blank' // <- This is what makes it open in a new window.
);">👀</button>
</p>
</div>