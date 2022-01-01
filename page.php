<?php get_header(); ?>
    <div class="site-section bg-light single-post">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mb-5">
					<?php while ( have_posts() ):the_post(); ?>
						<?php
						$writer = get_post_meta( get_the_ID(), 'writer', true );
						$fb_url = get_post_meta( get_the_ID(), 'fb-url', true );
						$author = '<a href="' . $fb_url . '"target="_blank">' . $writer . '</a>';
						$date   = get_the_date();
						?>
                        <div <?php post_class( "h-entry p_add bg-white" ); ?>>

							<?php if ( has_post_thumbnail() ) {
								echo '<p class="thumbnail text-center">';
								the_post_thumbnail( "full", "class=img-fluid" );
								$tumbnail_caption = get_the_post_thumbnail_caption();
								if ( ! empty( $tumbnail_caption ) ) {
									echo '<p class="wp-caption-text">';
									echo esc_html($tumbnail_caption);
									echo '</p>';
								}
								echo '</p>';
							}
							?>
                            <div class="meta mb-5">
                                <h2 class="font-size-regular text-bold mt-4"><?php the_title(); ?></h2>

                                <span class="author-meta-self">
                                <?php if ( ! empty( $writer ) ) {
	                                echo '<strong>';
	                                _e( "লিখেছেন -", "greenbelt" );
	                                echo '</strong>';

	                                echo " " . $author;


		                                echo '<span class="mx-2">&bullet;</span>' . $date;

                                }
                                ?>
                                    </span>
                            </div>
							<?php the_content(); ?>
                        </div>
					<?php endwhile; ?>
                </div>
            </div>

			<?php if ( function_exists( "the_field" ) ) : ?>
				<?php
				$related_posts = get_field( "related_posts" );
				$greenbelt_wm  = new WP_Query( array(
					'post_type' => 'travblog',
					'post__in'  => $related_posts,
					'orderby'   => 'post__in',
				) ); ?>
				<?php if ( ! empty( $related_posts ) ): ?>
                    <div class="container">


                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7 text-center">
                                    <h2 class="font-weight-light text-black"><?php echo esc_html($author);
										_e( " এর অন্যান্য লিখা", "greenbelt" ); ?></h2>
                                </div>
                            </div>

                            <div class="row align-items-stretch mb-3">
								<?php while ( $greenbelt_wm->have_posts() ):
									$greenbelt_wm->the_post(); ?>
                                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-4">
                                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
											<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                                            <div class="unit-1-text">
                                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                                            </div>
                                        </a>
                                    </div>
								<?php endwhile;
								wp_reset_query(); ?>
                        </div>
                    </div>
				<?php endif; ?>

				<?php
				$tour_guide   = get_field( "tour_guide" );
				$greenbelt_tg = new WP_Query( array(
					'post_type'      => 'post',
					'category_name'  => 'travel-info',
					'post__in'       => $tour_guide,
					'orderby'        => 'post__in',
					'posts_per_page' => '-1'
				) );
				?>

				<?php if ( ! empty( $tour_guide ) ): ?>
                    <div class="container">

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7 text-center">
                                    <h2 class="font-weight-light text-black"><?php _e( "ভ্রমণ গাইড পড়ুন", "greenbelt" ); ?></h2>
                                </div>
                            </div>

                            <div class="row align-items-stretch mb-3">
								<?php while ( $greenbelt_tg->have_posts() ):
									$greenbelt_tg->the_post(); ?>
                                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-4">
                                        <a href="<?php the_permalink(); ?>" class="unit-1 text-center">
											<?php the_post_thumbnail( "hompage_thumb", 'class=img-fluid' ); ?>
                                            <div class="unit-1-text">
                                                <h3 class="unit-1-heading"><?php the_title(); ?></h3>
                                            </div>
                                        </a>
                                    </div>
								<?php endwhile;
								wp_reset_query(); ?>
                        </div>
                    </div>
				<?php endif; ?>

			<?php endif; ?>
        </div>
    </div>


<?php get_footer(); ?>