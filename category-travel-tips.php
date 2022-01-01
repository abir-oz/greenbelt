<?php get_header();
?>
    <style>
        .fb_reset{
            display: none!important;
        }
    </style>


    <div class="site-section">

        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black"><?php _e("ট্রাভেল টিপস", "greenbelt"); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>

            <div id="tourtips" class="row mb-5 align-items-stretch">
                <?php while (have_posts()):the_post(); ?>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-4">
                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
                            <?php the_post_thumbnail("hompage_thumb", 'class=img-fluid'); ?>
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <nav class="blog-pagination justify-content-center d-flex">
                        <?php greenbelt_pagination(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>