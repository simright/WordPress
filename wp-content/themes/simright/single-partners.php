<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<section class="main-box partners-details">
    <div class="banner">
        <h2 class="text-center"><?php the_excerpt(); ?></h2>
    </div>
    <section class="contain-box">
        <div class="contain-body">
            <div class="main-contain">
                <a href="<?php echo get_option('home'); ?>/<?php echo pll_current_language() ?>/category/partners"><?php pll_e('返回合作伙伴中心'); ?></a>
                    <hr/>
                    <div class="list-contain">
                        <div class="post-header">
                            <h3 class="title"><?php the_excerpt(); ?></h3>
                        </div>
                        <div>
                            <img class="partner-logo" src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                            <?php the_content(); ?>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
</section>
<?php else : ?>
    <p>error</p>
<?php endif; ?>
<?php get_footer(); ?>