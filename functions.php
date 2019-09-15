<?php

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {

  // GOOGLE MAPS API FOR ACF
  function my_acf_google_map_api( $api ){
    $api['key'] = ''; // Google Maps API KEY tähän
    return $api;
  }
  add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

  // ACF OPTIONS
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title' 	=> 'Teeman asetukset',
      'menu_title'	=> 'Teeman asetukset',
      'menu_slug' 	=> 'theme_settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    acf_add_options_sub_page( array(
      'page_title' 	=> 'Teeman sisällöt',
      'menu_title'	=> 'Teeman sisällöt',
      'parent_slug'	=> 'theme_settings',
      'post_id'     => 'theme'
    ));
  }

  // ACF BLOCK CATEGORY
  add_filter( 'block_categories', 'acf_block_category', 10, 2);
  function acf_block_category( $categories, $post ) {
    return array_merge(
      array( array(
        'slug' => 'acf',
        'title' => __( 'ACF-lohkot', 'digimoguli' )
      ) ),
      $categories
    );
  }

  // ACF BLOCKS
  add_action('acf/init', 'register_acf_blocks');
  function register_acf_blocks() {

    // Haitari
    acf_register_block_type( array(
        'name'              => 'read-more',
        'title'             => __('Read More'),
        'description'       => __('Read More -block.'),
        'render_template'   => 'acf/blocks/read-more.php',
        'icon'              => 'welcome-add-page',
        'keywords'          => array( 'read', 'more' ),
    ) );

  }

  // ACF BACKEND STYLING
  add_action('acf/input/admin_head', 'my_acf_admin_head');
  function my_acf_admin_head() { ?>

    <style type="text/css">
      .acf-flexible-content .layout .acf-fc-layout-handle{background-color:#dcdcdc;color:#444;display:flex;padding:12px 10px}.acf-fc-layout-handle .thumbnail{padding:3px;margin-right:5px}.acf-fc-layout-handle img{padding:3px;border:1px solid #ccc;background:#fff;position:absolute;top:-10px}.acf-fc-layout-handle h4{margin:0}.acf-flexible-content .layout .acf-fc-layout-order{margin-right:10px}.acf-flexible-content .layout .acf-fc-layout-controls{top:12px}.acf-repeater.-block > table > tbody > tr > td,.acf-repeater.-row > table > tbody > tr > td{border-top:4px solid #333333}.acf-repeater .acf-row-handle{vertical-align:top !important;padding-top:16px}.acf-repeater .acf-row-handle span{font-size:22px;font-weight:bold;color:#333333}.imageUpload img{width:75px}.acf-repeater .acf-row-handle .acf-icon.-minus{top:30px}.acf-flexible-content .layout .acf-fc-layout-controlls .acf-icon.-collapse{color:#394049;border-color:#eeeeee}.acf-flexible-content .layout .acf-fc-layout-controlls .acf-icon.-collapse:hover{color:#848895;background:#ffffff}
    </style>
    <?php
  }
}

if ( ! function_exists( 'oskarijarvelin_setup' ) ) :
	function oskarijarvelin_setup() {

		load_theme_textdomain( 'oskarijarvelin', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
        'paavalikko' => __( 'Päävalikko', 'oskarijarvelin' ),
        'ylavalikko' => __( 'Ylävalikko', 'oskarijarvelin' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );

		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'oskarijarvelin' ),
					'shortName' => __( 'S', 'oskarijarvelin' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'oskarijarvelin' ),
					'shortName' => __( 'M', 'oskarijarvelin' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'oskarijarvelin' ),
					'shortName' => __( 'L', 'oskarijarvelin' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'oskarijarvelin' ),
					'shortName' => __( 'XL', 'oskarijarvelin' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'oskarijarvelin_setup' );


function oskarijarvelin_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sivupalkki', 'oskarijarvelin' ),
			'id'            => 'sivupalkki',
			'description'   => __( 'Lisää vimpaimia näyttääksesi ne sivupalkissa.', 'oskarijarvelin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'oskarijarvelin_widgets_init' );

function oskarijarvelin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oskarijarvelin_content_width', 640 );
}
add_action( 'after_setup_theme', 'oskarijarvelin_content_width', 0 );



function oskarijarvelin_scripts() {

  /* Bootstrap v4.3.1*/
  wp_enqueue_style( 'bootstrap-styles', get_theme_file_uri( 'depencies/bootstrap/bootstrap.min.css' ), array(), '' );
	wp_enqueue_script( 'bootstrap-scripts', get_theme_file_uri( 'depencies/bootstrap/bootstrap.bundle.min.js' ), array( 'jquery' ), '' );

  /* Parallax v3.1.0*/
	wp_enqueue_script( 'parallax-scripts', get_theme_file_uri( 'depencies/parallax/parallax.min.js' ), array(), '' );

  /* Swiper v4.5.0*/
  wp_enqueue_style( 'swiper-styles', get_theme_file_uri( 'depencies/swiper/swiper.min.css' ), array(), '' );
	wp_enqueue_script( 'swiper-scripts', get_theme_file_uri( 'depencies/swiper/swiper.min.js' ), array(), '' );

  /* Font Awesome v5.9.0*/
	wp_enqueue_script( 'fontawesome-scripts', 'https://kit.fontawesome.com/5269f87579.js', array(), '' );

	wp_enqueue_style( 'theme-styles', get_theme_file_uri( 'style.min.css' ), array(), '' );
	wp_enqueue_script( 'theme-scripts', get_theme_file_uri( 'script.min.js' ), array( 'jquery' ), '' );
}
add_action( 'wp_enqueue_scripts', 'oskarijarvelin_scripts' );
