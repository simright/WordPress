<?php   
/*   
Template Name: structural  
*/   
?>
<?php get_header(); ?>
<section class="main-box page-strctural">
    <section class="banner">
        <img src="https://oss.simright.com/images/cms_structural_bg.jpg?v1.2" alt="front">
    </section>
    <section class="contain-box">
        <section>
            <h2>导语</h2>
            <div class="introduction">
                结构力学是一门古老的学科，又是一门迅速发展的学科。新型工程材料和新型工程结构的大量出现，向结构力学提供了新的研究内容并提出新的要求。计算机的发展，又为结构力学提供了有力的计算工具。另一方面，结构力学对数学及其他学科的发展也起了推动作用。有限元法这一数学方法的出现和发展就和结构力学的研究有密切关系。在固体力学领域中，材料力学给结构力学提供了必要的基本知识，弹性力学和塑性力学是结构力学的理论基础。
            </div>
        </section>
        <section>
            <h2>
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
                <span>结构力学的用途</span> 
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
            </h2>
            <div class="purpose">
                <?php $blog_cat_ID = get_cat_ID("结构力学"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
                <div class="blog-contain">
                    <ul class="blog-item-wrap">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="blog-item">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="title"><?php the_title();?></h4>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
                        <?php endif; ?>
                    </ul>
                </div>
                <div id="pagination" class="noajx">
                    <a href="/zh/category/blogs/type/structural-mechanics/">查看更多...</a>
                </div>
            </div>
        </section>
        <section>
            <h2>
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
                <span>结构分析应该怎么做</span> 
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
            </h2>
            <div class="analysis">
                <section>
                    <h3 class="title">
                        01
                        <span>前处理</span>
                    </h3>
                    <div class="swiper siema" id="pre-process" >
                        <button class="pre"></button>
                        <div class="contain" >
                            <?php if(pll_current_language()=="zh"): ?>
                                <?php $blog_cat_ID = get_cat_ID("前处理"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php else: ?>
                                <?php $blog_cat_ID = get_cat_ID("前处理"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php endif ?>

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="video-items">
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                                            <span><?php the_title(); ?></span>
                                            <p><?php the_time('Y-m-d') ?></p>
                                        </a>
                                    </li>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
                            <?php endif; ?>
                        </div>
                        <button class="next"></button>
                    </div>
                </section>
                <section>
                    <h3 class="title">
                        02
                        <span>解决</span>
                    </h3>
                    <div class="swiper siema" id="solve" >
                        <button class="pre"></button>
                        <div class="contain" >
                            <?php if(pll_current_language()=="zh"): ?>
                                <?php $blog_cat_ID = get_cat_ID("求解"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php else: ?>
                                <?php $blog_cat_ID = get_cat_ID("求解"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php endif ?>

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="video-items">
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                                            <span><?php the_title(); ?></span>
                                            <p><?php the_time('Y-m-d') ?></p>
                                        </a>
                                    </li>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
                            <?php endif; ?>
                        </div>
                        <button class="next"></button>
                    </div>
                </section>
                <section>
                    <h3 class="title">
                        03
                        <span>后处理</span>
                    </h3>
                    <div class="swiper siema" id="next-process" >
                        <button class="pre"></button>
                        <div class="contain" >
                            <?php if(pll_current_language()=="zh"): ?>
                                <?php $blog_cat_ID = get_cat_ID("后处理"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php else: ?>
                                <?php $blog_cat_ID = get_cat_ID("后处理"); ?>
                                <?php query_posts("cat=$blog_cat_ID"); ?>
                            <?php endif ?>

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="video-items">
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                                            <span><?php the_title(); ?></span>
                                            <p><?php the_time('Y-m-d') ?></p>
                                        </a>
                                    </li>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
                            <?php endif; ?>
                        </div>
                        <button class="next"></button>
                    </div>
                </section>
            </div>
        </section>
        <section>
            <h2>
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
                <span>结构分析实例</span> 
                <img src="https://oss.simright.com/images/cms_quotes.png" alt="">
            </h2>
            <div class="example">
                <div class="swiper siema" id="example" >
                    <button class="pre"></button>
                    <div class="contain" >
                        <a class="example-item" href="/resources/public-projects/cdeb208d-f8f4-3ef4-a17c-2ab52a20760d?app_name=simulator"><img src="https://oss.simright.com/cover/cdeb208d-f8f4-3ef4-a17c-2ab52a20760d"><p> Wheel Hub </p></a>
                        <a class="example-item" href="/resources/public-projects/23cfb4ec-9d72-3972-b53d-5bdbf8eb6ff4?app_name=simulator"><img src="https://oss.simright.com/cover/23cfb4ec-9d72-3972-b53d-5bdbf8eb6ff4"><p> Oil Cap </p></a>
                        <a class="example-item" href="/resources/public-projects/7d51f0b0-cbca-3fd3-9608-7d421a5e4903?app_name=toptimizer"><img src="https://oss.simright.com/cover/7d51f0b0-cbca-3fd3-9608-7d421a5e4903"><p> Lightweight Flat </p></a>
                        <a class="example-item" href="/resources/public-projects/7d51f0b0-cbca-3fd3-9608-7d421a5e4903?app_name=toptimizer"><img src="https://oss.simright.com/cover/7d51f0b0-cbca-3fd3-9608-7d421a5e4903"><p> Lightweight Flat </p></a>
                        <a class="example-item" href="/resources/public-projects/7d51f0b0-cbca-3fd3-9608-7d421a5e4903?app_name=toptimizer"><img src="https://oss.simright.com/cover/7d51f0b0-cbca-3fd3-9608-7d421a5e4903"><p> Lightweight Flat </p></a>
                    </div>
                    <button class="next"></button>
                </div>
            </div>
        </section>
    </section>
</section>
<?php get_footer('structural'); ?>