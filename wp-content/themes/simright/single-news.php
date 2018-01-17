<?php get_header(); ?>
<section class="main-box video-details">
    <section class="contain-box">
        <div class="contain-body">
            <div class="main-contain">
                <a href="<?php echo get_option('home'); ?>">返回新闻中心</a>
                    <hr/>
                <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
                    <div class="list-contain">
                        <div class="post-header">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p><?php the_time('Y-m-d') ?></p>
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php else : ?>
                    <p>error</p>
                <?php endif; ?>
            </div>
            <div class="comment-list" id="user-comment">
                <?php
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                } ?>
			</div>
        </div>

        <div class="slide-bar">
            <h3>同类教程</h3>
            <ul>
                <?php
                    $cat=get_the_category();
                    $cat_id=$cat[0]->cat_ID;
                    query_posts('order=asc&cat='.$cat_id);
                    while (have_posts()):the_post();
                ?>
                <div class="news-item">
                    <li><a href="<?php the_permalink(); ?>">
                        <span><?php the_title(); ?></span>
                    </a></li>
                </div>
                <?php  endwhile;wp_reset_query(); ?>
            </ul>
        </div>
    </section>
</section>
<?php get_footer(); ?>