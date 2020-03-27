<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>

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
        <p>Add a little financial responsibility to your life ... but not too much.
        Forget about budgets you'll never stick to and spreadsheets that suck the joy from Sundays.
        Count Your Money is an app in which you do exactly that ... count your money. That's all you have to do.
        The math will be done for you, and over time you'll get a clear picture of your long-term financial situation.
        </p>
    </div>
</div>
</div>

<hr class="features-divider">

<div class="container features">

<!-- <div class="row feature">
    <div class="col-6 feature-image">
        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-record.jpg">
    </div>
    <div class="col-6 overlap-caption">
        <p class="secondary-text">
            The only thing you need to do is the simplest part -- counting your money. You write in your balances of all your accounts, and that's it. Then you came back later and do it again. You can do it monthly, weekly, or erratically. The app will smartly adapt to you so you can be busy or forgetful and come back to it whenever you have time.
        </p>
    </div>
</div>

<hr class="features-divider"> -->

<div class="row feature">
    <div class="col-12 feature-image">
        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-present-faded.jpg">
    </div>
    <div class="col-12 overlap-caption" style="margin-top:-40px;">
        <h2>Past, Present and Future</h2>
        <p class="primary-text">
            You'll find everything you need in so-incredibly-obvious-why-would-you-do-it-any-other-way Past, Present and Future pages.
            Curious how your future is looking? Go to the Future section. It's so simple I just wasted your time telling you.
        </p>
    </div>
</div>

<hr class="features-divider">

<div class="row feature">
    <div class="col-12 feature-image">
        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-future-faded.jpg">
    </div>
    <div class="col-12 overlap-caption" style="margin-top:-40px;">
        <h2>Speaking of your future...</h2>
        <p class="primary-text">
            You can put in how much money you want to live on when you're done working,
            and keep an eye on that sweet sweet retirement life. But only one eye, now and then. Like
            a glass eye you take out from time to time to scare children.
        </p>
    </div>
</div>

<hr class="features-divider">

<div class="row feature">
    <div class="col-12 feature-image" style="margin-top:0px;position:relative;z-index:98;">
        <img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/screenshot-past-faded.jpg">
    </div>
    <div class="col-12 overlap-caption" style="position:relative;z-index:99;">
        <h2>More, If You Want It</h2>
        <p class="primary-text">
            You can see a detailed log of all the money you've counted, if you do in fact like spreadsheets. You can also export to (and import from) CSV files for use with other software, or if you want to move up to a more complex app.
            It's your data, so you can do what you want with it.
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

<?php get_footer(); ?>
