<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>



<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header id="sticky-header" class="site-navbar py-1" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="logo_img">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo "<h1><a class='text-black h2 mb-0' href='" . home_url("/") . "'>" . get_bloginfo('name') . "</a></h1>";
                        }
                        ?>

                    </div>
                </div>
                <div class="col-10 col-md-8 d-none d-xl-block">
                    <?php get_template_part("template-parts/common/navigation"); ?>
                </div>

                <div class="col-6 col-xl-2 text-right">
                    <?php
                    if (is_active_sidebar("header-social")) {
                        $header_social = dynamic_sidebar("header-social");
                    }

                    ?>

                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                    </div>


                </div>

            </div>

        </div>
        <div class="seach_icon">
            <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                <i class="icon-search"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">


	                <?php get_search_form(); ?>

                </div>
            </div>
        </div>

    </header>
