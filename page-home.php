<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grapefruit_Stand
 */

get_header(); ?>

<div class="numeral-item-container">
    <div class="numeral">i.</div>
    <p class="primary-text">You know that thing where someone writes about things, and they send it out to a bunch of people, and those people read it for a while and then eventually unsubscribe? Well I’m doing one of those things.</p>
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
    <p class="tertiary-text">Join 500+ other folks getting updates about my projects and reading about my ever-deteriorating mental health so they can feel better about themselves probably.</p>
    <!--End mc_embed_signup-->
    <p class="secondary-text">I also put some words on <a href="https://medium.com/angusw" target="_blank" rel="noopener noreferrer">Medium</a> from time to time.</p>
    </div>
</div>

<div class="numeral-item-container">
    <div class="numeral">ii.</div>
    <p class="primary-text"><a href="/grapefruit">Grapefruit</a> is a privacy-first app for tracking your moods, keeping a journal, and managing your mental health. Unlike other apps which track your every move, Grapefruit has no login, no tracking scripts, and no server somewhere holding on to all of your data for all of eternity. It’s as private as your device is. So you never have to worry about your most private data being hacked, or using your intimate thoughts to sell you something.</p>
    <div class="numeral-image">
        <a href="/grapefruit" class="stealth"><img src="https://haveagrapefruit.s3.amazonaws.com/img/banner.jpg" style="max-width:660px;"></a>
    </div>
    <div class="store-badges">
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
</div>

<div class="numeral-item-container">
    <div class="numeral">iii.</div>
    <p class="primary-text"><a href="/count-your-money">Count Your Money</a> is an app to add a little financial responsibility to your life, but not too much. Just want an easy way to keep a high-level view of your money? No budgets, no spreadsheets. Just count your money. It’s called Count Your Money and it's a great way to start your financial journey.</p>
    <div class="numeral-image">
        <a href="/grapefruit" class="stealth"><img src="https://haveagrapefruit.s3.amazonaws.com/img-cym/banner.jpg" style="max-width:660px;"></a>
    </div>
    <div class="coming-soon">
        <p>Coming Soon. Sign up above for updates.</p>
    </div>
</div>

<div class="numeral-item-container">
    <div class="numeral">iv.</div>
    <p class="primary-text">Number four on this list still doesn't have a name. Or screenshots or excerpts. I'm working on a few concepts, but I wanna create something more <em>fun</em> and maybe a little pointless for pure creativity's sake. I'll be writing about it for the newsletter though, so sign up if you're curious about <em>The Mystery Fourth Project</em>.</p>
</div>

<div class="numeral-item-container">
    <div class="numeral">v.</div>
    <p class="primary-text">And this is where I'm totally going to cheat and use the last item to list out everything else that doesn't get a full numeral.</p>
    <ul class="small-projects-list">
        <li>
            <a href="">Follow me on Twitch</a>
            <span>where I'll be streaming some wildly unpopular games from time to time.</span>
        </li>
        <li>
            <a href="">Join my Discord chat</a>
            <span>where we can chat or play games together.</span>
        </li>
        <li>
            Starting in the summer, I'm thinking about experimenting with some standing video call slots, so anyone can book a call.
            I used to do these with a mentorship program and had some really great convos. I'll send out more info to the email list when I sort it out.
        </li>
    </ul>
</div>

<p class="primary-text" style="margin-bottom:120px;">
    And if none of that interests, you, well, <a href="/its-okay-relax/">it's okay</a>.
</p>

<?php get_footer(); ?>
