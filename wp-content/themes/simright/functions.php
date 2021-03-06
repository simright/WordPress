<?php
/* 关闭更新提示 */

add_filter('pre_site_transient_update_core', create_function('$a', "return null;")); // 关闭核心提示  
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;")); // 关闭插件提示  
add_filter('pre_site_transient_update_themes', create_function('$a', "return null;")); // 关闭主题提示  
remove_action('admin_init', '_maybe_update_core'); // 禁止 WordPress 检查更新  
remove_action('admin_init', '_maybe_update_plugins'); // 禁止 WordPress 更新插件  
remove_action('admin_init', '_maybe_update_themes'); // 禁止 WordPress 更新主题

/** widgets */
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Viedeo_list_classification',
		'id'  => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

/** 缩略图 */
if ( function_exists('add_theme_support') ){
	add_theme_support('post-thumbnails');
	add_image_size('thumbnail', 160, 120, true);
	add_image_size('show', 80, 60, true);
}

function post_thumbnail_src($size){
	global $post;
	if( $values = get_post_custom_values("show") ) {
		$values = get_post_custom_values("show"); //在文章中的自定义字段中show对应的图片地址
		$post_thumbnail_src = $values [0];
	} elseif( has_post_thumbnail() ){
		switch($size){
			case 'thumbnail':
				$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
				$post_thumbnail_src = $thumbnail_src [0];
				break;
			case 'show':
				$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'show');
				$post_thumbnail_src = $thumbnail_src [0];
				break;
			default:
				break;
		}
	} else {
		$post_thumbnail_src = ''; //如果没有缩略图获取随机图片
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$post_thumbnail_src = $matches [1] [0];
		if(emptyempty($post_thumbnail_src)){
			$random = mt_rand(1, 10);
			echo get_bloginfo ( 'stylesheet_directory' );
			echo '/img/random/'.$random.'.jpg';
		}
	};
	echo $post_thumbnail_src;
}

function get_thumbnail_src($id){
	$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail');
	$post_thumbnail_src = $thumbnail_src [0];
	return $post_thumbnail_src;
}

function autoset_featured() {
	global $post;
	$already_has_thumb = has_post_thumbnail($post->ID);
	if (!$already_has_thumb)  {
		$attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
		if ($attached_image) {
			foreach ($attached_image as $attachment_id => $attachment) {
			set_post_thumbnail($post->ID, $attachment_id);
			}
		}
	}
}
add_action('the_post', 'autoset_featured');
add_action('save_post', 'autoset_featured');
add_action('draft_to_publish', 'autoset_featured');
add_action('new_to_publish', 'autoset_featured');
add_action('pending_to_publish', 'autoset_featured');
add_action('future_to_publish', 'autoset_featured');

/** 评论 */

if ( ! function_exists( 'simright_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own simright_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Twenty Twelve 1.0
	 */
	function simright_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				// Display trackbacks differently than normal comments.
				?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p><?php _e( 'Pingback:', 'simright' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'simright' ), '<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default:
				// Proceed with normal comments.
				global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					if(get_comment_meta($comment->comment_ID, 'avatar', true )){
						printf(
							'<img alt="" src="%1$s" class="avatar photo avatar-default">',
							get_comment_meta($comment->comment_ID, 'avatar', true )
						);
					}else{
						echo get_avatar( $comment, 44 );
					}
					printf(
						'<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span></span>' : ''
					);
					printf(
						'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'simright' ), get_comment_date(), get_comment_time() )
					);
					?>
				</header><!-- .comment-meta -->
				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'simright' ); ?></p>
			<?php endif; ?>
				<section class="comment-content comment">
				<?php comment_text(); ?>
				<div class="reply">
				<?php
					comment_reply_link(
						array_merge(
							$args, array(
								'reply_text' => '<img class="reply" src="https://oss.simright.com/images/reply.svg">',
								'depth'      => $depth,
								'max_depth'  => 2,
							)
						)
					);
				?>
				</div><!-- .reply -->
				</section><!-- .comment-content -->
			</article><!-- #comment-## -->
		<?php
				break;
		endswitch; // end comment_type check
	}
