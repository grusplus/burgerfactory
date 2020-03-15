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
                        <p>Grapefruit is a privacy-first app for tracking your moods, keeping a journal, and managing your mental health. Unlike other apps which track your every move, Grapefruit has no login, no tracking scripts, and no server somewhere holding on to all of your data for all of eternity. It’s as private as your device is. So you never have to worry about your most private data being hacked, or using your intimate thoughts to sell you something.</p>
                    </div>
                </div>
            </div>

            <hr class="features-divider">

            <div class="container features">
                <div class="row feature">
                    <div class="col-6 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/android-day.png" style="width:170px;">
                    </div>
                    <div class="col-6">
                        <p class="secondary-text">
                            With <em class="app-name">Grapefruit</em>, you can do your daily reflection through writing, or
                            selecting a numerical rating,
                            or by any number of custom options you can configure just for you.
                            You'll see real benefits just from taking this time each day to gain perspective. But you'll get
                            even more
                            from the results that Grapefruit will generate for you. Find surprising patterns in your behavior,
                            and understand
                            yourself better than you ever have.
                        </p>
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-4">
                        <p class="secondary-text">
                            One of the best things you can do for your mental health is keep a journal.
                            They help you understand your thoughts, reduce stress, and many other benefits.
                            So Grapefruit is centered around that. You'll see instant
                            benefits from just journaling alone, but to get the most out of it, you can go deeper.
                        </p>
                    </div>
                    <div class="col-8 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/screenshot-filled-day.jpg">
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-8 feature-image">
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/screenshot-stats.jpg">
                    </div>
                    <div class="col-4">
                        <p class="secondary-text">
                            Do you know how often you have a good day? That’s one of the many things Grapefruit will show you.
                            Why? Because it’s so much easier to weather the storms when you know exactly when the sun is
                            coming. Now, how about days of the week? Or most common emotions? When you rate your days and track a few
                            things, the results can be really impactful.
                        </p>
                    </div>
                </div>

                <hr class="features-divider">

                <div class="row feature">
                    <div class="col-1 feature-image">
                        💬
                    </div>
                    <div class="col-5">
                        <blockquote class="secondary-text">
                            <em>"This is a great app and it is truly making a difference in my life!
                                I really love it and now I can't imagine a day without rating it here."</em>
                        </blockquote>
                    </div>
                    <div class="col-6">
                        <blockquote class="secondary-text">
                            <em>"I thought my life was filled with bad days.
                                I'm discovering that I'm not having as many bad days as I thought.
                                I'm already starting to have a more positive outlook on life. Great job, guys!"</em>
                        </blockquote>
                    </div>
                </div>

                <div class="store-badges" style="margin:120px 0; text-align:center;">
                    <a href="https://itunes.apple.com/us/app/grapefruit-journal/id1453330205?ls=1&mt=8" style='text-decoration:none'>
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/badge-ios.png" style="width:120px;" class="my-2 mr-1">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.haveagrapefruit.grapefruit" style='text-decoration:none'>
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/badge-android.png" style="width:135px;" class="my-2 mr-1">
                    </a>
                    <a href="https://itunes.apple.com/ca/app/grapefruit/id1441740017?mt=12" style='text-decoration:none'>
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/badge-mac.png" style="width:156px;" class="my-2 mr-1">
                    </a>
                    <a href="https://www.microsoft.com/en-ca/p/grapefruit/9ph0jvzpf2cf" style='text-decoration:none'>
                        <img src="https://haveagrapefruit.s3.amazonaws.com/img/badge-windows.png" style="width:111px;" class="my-2 mr-1">
                    </a>
                </div>

                <div class="end-note">
                    <div class="big-emoji">❤</div>
                    <p class="tertiary-text">Life can be tough. But you got this.</p>
                </div>

            </div>
            <?php get_sidebar(); ?>
        </main><!-- #main -->
	</div><!-- #primary -->
    <?php get_footer(); ?>
