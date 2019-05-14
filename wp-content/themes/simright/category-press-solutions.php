<?php get_header(); ?>
<section class="main-box solutions-list">
    <div class="banner">
        <h2 class="text-center"> <?php pll_e('案例库'); ?></h2>
    </div>
    <section class="contain-box">
    <div>
        <!-- Nav tabs -->
        <ul class="nav" role="tablist">
            <li role="presentation" id="press-solutions"><a href="/<?php echo pll_current_language()?>/category/press-solutions/"><?php pll_e('all')?></a></li>
            <li role="presentation" id="press-structural-analysis"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-structural-analysis/"><?php pll_e('structural analysis')?></a></li>
            <li role="presentation" id="press-topology-optimization"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-topology-optimization/"><?php pll_e('topology optimization')?></a></li>
            <li role="presentation" id="press-pre-processor"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-pre-processor/"><?php pll_e('pre processor')?></a></li>
            <li role="presentation" id="press-converter"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-converter/"><?php pll_e('converter')?></a></li>
            <li role="presentation" id="press-online-collaboration"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-online-collaboration/"><?php pll_e('online collaboration')?></a></li>
            <li role="presentation" id="press-3d-printing"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-3d-printing/"><?php pll_e('3d printing')?></a></li>
            <li role="presentation" id="press-automotive"><a href="/<?php echo pll_current_language()?>/category/press-solutions/type/press-automotive/"><?php pll_e('Automotive')?></a></li>
        </ul>
        <div class="press-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="solutions-item">
                <?php if(get_post_meta($post->ID, "solutions-link", $single = true) != ""):?>
                <a href="<?php echo get_post_meta($post->ID, "solutions-link", $single = true); ?>" target="_blank">
                <?php else:?>
                <a href="<?php the_permalink(); ?>">
                <?php endif ?>
                    <div class="img-wrap">
                        <img src="<?php echo post_thumbnail_src('thumbnail'); ?>" alt="">
                    </div>
                    <div class="content">
                        <div class="title">
                            <h2><?php echo the_title(); ?></h2>
                            <span><?php echo get_post_meta($post->ID, "solution-tag", $single = true) ?></span>
                        </div>
                        <div class="info">
                            <?php echo the_excerpt();?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php $current_lan = pll_current_language(); if($current_lan == 'en'): ?>
        <div id="pagination" class="noajx"><?php next_posts_link("Load more") ?></div>
        <div id="loadmore"><a href="javascript:;">Loading</a></div>
    <?php else : ?>
        <div id="pagination" class="noajx"><?php next_posts_link("加载更多...") ?></div>
        <div id="loadmore"><a href="javascript:;">正在加载 ...</a></div>
    <?php endif; ?>
	</section>
    <script type="text/javascript">
        function gettypeCat () { 
            var url = window.location.href;
            var catArray = url.split('/');
            var cat = catArray[catArray.length-2];
            console.log(cat)
            if(cat == "press-solutions"){
                document.getElementById("press-solutions").className="active";
            }else{
                document.getElementById(cat).className="active";
            }
        }
        gettypeCat();
    </script>
</section>
<?php get_footer(); ?>




