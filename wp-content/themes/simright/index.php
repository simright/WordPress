<?php get_header(); ?>
<section class="error-view  main-box video-list">
    <section class="main-box">
        <div class="error-wrap error-404">
            <img src="https://oss.simright.com/images/404.svg?v1.0" alt="">
            <p><?php pll_e('error_tips'); ?></p>
            <p><span><?php pll_e('error_goto'); ?></span> <a href="/"><?php pll_e('error_home'); ?></a></p>
        </div>
    </section>
</section>
<?php get_footer(); ?>