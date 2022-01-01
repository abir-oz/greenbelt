<?php get_header();

?>
    <style>
        .fb_reset {
            display: none !important;
        }
    </style>

    <div class="site-section bg-light single-post">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mb-5">

                    <div class="testimonial_area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <?php while (have_posts()) :the_post(); ?>
                                        <div class="testmonial_active">
                                            <div class="single_carousel">
                                                <div class="row justify-content-center">

                                                    <div class="col-lg-10 offset-1">
                                                        <div class="single_testmonial text-center tex_font">
                                                            <div class="author_thumb_big">
                                                                <?php the_post_thumbnail('large', 'class=img-fluid'); ?>
                                                            </div>
                                                            <p>
                                                                <?php
                                                                the_content();
                                                                ?>
                                                            </p>
                                                            <span class="title-border"></span>

                                                            <div class="testmonial_author">

                                                                <?php if (function_exists("the_field")) :
                                                                    $have_fb = get_field('have_fb_id');
                                                                    $fb_url2 = get_field('fb_url');
                                                                    $trav_name = get_field('name');
                                                                    $trav_des = get_field('designation');


                                                                    ?>

                                                                    <p class="text-center">
                                                                        <?php if (!empty($have_fb)) {
                                                                            echo '<a href="' . $fb_url2 . '"target="_blank">' . $trav_name . '</a>';

                                                                        } else {
                                                                            echo esc_html($trav_name);
                                                                        }
                                                                        ?>
                                                                        <br>
                                                                        <?php the_field('designation'); ?>
                                                                    </p>
                                                                <?php endif; ?>
                                                            </div>
                                                            <hr>
                                                            <div class="col-md-4 offset-md-1 mb-5 float-left">
                                                                <?php
                                                                $greenbelt_prev_post = get_previous_post();
                                                                if ($greenbelt_prev_post):
                                                                    ?>
                                                                    <a href="<?php echo get_the_permalink($greenbelt_prev_post); ?>"
                                                                       rel="prev">
                                                                        <span><?php _e("Previous Post", "greenbelt"); ?></span>
                                                                        <?php echo get_the_title($greenbelt_prev_post); ?>
                                                                    </a>
                                                                <?php
                                                                endif;
                                                                ?>
                                                            </div>

                                                            <div class="col-md-4 offset-md-1 mb-5 float-right">
                                                                <?php
                                                                $greenbelt_next_post = get_next_post();
                                                                if ($greenbelt_next_post):
                                                                    ?>
                                                                    <a href="<?php echo get_the_permalink($greenbelt_next_post); ?>"
                                                                       rel="next">
                                                                        <span><?php _e("Next Post", "greenbelt"); ?></span>
                                                                        <?php echo get_the_title($greenbelt_next_post); ?>
                                                                    </a>
                                                                <?php
                                                                endif;
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>