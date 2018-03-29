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
        <?php query_posts('cat=89'); ?>
    <?php else: ?>
        <?php query_posts('cat=148'); ?>
    <?php endif ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a class="video-item"  data-href="<?php the_permalink(); ?>">
            <div>
                <div class="left">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
            </div>
        </a>
    <?php endwhile; ?>
    <?php else : ?>
            <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
    <?php endif; ?>
</div>
</body>
<?php get_footer('page'); ?>
</html>