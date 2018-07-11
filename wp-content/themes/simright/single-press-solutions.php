<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<section class="main-box partners-details customer-story-details solutions-details">
    <div class="banner">
        <div>
            <div class="img-wrap">
                <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
            </div>
            <div class="story-content">
                <h2>
                    <?php the_title(); ?>
                </h2>
                    <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <section class="contain-box">
        <div class="contain-body">
            <div class="main-contain">
                <a href="<?php echo get_option('home'); ?>/<?php echo pll_current_language() ?>/category/press-solutions"><?php pll_e('返回解决方案'); ?></a>
                <hr/>
                <div class="list-contain">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div>
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