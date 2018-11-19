<?php   
/*   
Template Name: toptimizer  
*/   
?>
<!DOCTYPE html>
<html lang="en">
<?php get_header('page'); ?>
<body class="site-tutotial-video">
<div id="toptimizer-wrap">
    <?php if(pll_current_language()=="zh"):?>
        <?php query_posts('cat=81'); ?>
    <?php else: ?>
        <?php query_posts('cat=144'); ?>
    <?php endif ?>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="video-item" data-href="<?php the_permalink(); ?>">
            <a class="img-wrap" style="background-image:url('<?php post_thumbnail_src('thumbnail'); ?>')">
                <img src="https://oss.simright.com/images/wp-video-play.svg" alt="">
            </a>
            <a>
                <span><?php the_title(); ?></span>
                <p><?php the_time('Y-m-d') ?></p>
            </a>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
    <?php endif; ?>
</div>
</body>
<?php get_footer('page'); ?>
</html>