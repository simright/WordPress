<?php
    $rootCategory = get_category_root_slug(the_category_ID(false));
    if ( $rootCategory === 'video')
    {
    include(TEMPLATEPATH .'/category-video.php');
    }
    elseif ( $rootCategory === 'news')
    {
    include(TEMPLATEPATH . '/category-news.php');
    }
    elseif ( $rootCategory === 'joinus')
    {
    include(TEMPLATEPATH . '/category-joinus.php');
    }
    elseif ( $rootCategory === 'blogs')
    {
    include(TEMPLATEPATH . '/category-blogs.php');
    }
    elseif ( $rootCategory === 'features')
    {
    include(TEMPLATEPATH . '/category-features.php');
    }
    elseif ( $rootCategory === 'partners')
    {
    include(TEMPLATEPATH . '/category-partners.php');
    }
    elseif ( $rootCategory === 'customer-story')
    {
    include(TEMPLATEPATH . '/category-customer-story.php');
    }
    elseif ( $rootCategory === 'live')
    {
    include(TEMPLATEPATH . '/category-live.php');
    }
    elseif ( $rootCategory === 'press-solutions')
    {
    include(TEMPLATEPATH . '/category-press-solutions.php');
    }
    elseif ( $rootCategory === 'pdm')
    {
    include(TEMPLATEPATH . '/category-pdm.php');
    }
    else{
        echo $rootCategory;
        return;
    }
?>