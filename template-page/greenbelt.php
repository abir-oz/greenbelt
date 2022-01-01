<?php
/*
 * Template Name: Homepage
 */


get_header();

?>

<!-- Home -->
<?php // WP_Query arguments
$args = array(
	'post_type' => array( 'greenbeltslider' ),
);

// The Query
$slider = new WP_Query( $args );

// The Loop
if ( $slider->have_posts() ): ?>
    <div class="slide-one-item home-slider owl-carousel">
		<?php while ( $slider->have_posts() ): $slider->the_post(); ?>
            <div <?php post_class( "site-blocks-cover overlay" ); ?>
                    style="background-image:url('<?php esc_url( the_post_thumbnail_url( 'large' ) ); ?>');"
                    >
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-8">
                            <h1 class="text-white font-weight-light"><?php the_title(); ?></h1>
							<?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>


		<?php
		endwhile;
		?>
    </div>
	<?php
	wp_reset_query();

endif;
?>


<!--    tour package overlap-section-->
<?php // WP_Query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type'      => array( 'tourpackage' ),
	'paged'          => $paged,
	'posts_per_page' => '6',
);

// The Query
$tourpackage = new WP_Query( $args );

?>


<?php if ( $tourpackage->have_posts() ): ?>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black"><?php echo get_opt_value( 'opt-tpack', '' ); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>

            <div id="tourpackage" class="row mb-5">
				<?php while ( $tourpackage->have_posts() ):$tourpackage->the_post(); ?>
                    <div <?php post_class( "col-md-6 col-lg-4 mb-4 mb-lg-4" ); ?>>
                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
							<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                            <div class="unit-1-text">
                                <strong class="text-primary mb-2 d-block">&#2547;<?php echo get_post_meta( get_the_ID(), 'tour-cost', true ) ?></strong>
                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
				<?php endwhile; ?>
            </div>
			<?php if ( $tourpackage->max_num_pages > 1 ): ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <a href="<?php echo get_post_type_archive_link( 'tourpackage' ); ?>" class="btn btn-primary py-2 px-3">
	                        <?php _e( 'আরোও ট্যুর প্যাকেজ দেখুন', 'greenbelt' ); ?>
                        </a>

                    </div>
                </div>
			<?php endif; ?>

        </div>
    </div>
	<?php
	wp_reset_query();
endif; ?>

<!--    tour package end-->


<!--    testimonials-->

<?php
$args = array(
	'post_type'      => array( 'testimonial' ),
	'posts_per_page' => '-1',
);

// The Query
$testimonial = new WP_Query( $args );

?>

<?php if ( $testimonial->have_posts() ): ?>
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
						<?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>

                            <div <?php post_class( "single_carousel" ); ?>>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
												<?php the_post_thumbnail( 'testimonial_thumb', 'class=rounded-circle' ); ?>
                                            </div>
                                            <p>
												<?php
												the_excerpt();
												?>
                                            </p>
                                            <div class="testmonial_author">

												<?php if ( function_exists( "the_field" ) ) :
													$have_fb = get_field( 'have_fb_id' );
													$fb_url2 = get_field( 'fb_url' );
													$trav_name = get_field( 'name' );
													$trav_des = get_field( 'designation' );


													?>

                                                    <p class="text-center">
														<?php if ( ! empty( $have_fb ) ) {
															echo '<a href="' . $fb_url2 . '"target="_blank">' . $trav_name . '</a>';

														} else {
															echo esc_html($trav_name);
														}
														?>
                                                        <br>
														<?php the_field( 'designation' ); ?>
                                                    </p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	wp_reset_query();
endif; ?>

<!--    testimonials end-->


<?php // WP_Query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type'      => array( 'post' ),
	'category_name'  => 'travel-info',
	'paged'          => $paged,
	'posts_per_page' => '6',
);

// The Query
$greenbelt_post = new WP_Query( $args );

?>


