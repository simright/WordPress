<?php get_header(); ?>
<section class="main-box customer-list">
    <div class="banner">
        <div class="swiper  " id="next-process" >
            <button class="pre"></button>
            <div class="contain" >
                <?php if(pll_current_language()=="zh"): ?>
                    <?php $blog_cat_ID = get_cat_ID("用户故事推荐"); ?>
                    <?php query_posts("cat=$blog_cat_ID"); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="story-item">
                            <div class="img-wrap">
                                <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                            </div>
                            <div class="story-content">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <button>
                                    <a href="<?php the_permalink(); ?>">阅读故事</a>
                                </button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php $blog_cat_ID = get_cat_ID("customer story recommended"); ?>
                    <?php query_posts("cat=$blog_cat_ID"); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="story-item">
                            <div class="img-wrap">
                                <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                            </div>
                            <div class="story-content">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <button>
                                    <a href="<?php the_permalink(); ?>">Read the story</a>
                                </button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif ?>
            </div>
            <button class="next"></button>
        </div>
    </div>
    <section class="about-customer">
        <h2><?php pll_e('FEATURED CUSTOMER STORIES')?></h2>
        <hr>
        <?php if(pll_current_language()=="zh"): ?>
            <?php $blog_cat_ID = get_cat_ID("用户故事"); ?>
            <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="customer-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-wrap">
                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                        </div>
                        <span class="item-title"><?php the_title(); ?></span>
                        <?php the_excerpt(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        <?php else: ?>
            <?php $blog_cat_ID = get_cat_ID("Customer story"); ?>
            <?php query_posts("cat=$blog_cat_ID"); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="customer-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-wrap">
                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                        </div>
                        <span class="item-title"><?php the_title(); ?></span>
                        <?php the_excerpt(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        <?php endif ?>
    </section>
</section>
    <script src="https://oss.simright.com/static/jquery.min.js"></script>
    <script src="https://oss.simright.com/static/siema.min.js"></script>
    <script>
        initSwiper();
        function initSwiper(){
            var preProcess = new Siema({
                selector: '.contain',
                duration: 200,
                easing: 'ease-out',
                perPage: 1,
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });
            $('.pre').on('click', () => preProcess.prev());
            $('.next').on('click', () => preProcess.next());
        }
    </script>
<?php get_footer(); ?>