endif;

/** script */
function simright_scripts() {
	wp_enqueue_script( 'comment-reply' );
	wp_localize_script(
		'simright_scripts', 'screenReaderText', array(
			'expand'   => __( 'expand child menu', 'simright' ),
			'collapse' => __( 'collapse child menu', 'simright' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'simright_scripts' );

/** 注册字符串 */
if( function_exists('pll_register_string') ) {
	pll_register_string('Home','Home');
	pll_register_string('Products','Products');
	pll_register_string('Public Cloud Apps','Public Cloud Apps');
	pll_register_string('Private Cloud Solutions','Private Cloud Solutions');
	pll_register_string('Simulator - Structural Analysis','Simulator - Structural Analysis');
	pll_register_string('Toptimizer - Topology Optimization','Toptimizer - Topology Optimization');
	pll_register_string('CAE Converter - CAE model converter','CAE Converter - CAE model converter');
	pll_register_string('CAD Converter - CAD model converter','CAD Converter - CAD model converter');
	pll_register_string('Viewer - CAD/CAE model viewer','Viewer - CAD/CAE model viewer');
	pll_register_string('WebMesher – Pre-processor','WebMesher – Pre-processor');
	pll_register_string('ThreeMagic - STL editor for 3D printing','ThreeMagic - STL editor for 3D printing');
	pll_register_string('Resources','Resources');
	pll_register_string('Public Projects','Public Projects');
	pll_register_string('Model Library','Model Library');
	pll_register_string('Pricing','Pricing');
	pll_register_string('Partners','Partners');
	pll_register_string('PARTNERS','PARTNERS');
	pll_register_string('user-stories','User Stories');

	pll_register_string('Learning','Learning');
	pll_register_string('Video Library','Video Library');
	pll_register_string('Webinars','Webinars');
	pll_register_string('Blog','Blog');
	pll_register_string('Nav News','News');
	pll_register_string('Sign In','Sign In');
	pll_register_string('Sign Up','Sign Up');
	pll_register_string('Profile','Profile');
	pll_register_string('Setting','Setting');
	pll_register_string('My Projects','My Projects');
	pll_register_string('My Models','My Models');
	pll_register_string('Wallet','Wallet');
	pll_register_string('Usage Overview','Usage Overview');
	pll_register_string('Logout','Logout');
	pll_register_string('Notifications','Notifications');
	pll_register_string('No news','No news');
	pll_register_string('More','More');
	
	

	pll_register_string('Blog','Blog');
	pll_register_string('About','About');
	pll_register_string('About Us','About Us');
	pll_register_string('Contact Us','Contact Us');
	pll_register_string('Security','Security');
	pll_register_string('Join Us','Join Us');
	pll_register_string('Qualification','Qualification');
	pll_register_string('Email','Email:');
	pll_register_string('Converter','Converter');
	pll_register_string('Viewer','Viewer');
	pll_register_string('Simulator','Simulator');
	pll_register_string('Toptimizer','Toptimizer');
	pll_register_string('Follow Us','Follow Us');
	pll_register_string('join us','join us');
	pll_register_string('ying ping jian li','应聘简历发送至');
	pll_register_string('news center','news center');
	pll_register_string('Video','Video');
	pll_register_string('fan hui xin wen zhong xin','返回新闻中心');
	pll_register_string('xiang guan xin wen','相关新闻');
	pll_register_string('fan hui shi pin zhong xin','返回视频中心');
	pll_register_string('fan hui bo ke zhong xin','返回博客中心');
	pll_register_string('fan hui he zuo huo ban zhong xin','返回合作伙伴中心');
	pll_register_string('fan hui yong hu gu shi zhong xin','返回用户故事中心');
	pll_register_string('fan hui jie jue fang an','返回案例库');
	pll_register_string('tong lei jiao cheng','同类教程');
	pll_register_string('Comments','Comments');
	pll_register_string('Watch Now','Watch Now');
	pll_register_string('Changelog','Changelog');
	pll_register_string('Function','Function');
	pll_register_string('blog','blog');
	pll_register_string('FEATURES','FEATURES');
	pll_register_string('Features','Features');
	pll_register_string('FEATURED CUSTOMER STORIES','FEATURED CUSTOMER STORIES');

	pll_register_string('LIVE','LIVE');
	pll_register_string('yi jing jie shu de zhi bo','yi jing jie shu de zhi bo');
	pll_register_string('ji jiang jin xing de zhi bo','ji jiang jin xing de zhi bo');
	pll_register_string('fan hui zhi bozhong xin','返回直播中心');
	pll_register_string('zhi bo shi jian','直播时间');
	pll_register_string('shi yong ren qun','适用人群');
	pll_register_string('yi bao ming','已报名');
	pll_register_string('ren','人');
	pll_register_string('li ji bao ming','立即报名');
	pll_register_string('zhi bo nei rong','直播内容');
	pll_register_string('li ji guan kan','立即观看');
	pll_register_string('yi jie shu','已结束');
	pll_register_string('language','语言');

	pll_register_string('banner_jiejuefangan','解决方案');
	pll_register_string('cases','案例库');
	pll_register_string('nav_all','all');
	pll_register_string('nav_structural_analysis','structural analysis');
	pll_register_string('nav_topology_optimization','topology optimization');
	pll_register_string('nav_pre_processor','pre processor');
	pll_register_string('nav_converter','converter');
	pll_register_string('nav_online_collaboration','online collaboration');
	pll_register_string('nav_3d_printing','3d printing');
	pll_register_string('nav_automotive','Automotive');

	pll_register_string('Functional description','Functional description');

	pll_register_string('error_tips','error_tips');
	pll_register_string('error_goto','error_goto');
	pll_register_string('error_home','error_home');


}

/** 搜索表单 */
function my_search_form( $form ) {
	$form = '<form role="search" class="neck-bar-search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div class="form-group input-group">
	<input type="text" name="s" id="search" placeholder="Search" class="form-control" />
	<input type="hidden" name="cat" value="'. get_category_root_id(the_category_ID(false)) .'" />
    <button type="submit" class="input-group-addon"><i class="glyphicon glyphicon-search"></i></button>
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'my_search_form' );


/**  分类 */

//获取根分类
function get_category_root_id($cat){ 
	$this_category = get_category($cat);   // 取得当前分类 
	while($this_category->category_parent){ 
		$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬） 
	} 
	return $this_category->term_id; // 返回根分类的id号 
}

function get_category_root_slug($cat){ 
	$this_category = get_category($cat);   // 取得当前分类 
	while($this_category->category_parent){ 
		$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬） 
	} 
	return $this_category->slug; // 返回根分类的id号 
}

//获取并输入某个分类的子分类
function post_is_in_descendant_category( $cats, $_post = null )
{
  foreach ( (array) $cats as $cat ) {
    // get_term_children() accepts integer ID only
    $descendants = get_term_children( (int) $cat, 'category');
    if ( $descendants && in_category( $descendants, $_post ) )
      return true;
  }
  return false;
}
//富文本
function enable_more_buttons($buttons) {   
	$new_btn = array('formatselect', 'fontselect', 'fontsizeselect', 'bold', 'italic', 'bullist', 'numlist', 'blockquote', 'alignleft', 'aligncenter', 'alignright', 'link', 'wp_more', 'spellchecker','strikethrough', 'hr', 'forecolor','backcolor', 'pastetext', 'removeformat', 'charmap', 'outdent', 'indent','undo','redo' );
     return $new_btn;   
     }   
add_filter("mce_buttons", "enable_more_buttons"); 

//头像
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
	$myavatar = 'https://oss.simright.com/avatar/default_avatar';
	$avatar_defaults[$myavatar] = " Simright Default Gravatar";
	return $avatar_defaults;
}

function add_comment_meta_values($comment_id) {
	    if(isset($_POST['avatar'])) {
			$avatar = wp_filter_nohtml_kses($_POST['avatar']);
			add_comment_meta($comment_id, 'avatar', $avatar, false);
		}
	}
add_action ('comment_post', 'add_comment_meta_values', 1);
?>