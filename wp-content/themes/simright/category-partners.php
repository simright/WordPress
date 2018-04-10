<?php get_header(); ?>
<section class="main-box partner-list">
    <div class="banner">
        <h2 class="text-center"> <?php pll_e('PARTNERS'); ?></h2>
    </div>
    <section class="about-partner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="partner-item">
            <a href="<?php the_permalink(); ?>">
                <div class="img-wrap">
                    <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                </div>
                <span><?php the_title(); ?></span>
            </a>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">NOT FOUND</a></h3>
    <?php endif; ?>
    </section>
</section>
<?php get_footer(); ?>