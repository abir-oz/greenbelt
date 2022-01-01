<nav class="site-navigation position-relative text-right text-lg-center" role="navigation">


    <?php
    $greenbelt_menu = wp_nav_menu( array(
        'theme_location' => 'topmenu',
        'menu_id' => 'topmenu',
        'menu_class' => 'site-menu js-clone-nav mx-auto d-none d-lg-block',
        'echo'           => false
    ) );

    $greenbelt_menu = str_replace("menu-item-has-children","menu-item-has-children has-children",$greenbelt_menu);
    $greenbelt_menu = str_replace("sub-menu","sub-menu dropdown",$greenbelt_menu);
    $greenbelt_menu = str_replace("current-menu-item","current-menu-item active",$greenbelt_menu);
    echo wp_kses_post($greenbelt_menu);
    ?>


</nav>