<?php if ( $greenbelt_post->have_posts() ): ?>

    <div class="site-section">

        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black"><?php echo get_opt_value( 'opt-tinfo', '' ); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>

            <div id="tourinfo" class="row mb-5 align-items-stretch">
				<?php while ( $greenbelt_post->have_posts() ):$greenbelt_post->the_post(); ?>
                    <div <?php post_class( "col-md-6 col-lg-4 mb-5 mb-lg-4" ); ?>>
                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
							<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
					<?php

					$the_cat = get_the_category();

					$category_name = $the_cat[0]->cat_name;

					$category_link = get_category_link( $the_cat[0]->cat_ID );

					?>

				<?php endwhile; ?>
            </div>


			<?php if ( $greenbelt_post->max_num_pages > 1 ): ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <a href="<?php echo esc_url($category_link); ?>" class="btn btn-primary py-2 px-3">
							<?php _e( 'আরোও ভ্রমণ তথ্য দেখুন', 'greenbelt' ); ?></a>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
	<?php
	wp_reset_query();
endif; ?>

<!--    tour info end-->


<!--    travelers blog-->

<?php // WP_Query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type'      => array( 'travblog' ),
	'paged'          => $paged,
	'posts_per_page' => '6',
);

// The Query
$greenbelt_travblog = new WP_Query( $args );

?>


<?php if ( $greenbelt_travblog->have_posts() ): ?>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black"><?php echo get_opt_value( 'opt-tblog', '' ); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>
            <div id="travelersblog" class="row align-items-stretch mb-5">

				<?php while ( $greenbelt_travblog->have_posts() ):$greenbelt_travblog->the_post(); ?>
					<?php
					$writer = get_post_meta( get_the_ID(), 'writer', true );
					$fb_url = get_post_meta( get_the_ID(), 'fb-url', true );
					$author = '<a href="' . $fb_url . '">' . $writer . '</a>';
					?>
                    <div <?php post_class( "col-md-6 col-lg-4 mb-5 mb-lg-4" ); ?>>
                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
							<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>

				<?php endwhile; ?>


            </div>
			<?php if ( $greenbelt_travblog->max_num_pages > 1 ): ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <a href="<?php echo get_post_type_archive_link( 'travblog' ); ?>"
                           class="btn btn-primary py-2 px-3">
                            <?php _e( 'আরোও ট্রাভেলার্স ব্লগ দেখুন', 'greenbelt' ); ?></a>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
	<?php
	wp_reset_query();
endif; ?>


<!--    travelers blog end-->


<!--    tour tips-->
<?php // WP_Query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type'      => array( 'post' ),
	'category_name'  => 'travel-tips',
	'paged'          => $paged,
	'posts_per_page' => '6',
);

// The Query
$greenbelt_tips = new WP_Query( $args );

?>


<?php if ( $greenbelt_tips->have_posts() ): ?>

    <div class="site-section">

        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black"><?php echo get_opt_value( 'opt-ttips', '' ); ?></h2>
                    <span class="title-border text-center"></span>
                </div>
            </div>

            <div id="tourtips" class="row mb-5 align-items-stretch">
				<?php while ( $greenbelt_tips->have_posts() ):$greenbelt_tips->the_post(); ?>
                    <div <?php post_class( "col-md-6 col-lg-4 mb-5 mb-lg-4" ); ?>>
                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
							<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
					<?php

					$the_cat = get_the_category();

					$category_name = $the_cat[0]->cat_name;

					$category_link = get_category_link( $the_cat[0]->cat_ID );

					?>
				<?php endwhile; ?>
            </div>

			<?php if ( $greenbelt_tips->max_num_pages > 1 ): ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <a href="<?php echo esc_url($category_link); ?>"
                           class="btn btn-primary py-2 px-3"><?php _e( 'আরোও ভ্রমণ টিপস দেখুন', 'greenbelt' ); ?></a>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
	<?php
	wp_reset_query();
endif; ?>

<!--    tour tips end-->
<?php get_footer(); ?>

