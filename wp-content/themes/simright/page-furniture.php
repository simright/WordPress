<?php   
/*   
Template Name: furniture  
*/   
?>
<?php get_header(); ?>
<section class="main-box page-furniture">
    <section class="banner">
        <img src="https://oss.simright.com/images/cms_furniture_bg.jpg" alt="front">
    </section>
    <section class="table furniture-item">
        <div class="title">
            <img src="https://oss.simright.com/images/cms_furniture_title-left.png" alt="">
            <span>桌子</span>
            <img src="https://oss.simright.com/images/cms_furniture_title-right.png" alt="">
        </div>
        <div class="content">
            <div class="left">
                <div class="cover-img">
                    <img src="https://oss.simright.com/images/cms_furniture_table.jpg" alt="">
                </div>
                <h4>餐桌·应用案例</h4>
            </div>
            <div class="list">
                <?php $blog_cat_ID = get_cat_ID("桌子"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <a class="list-item" href="<?php echo get_the_excerpt(); ?>" target="_blank">
                        <div class="cover-img">
                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                        </div>
                        <h5><?php the_title();?></h5>
                        <p><?php the_content(); ?></p>
                    </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="chair furniture-item">
        <div class="title">
            <img src="https://oss.simright.com/images/cms_furniture_title-left.png" alt="">
            <span>椅子</span>
            <img src="https://oss.simright.com/images/cms_furniture_title-right.png" alt="">
        </div>
        <div class="content">
            <div class="left">
                <div class="cover-img">
                    <img src="https://oss.simright.com/images/cms_funiture_chair.jpg" alt="">
                </div>
                <h4>椅子·应用案例</h4>
            </div>
            <div class="list">
                <?php $blog_cat_ID = get_cat_ID("椅子"); ?>
                <?php query_posts("cat=$blog_cat_ID"); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <a class="list-item" href="<?php echo get_the_excerpt(); ?>" target="_blank">
                        <div class="cover-img">
                            <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                        </div>
                        <h5><?php the_title();?></h5>
                        <p><?php the_content(); ?></p>
                    </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>