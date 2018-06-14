<?php get_header(); ?>
<section class="main-box live-details">
    <div class="main-contain">
        <a href="<?php echo get_option('home'); ?>/<?php echo pll_current_language() ?>/category/live"><?php pll_e('返回直播中心'); ?></a>
        <hr/>
        <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
            <div class="details-contain">
                <div class="contain-top">
                    <div class="img-wrap" style="max-width:500px;max-height:300px;">
                        <img src="<?php post_thumbnail_src('thumbnail'); ?>"  alt="" style="max-width:100%;max-height:100%">
                    </div>
                    <div class="live-info">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <div class="tips">
                            <span class="label-infos"><?php pll_e('直播时间'); ?>:</span>
                            <span><?php echo get_post_meta($post->ID, "time", $single = true) ?></span>
                        </div>
                        <div class="tips">
                            <span class="label-infos"><?php pll_e('适用人群'); ?>:</span>
                            <span><?php echo get_post_meta($post->ID, "applicable-people", $single = true) ?></span>
                        </div>
                        <div class="tips number">
                            <span class="label-infos"><?php pll_e('已报名'); ?>:</span>
                            <span><b><?php echo get_post_meta($post->ID, "number", $single = true) ?></b><?php pll_e('人'); ?></span>
                        </div>
                        <?php $categorys = get_the_category();?>
                        <?php foreach ($categorys as $category) :?>
                            <?php if($category->category_nicename == "upcoming-live"): ?>
                                <?php if(get_post_meta($post->ID, "living-link", $single = true) != ""):?>
                                    <a href="<?php echo get_post_meta($post->ID, "living-link", $single = true) ?>" class="btn btn-light btn-sm"><?php pll_e("立即观看"); ?></a>
                                <?php else:?>
                                    <a href="/live-sign-up?post-name=<?php the_title(); ?>" class="btn btn-light btn-sm"><?php pll_e("立即报名"); ?></a>
                                <?php endif ?>
                            <?php elseif($category->category_nicename == "completed-live"): ?>
                                <a href="<?php echo get_post_meta($post->ID, "video-link", $single = true) ?>" class="btn btn-grey btn-sm"><?php pll_e("已结束"); ?></a>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="contain-bottom">
                    <div class="contain-text">
                        <h2 class="title"><?php pll_e('直播内容'); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <div class="liver-info">
                        <div class="info-header">
                            <img src="<?php echo get_post_meta($post->ID, "person-avatar", $single = true) ?>" alt="">
                            <div>
                                <h4><?php echo get_post_meta($post->ID, "person-name", $single = true) ?></h4>
                                <p><?php echo get_post_meta($post->ID, "person-title", $single = true) ?></p>
                            </div>
                        </div>
                        <div class="person-info">
                            <?php echo get_post_meta($post->ID, "person-info", $single = true) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>error</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>