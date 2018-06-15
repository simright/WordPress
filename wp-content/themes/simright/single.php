<?php
    $rootCategory = get_category_root_slug(the_category_ID(false));
    if ( $rootCategory === 'video')
    {
        include(TEMPLATEPATH .'/single-video.php');
    }
    elseif ( $rootCategory === 'news')
    {
        include(TEMPLATEPATH . '/single-news.php');
    }
    elseif ( $rootCategory === 'joinus')
    {
        include(TEMPLATEPATH . '/single-joinus.php');
    }
    elseif ( $rootCategory === 'blogs')
    {
        include(TEMPLATEPATH . '/single-blogs.php');
    }
    elseif ( $rootCategory === 'partners')
    {
        include(TEMPLATEPATH . '/single-partners.php');
    }
    elseif ( $rootCategory === 'customer-story')
    {
    include(TEMPLATEPATH . '/single-customer-story.php');
    }
    elseif ( $rootCategory === 'live')
    {
    include(TEMPLATEPATH . '/single-live.php');
    }
    else{
        echo $rootCategory;
        return;
    }
?>