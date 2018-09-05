<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<section class="main-box pdm-details">
    <div class="top">
        <div class="left">
            <h2><?php the_title(); ?></h2>
            <div class="content">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="right">
            <div class="swiper siema" id="next-process" >
                <button class="pre"></button>
                <div class="contain" >
                <?php
                    $json_str = get_post_meta($post->ID, "pdm-video", $single = true);
                    if($json_str){
                        $obj=json_decode($json_str);
                        foreach ( $obj as $unit ){
                            echo '<div class="pdm-video-item">
                                <a href="'.$unit->link.'">
                                    <div class="img-wrap">
                                        <img src="'.$unit->img.'" alt="">
                                    </div>
                                </a>
                            </div>';
                        };
                    }
                ?>
                </div>
                <button class="next"></button>
            </div>
        </div>
    </div>
    <div class="bottom">
        <h2 class="title">
            功能描述
        </h2>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
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