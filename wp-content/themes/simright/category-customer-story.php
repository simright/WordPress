<?php get_header(); ?>
<section class="main-box customer-list">
    <div class="banner">
        <div class="swiper siema" id="next-process" >
            <button class="pre"></button>
            <div class="contain" >
                <?php if(pll_current_language()=="zh"): ?>
                <div class="story-item">
                    <div class="img-wrap">
                        <img src="<?php echo get_thumbnail_src(54) ?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo get_post(54)->post_title ?></h2>
                        <p><?php echo get_post(54)->post_excerpt ?></p>
                        <button>
                            <a href="">阅读故事</a>
                        </button>
                    </div>
                </div>
                <div class="story-item">
                    <div class="img-wrap">
                        <img src="<?php echo get_thumbnail_src(54) ?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo get_post(54)->post_title ?></h2>
                        <p><?php echo get_post(54)->post_excerpt ?></p>
                        <button>
                            <a href="">阅读故事</a>
                        </button>
                    </div>
                </div>
                <div class="story-item">
                    <div class="img-wrap">
                        <img src="<?php echo get_thumbnail_src(54) ?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo get_post(54)->post_title ?></h2>
                        <p><?php echo get_post(54)->post_excerpt ?></p>
                        <button>
                            <a href="">阅读故事</a>
                        </button>
                    </div>
                </div>
                <?php else: ?>
                <div class="story-item">
                    <div class="img-wrap">
                        <img src="<?php echo get_thumbnail_src(54) ?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo get_post(54)->post_title ?></h2>
                        <p><?php echo get_post(54)->post_excerpt ?></p>
                        <button>
                            <a href="">阅读故事</a>
                        </button>
                    </div>
                </div>
                <?php endif ?>
            </div>
            <button class="next"></button>
        </div>
    </div>
    <section class="about-customer">
        <h2><?php pll_e('FEATURED CUSTOMER STORIES')?></h2>
        <hr>
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
        <?php else : ?>
            <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
        <?php endif; ?>
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
            $('.prev').on('click', () => preProcess.prev());
            $('.next').on('click', () => preProcess.next());
        }
    </script>
<?php get_footer(); ?>