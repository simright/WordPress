<?php get_header(); ?>
<section class="main-box live-list">
    <div class="banner">
        <h2 class="text-center"> <?php pll_e('LIVE'); ?></h2>
    </div>
    <section class="about-live">
        <div class="upcoming-live">
            <h2 class="classify-title"><?php pll_e('ji jiang jin xing de zhi bo'); ?></h2>
            <?php if(pll_current_language()=="zh"): ?>
                <?php $blog_cat_ID = get_cat_ID("即将进行的直播"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php else: ?>
                <?php $blog_cat_ID = get_cat_ID("upcoming-live"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php endif ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="live-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-cover" style="background-image:url('<?php echo post_thumbnail_src('thumbnail'); ?>');">
                            <h2><?php echo the_title()?></h2>
                        </div>
                        <h3 class="time"><?php echo get_post_meta($post->ID, "webinar-time", $single = true) ?></h3>
                        <div class="live-info">
                            <?php echo the_excerpt();?>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h3 class="title"></h3>
            <?php endif; ?>
        </div>
        <div class="ended-live">
            <h2 class="classify-title"><?php pll_e('yi jing jie shu de zhi bo'); ?></h2>
            <?php if(pll_current_language()=="zh"): ?>
                <?php $blog_cat_ID = get_cat_ID("已经结束的直播"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php else: ?>
                <?php $blog_cat_ID = get_cat_ID("completed-live"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php endif ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="live-item live-item-ended">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-cover" style="background-image:url('<?php echo post_thumbnail_src('thumbnail'); ?>');">
                            <h2><?php echo the_title()?></h2>
                        </div>
                        <h3 class="time"><?php echo get_post_meta($post->ID, "webinar-time", $single = true) ?></h3>
                        <div class="live-info">
                            <?php echo the_excerpt();?>
                        </div>
                        <a href="<?php echo get_post_meta($post->ID, "webinar-end-video-link", $single = true) ?>" class="btn btn-light" target="_blank"><?php pll_e('Watch Now')?></a>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h3 class="title"></h3>
            <?php endif; ?>
        </div>
    </section>
</section>
<?php get_footer(); ?>