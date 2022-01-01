<?php get_header(); ?>

<div class="site-section ">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black headertwo">ট্যুর প্যাকেজ</h2>
                <span class="title-border"></span>
            </div>
        </div>

        <div id="tourpackage" class="row mb-5">
            <?php while (have_posts()): the_post(); ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
                        <?php the_post_thumbnail("hompage_thumb", 'class=img-fluid'); ?>
                        <div class="unit-1-text">
                            <strong class="text-primary mb-2 d-block">&#2547;<?php echo get_post_meta(get_the_ID(), 'tour-cost', true) ?></strong>
                            <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                        </div>
                    </a>
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

<?php get_footer('tourpackage'); ?>