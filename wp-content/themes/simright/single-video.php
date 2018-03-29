<?php get_header('video'); ?>
<section class="main-box video-details">
    <section class="contain-box">
        <div class="contain-body">
            <div class="main-contain">
                <a href="<?php echo get_option('home'); ?>/<?php echo pll_current_language() ?>/category/video"><?php pll_e('返回视频中心'); ?></a>
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
            <h3><?php pll_e('同类教程'); ?></h3>
            <?php
                $cat=get_the_category();
                $cat_id=$cat[0]->cat_ID;
                query_posts('order=asc&cat='.$cat_id);
                while (have_posts()):the_post();
            ?>
            <div class="video-item">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php post_thumbnail_src('thumbnail'); ?>" alt="">
                    <span><?php the_title(); ?></span>
                    <p><?php the_time('Y-m-d') ?></p>
                </a>
            </div>
            <?php  endwhile;wp_reset_query(); ?>
        </div>
    </section>
</section>
<script>
var videoPlayButton,
	videoWrapper = document.getElementsByClassName('wp-video')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
        renderVideoPlayButton: function() {
            if (videoWrapper && videoWrapper.contains(video)) {
				this.formatVideoPlayButton()
                video.classList.add('has-media-controls-hidden')
                videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
            }
        },

        formatVideoPlayButton: function() {
            videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                </svg>\
            ')
        },

        hideVideoPlayButton: function() {
            video.play()
            videoPlayButton.classList.add('is-hidden')
            video.classList.remove('has-media-controls-hidden')
            video.setAttribute('controls', 'controls')
        }
	}
videoMethods.renderVideoPlayButton()
</script>
<?php get_footer(); ?>