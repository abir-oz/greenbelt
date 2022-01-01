<?php


	flush_rewrite_rules( true );
	if ( site_url() == "http://greenbeltbd.local" ) {
		define( "VERSION", time() );
	} else {
		define( "VERSION", wp_get_theme()->get( "Version" ) );
	}
	require_once get_theme_file_path( '/inc/tgm.php' );
	require_once get_theme_file_path( '/inc/cmb2-mb.php' );
	require_once get_theme_file_path( '/inc/acf-mb.php' );
	require_once get_theme_file_path( '/inc/redux-option.php' );
	require_once get_theme_file_path( '/widgets/header-social-icons-widget.php' );
	require_once get_theme_file_path( '/widgets/social-icons-widget.php' );

	function greenbelt_supports() {
		load_theme_textdomain( "greenbelt" );
		add_theme_support( "title-tag" );
		add_theme_support( "post-thumbnails" );
		add_theme_support( "html5", array( 'search-form', 'comment-list' ) );
		add_theme_support( "custom-logo" );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
		add_editor_style( "/assets/css/editor-style.css" );
		register_nav_menu( "topmenu", __( "Main Menu", "greenbelt" ) );
		add_image_size( "hompage_thumb", 540, 360, array( "center", "center" ) );
		add_image_size( "blog_thumb", 540, 360, array( "center", "center" ) );
		add_image_size( "testimonial_thumb", 400, 400, array( "center", "center" ) );
		if ( ! isset( $content_width ) ) {
			$content_width = 900;
		}

	}

	add_action( 'after_setup_theme', 'greenbelt_supports' );


	function my_custom_sizes( $sizes ) {
		return array_merge( $sizes, array(
			'hompage_thumb'     => __( 'Homepage Thumbnail', 'greenbelt' ),
			'blog_thumb'        => __( 'Blogpage Thumbnail', 'greenbelt' ),
			'testimonial_thumb' => __( 'Testimonial Thumbnail', 'greenbelt' ),
		) );
	}

	add_filter( 'image_size_names_choose', 'my_custom_sizes' );

	function greenbelt_assets() {

		$baseName = basename( get_page_template() );


		wp_enqueue_style( "icomoon-css", get_theme_file_uri( "assets/fonts/icomoon/style.css" ), null, VERSION );
		wp_enqueue_style( "banglafont", get_theme_file_uri( "assets/fonts/banglafont/banglafont.css" ), null, VERSION );
		wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "assets/css/bootstrap.min.css" ), null, VERSION );
		wp_enqueue_style( "style-css", get_theme_file_uri( "assets/css/style.css" ), null, VERSION );


		//script

		wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "assets/js/bootstrap.min.js" ), array( 'jquery' ), 1.0, true );

		if ( ! is_single() ) {
			wp_enqueue_style( "aos-css", get_theme_file_uri( "assets/css/aos.css" ), null, VERSION );
			wp_enqueue_script( "aos-js", get_theme_file_uri( "assets/js/aos.js" ), array( 'jquery' ), 1.0, true );
		}

		//styles
		if ( $baseName == 'greenbelt.php' || is_front_page() ) {
			wp_enqueue_style( "owl-carousel-css", get_theme_file_uri( "assets/css/owl.carousel.min.css" ), null, VERSION );
			wp_enqueue_script( "owl-carousel-js", get_theme_file_uri( "assets/js/owl.carousel.min.js" ), array( 'jquery' ), 1.0, true );
			wp_enqueue_script( "jquery-stellar-js", get_theme_file_uri( "assets/js/jquery.stellar.min.js" ), array( 'jquery' ), 1.0, true );
			wp_enqueue_script( "custom-js", get_theme_file_uri( "assets/js/custom.js" ), array( 'jquery' ), 1.0, true );
			wp_enqueue_style( "homefont-css", "//fonts.googleapis.com/css?family=Nothing+You+Could+Do|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap
", null, VERSION );

		} else {
			wp_enqueue_script( "mmenu-js", get_theme_file_uri( "assets/js/mmenu.js" ), array( 'jquery' ), 1.0, true );
		}
		if ( is_singular() ) {
			wp_enqueue_script( "comment-reply" );
		}
	}

	add_action( 'wp_enqueue_scripts', 'greenbelt_assets' );


	function greenbelt_pagination() {
		global $wp_query;
		$links = paginate_links( array(
			'current'  => max( 1, get_query_var( 'paged' ) ),
			'total'    => $wp_query->max_num_pages,
			'type'     => 'list',
			'mid_size' => apply_filters( "greenbelt_pagination_mid_size", 2 ),
		) );
		$links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $links );
		$links = str_replace( "page-numbers", "page-link", $links );
		$links = str_replace( "<li>", "<li class='page-item'>", $links );
		$links = str_replace( "Previous", "", $links );
		$links = str_replace( "Next", "", $links );

		echo wp_kses_post( $links );
	}

	remove_action( "term_description", "wpautop" );


	function greenbelt_custom_excerpt_length( $length ) {
		return 30;
	}

	add_filter( 'excerpt_length', 'greenbelt_custom_excerpt_length', 999 );

	function greenbelt_excerpt_more( $more ) {
		if ( ! is_single() ) {
			$more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
				get_permalink( get_the_ID() ),
				__( '....আরো দেখুন', 'greenbelt' )
			);
		}

		return $more;
	}

	add_filter( 'excerpt_more', 'greenbelt_excerpt_more' );


	function greenbelt_widgets() {

		register_sidebar( array(
			'name'          => __( 'Header Section', 'greenbelt' ),
			'id'            => 'header-social',
			'description'   => __( 'Widgets in this area will be shown on header section.', 'greenbelt' ),
			'before_widget' => '<div id="%1$s" class="%2$s d-none d-xl-inline-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Section', 'greenbelt' ),
			'id'            => 'footer-social',
			'description'   => __( 'footer section, right side', 'greenbelt' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Tagcloud', 'greenbelt' ),
			'id'            => 'footer-tagcloud',
			'description'   => __( 'footer section, right side', 'greenbelt' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_title text-left">',
			'after_title'   => '</h4><span class="title-border"></span>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Facebook', 'greenbelt' ),
			'id'            => 'footer-facebook',
			'description'   => __( 'footer section, right side', 'greenbelt' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_title text-left">',
			'after_title'   => '</h4><span class="title-border"></span>',
		) );
	}

	add_action( "widgets_init", "greenbelt_widgets" );

	function greenbelt_search_form( $form ) {
		$homedir      = home_url( "/" );
		$label        = __( "Search for:", "greenbelt" );
		$button_label = __( "Search", "greenbelt" );
		$newform      = <<<FORM
<form role="search" method="get" class="serch_form" action="{$homedir}">
   
        <input type="search" placeholder="Type Keywords" value="" name="s"
               title="{$label}" autocomplete="off">
    
    <button type="submit" value="{$button_label}">Search</button>
</form>
FORM;

		return $newform;

	}

	add_filter( "get_search_form", "greenbelt_search_form" );


	function get_opt_value( $key, $default = '' ) {
		if ( class_exists( 'Redux' ) ) {
			return Redux::get_option( 'greenbelt_opt', $key, $default );
		} else {
			return $default;
		}
	}


	if ( ! function_exists( 'greenbelt_post_views' ) ) :
		/**     * get the value of view.     */
		function greenbelt_post_views( $postID ) {
			$count_key = 'wpb_post_views_count';
			$count     = get_post_meta( $postID, $count_key, true );
			if ( $count == '' ) {
				$count = 1;
				delete_post_meta( $postID, $count_key );
				add_post_meta( $postID, $count_key, '1' );
			} else {
				$count ++;
				update_post_meta( $postID, $count_key, $count );
			}
		}
	endif;