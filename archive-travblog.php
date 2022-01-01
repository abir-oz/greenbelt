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
                    <h2 class="font-weight-light text-black headertwo"><?php _e("ট্রাভেলার্স ব্লগ","greenbelt"); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>
            <div class="row mb-3 align-items-stretch">
                <?php while (have_posts()):the_post(); ?>
                    <?php
                    $writer = get_post_meta(get_the_ID(), 'writer', true);
                    $fb_url = get_post_meta(get_the_ID(), 'fb-url', true);
                    ?>
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <?php the_post_thumbnail('blog_thumb', 'class=img-fluid'); ?>
                            <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php if ($writer): ?>
                                <div class="meta mb-5"><?php _e("লিখেছেন", "greenbelt"); ?> <a
                                            href="<?php echo esc_url($fb_url); ?>" target="_blank"><?php echo esc_html($writer); ?></a>
                                    <span
                                            class="mx-2">&bullet;
                                    </span>
                                    <?php echo get_the_date(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="blog-pagination justify-content-center d-flex">
                        <?php greenbelt_pagination(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>