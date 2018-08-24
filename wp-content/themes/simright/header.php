<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
        <title><?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "search"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo 'not found!';
        } else {
            wp_title('',true);
        } ?></title>
    <meta name="keywords" content="simright,cloud CAE,web-based simulation,online simulation,finite element model converter,finite element model translator,ansys,nastran, abaqus,ls-dyna,openform,code-aster">    
    <meta name="description" content="Simright is a platform for cloud CAE and product design">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="https://oss.simright.com/img/favicon.ico">
    <link rel="stylesheet" href="https://oss.simright.com/static/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v24.0" type="text/css" media="screen" />
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86805722-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!--GA Code-->
</head>
<?php flush(); ?>
<body>
    <header class="highlight">
        <section>
            <a href="/" class="logo"><img src="https://oss.simright.com/images/logo.svg" alt="simright"></a> 
            <div class="login hidden-xs hidden-sm">
                <div class="sign-btn hide">
                    <a id='signIn' class="btn btn-nobg btn-round"><?php pll_e('Sign In'); ?></a>
                    <?php if(pll_current_language()=="zh"): ?>
                    <a href="/phone_register" class="btn btn-round"><b><?php pll_e('Sign Up'); ?></b></a></p> 
                    <?php else: ?>
                    <a href="/register" class="btn btn-round"><b><?php pll_e('Sign Up'); ?></b></a></p> 
                    <?php endif ?>
                </div>
                <li class="dropdown infomation hide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div><img src="https://oss.simright.com/images/header-clock.svg" alt=""></div>                         
                            <span class="hide notice-number"></span>
                        </a>
                        <div class="dropdown-menu position-right notice-dropdown" role="menu">
                            <div class="arrow"></div>
                            <div class="panel-heading"><span> <?php pll_e('Notifications');?></span><img src="https://oss.simright.com/images/icon-notice-close.svg" alt=""></div>
                            <ul class="panel-body" role="menu">
                                <b><?php pll_e('No news');?></b>
                            </ul>
                            <div class="panel-footer">
                                <a href="/user/notifications"><?php pll_e('More')?></a>
                            </div>
                        </div>
                    </li>
                <li class="dropdown hide" data-logined = "" data-email = "">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="avatar" src="" alt="">                             
                        <span class="text-overflow user-name"></span>
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/user/profile"><?php pll_e('Profile'); ?></a></li>
                        <li><a href="/user/settings"><?php pll_e('Setting'); ?></a></li>
                        <li><a href="/user/projects"><?php pll_e('My Projects'); ?></a></li>
                        <li><a href="/user/models"><?php pll_e('My Models'); ?></a></li>
                        <li><a href="/user/wallet"><?php pll_e('Wallet'); ?></a></li>
                        <li><a href="/user/usage-overview"><?php pll_e('Usage Overview'); ?></a></li>
                        <li role="presentation" class="divider"></li>
                        <li><a href="/logout"><?php pll_e('Logout'); ?></a></li>
                    </ul>
                </li>
            </div> 
            <div class="login hidden-md hidden-lg">
                <div class="sign-btn hide">
                    <a id='signIn-sm'><img class="avatar" width="40" height="40" src="https://oss.simright.com/images/header-user-avatar.svg" alt=""> </a>
                </div>
                <li class="dropdown infomation hide">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div><img src="https://oss.simright.com/images/header-clock.svg" alt=""></div>                         
                        <span class="hide notice-number"></span>
                    </a>
                    <div class="dropdown-menu position-right notice-dropdown" role="menu">
                        <div class="arrow"></div>
                        <div class="panel-heading"><span> <?php pll_e('Notifications');?></span><img src="https://oss.simright.com/images/icon-notice-close.svg" alt=""></div>
                        <ul class="panel-body" role="menu">
                            <b><?php pll_e('No news');?></b>
                        </ul>
                        <div class="panel-footer">
                            <a href="/user/notifications"><?php pll_e('More')?></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown hide" data-logined = "" data-email = "">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="avatar" src="" alt="">                             
                    </a>
                    <ul class="dropdown-menu position-right" role="menu">
                        <li><a href="/user/profile"><?php pll_e('Profile'); ?></a></li>
                        <li><a href="/user/settings"><?php pll_e('Setting'); ?></a></li>
                        <li><a href="/user/projects"><?php pll_e('My Projects'); ?></a></li>
                        <li><a href="/user/models"><?php pll_e('My Models'); ?></a></li>
                        <li><a href="/user/wallet"><?php pll_e('Wallet'); ?></a></li>
                        <li><a href="/user/usage-overview"><?php pll_e('Usage Overview'); ?></a></li>
                        <li role="presentation" class="divider"></li>
                        <li><a href="/logout"><?php pll_e('Logout'); ?></a></li>
                    </ul>
                </li>
            </div>  
            <nav class="navbar navbar-default" role="navigation">
                <li data-active = "index">
                    <a href="/">
                        <span>
                        <?php pll_e('Home'); ?>
                        </span>
                    </a>
                </li>
                <?php if(pll_current_language()=="zh"): ?>
                <li class="dropdown" data-active = "business">
                    <a href="#" class="dropdown-toggle hidden-lg hidden-md" data-toggle="dropdown"><span><b>业务方向</b> &nbsp;<i class="glyphicon glyphicon-chevron-down"></i></span></a>
                    <a href="/business" class="dropdown-toggle hidden-sm hidden-xs"><span><b>业务方向</b> &nbsp;<i class="glyphicon glyphicon-chevron-down"></i></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/apps">仿真产品</a></li>
                        <li><a href="/business/software-development">软件研发</a></li>
                        <li><a href="/business/advanced-design">先进设计</a></li>
                    </ul>
                </li>
                <?php endif?>
                <li class="dropdown" data-active = "products">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><b><?php pll_e('Products'); ?></b> &nbsp;<i class="glyphicon glyphicon-chevron-down"></i></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/apps"><?php pll_e('Public Cloud Apps'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-simulator"><?php pll_e('Simulator - Structural Analysis'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-toptimizer"><?php pll_e('Toptimizer - Topology Optimization'); ?></a></li>
                        <?php if(pll_current_language()=="zh"): ?>
                        <li class="sub-app"><a href="http://www.easypdm.cn"  target="_blank">EasyPDM - 在线三维数据协同</a></li>
                        <?php endif?>
                        <li class="sub-app"><a href="/apps/simright-threemagic"><?php pll_e('ThreeMagic - STL editor for 3D printing'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-viewer"><?php pll_e('Viewer - CAD/CAE model viewer'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-converter"><?php pll_e('CAE Converter - CAE model converter'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-cad-converter"><?php pll_e('CAD Converter - CAD model converter'); ?></a></li>
                        <li class="sub-app"><a href="/apps/simright-webmesher"><b><?php pll_e('WebMesher – Pre-processor'); ?></b><b style="font-size: 12px;position: relative;top: -6px;left: 5px;color: #ec4114;">Beta</b></a></li>
                        <?php if(pll_current_language()=="zh"): ?>
                        <li><a href="/products/private_cloud_zh"><?php pll_e('Private Cloud Solutions') ?> </a></li>
                        <?php else: ?>
                        <li><a href="/products/private_cloud"><?php pll_e('Private Cloud Solutions') ?> </a></li>
                        <?php endif ?>
                    </ul>
                </li>
                <li class="dropdown" data-active = "model-library">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span><b><?php pll_e('Resources'); ?></b>&nbsp;<i class="glyphicon glyphicon-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/<?php echo pll_current_language() ?>/category/press-solutions"><?php pll_e('解决方案'); ?></a></li>
                        <li><a href="/resources/public-projects"><?php pll_e('Public Projects'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/customer-story"><?php pll_e('User Stories') ?></a></li>
                        <li><a href="/resources/model-library"><?php pll_e('Model Library'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/partners"><?php pll_e('Partners'); ?></a></li>
                    </ul>
                </li>
                <li data-active = "price">
                    <a href="/product-price">
                        <span><?php pll_e('Pricing'); ?></span>
                    </a>
                </li>
                <li class="dropdown" data-active = "learning">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><b><?php pll_e('Learning'); ?></b>&nbsp; <i class="glyphicon glyphicon-chevron-down"></i></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/<?php echo pll_current_language() ?>/category/video"><?php pll_e('Video Library'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/live"><?php pll_e('Webinars'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/blogs"><?php pll_e('Blog'); ?></a></li>
                        <li><a href="/changelog" ><?php pll_e('Changelog'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/features" ><?php pll_e('Features'); ?></a></li>
                    </ul>
                </li>
                <li class="active" class="dropdown" data-active = "about" style="position:relative;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><b><?php pll_e('About'); ?></b>&nbsp;<i class="glyphicon glyphicon-chevron-down"></i></span></a>
                    <ul class="dropdown-menu position-right" role="menu">
                        <li><a href="/about_us"><?php pll_e('About Us'); ?></a></li>
                        <li><a href="/contact_us"><?php pll_e('Contact Us'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/joinus"><?php pll_e('Join Us'); ?></a></li>
                        <li><a href="/<?php echo pll_current_language() ?>/category/news"><?php pll_e('News'); ?></a></li>
                        <li><a href="/security"><?php pll_e('Security'); ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="open-google-translate">
                        <span>
                            <?php  
                                $lang = pll_current_language();
                                if($lang == "en"){
                                    echo "<b>EN</b>";
                                }else{
                                    echo "<b>中文</b>";
                                }
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu position-right" role="menu" id="open-google-translate-menu">
                        <?php pll_the_languages(array( 'raw' => 0 )); ?>
                        <?php pll_the_languages(array( 'raw' => 1 )); ?>
                    </ul>
                </li>
            </nav>
        </section>
    </header>