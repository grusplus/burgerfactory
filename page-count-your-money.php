<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>

	<div id="primary" class="content-area content">
		<main id="main" class="site-main" role="main">
            <div class="row banner-row">
                <div class="col-12">
                    <div style="margin-bottom:24px;"><img alt="grapefruit mental health app logo" src="https://haveagrapefruit.s3.amazonaws.com/img-cym/icon_128.png" width="64"></div>
                    <h1 class="lede" style="margin:0 auto 40px;max-width:500px;">Got Some Money? You Should Count It.</h1>
                    <div class="feature-image">
                        <img style="width:660px;position:relative;left:0px;" alt="grapefruit mental health app banner" src="https://haveagrapefruit.s3.amazonaws.com/img-cym/banner.jpg">
                    </div>

                    <h4 class="coming-soon" style="margin:60px auto 40px;max-width:500px;">Coming soon for macOS and Windows</h4>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 app-description">
                        <p>Count Your Money is an app to add a little financial responsibility to your life, but not too much. Just want an easy way to keep a high-level view of your money? No budgets, no spreadsheets. Just count your money. It’s called Count Your Money and it's a great way to start your financial journey.</p>
                    </div>
                </div>
            </div>

            <hr class="features-divider">

            <div class="container features">

                <div class="row feature">
                    <div class="col-6 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-record.jpg">
                    </div>
                    <div class="col-6 overlap-caption">
                        <p class="secondary-text">
                            The only thing you need to do is the simplest part -- counting your money. You write in your balances of all your accounts, and that's it. Then you came back later and do it again. You can do it monthly, weekly, or erratically. The app will smartly adapt to you so you can be busy or forgetful and come back to it whenever you have time.
                        </p>
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-5 overlap-caption">
                        <p class="secondary-text">
                            The <strong>Present</strong> view shows you were you are now, your progress in the last year, and where you might expect to be one year from now.
                        </p>
                    </div>
                    <div class="col-7 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-present.jpg">
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-8 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-future-2.jpg">
                    </div>
                    <div class="col-4 overlap-caption">
                        <p class="secondary-text">
                            With the <strong>Future</strong> view, you can set retirement goals and see how your progress lines up.
                        </p>
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-6 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-past.jpg">
                    </div>
                    <div class="col-6 overlap-caption">
                        <p class="secondary-text">
                            The <strong>Past</strong> view keeps a detailed log of all your balances, if you want a spreadsheet-like view. You can also export to (and import from) CSV files for use with your other software, or if you want to move up to a more complex app.
                        </p>
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row" style="margin-bottom:120px;">
                    <p class="primary-text">Coming soon. Sign up to the email list for updates on this and other projects.</p>
                    <div class="subscribe"><!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form id="mc-embedded-subscribe-form" class="validate" action="https://haveagrapefruit.us2.list-manage.com/subscribe/post?u=ddcd6401ab841f18f21d67bc8&amp;id=51d750bc51" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
                            <div id="mc_embed_signup_scroll" class="row">
                                <div class="col-9" style="margin-left:0px">
                                    <input id="mce-EMAIL" class="email" name="EMAIL" required="" type="email" value="" placeholder="email address" /><br /><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                </div>
                                <div class="col-3">
                                    <input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" />
                                </div>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input tabindex="-1" name="b_ddcd6401ab841f18f21d67bc8_51d750bc51" type="text" value="" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>

            </div>
            <?php get_sidebar(); ?>
        </main><!-- #main -->
	</div><!-- #primary -->
    <?php get_footer(); ?>
