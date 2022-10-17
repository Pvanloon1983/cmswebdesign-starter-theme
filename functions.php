<?php

function cmswebdesign_scripts() {

  // Style.css (if you want to use tailwind css)
  // wp_enqueue_style( 'head-style', get_stylesheet_uri() ); 

  // Bootstrap 5 CSS
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css', array(), '5.2.2', 'all' );

  // Font awesome CSS
  wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all' );

  // Own CSS
  wp_enqueue_style( 'styles-css', get_template_directory_uri() . './dist/css/main.css', array(), '1.0', 'all');  
  
  // Bootstrap 5 JS
  wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array (), '5.2.2', true);

  // Own JS
  wp_enqueue_script( 'scripts-js', get_template_directory_uri() . './dist/js/main.js', array ( 'jquery' ), '1.0', true);
 
}
add_action( 'wp_enqueue_scripts', 'cmswebdesign_scripts' );

function cmswebdesign_setup() {
  /*
  * Make theme available for translation.
  * Translations can be filed in the /languages/ directory.
  */
  load_theme_textdomain( 'cmswebdesign', get_template_directory() . '/languages' );

  
  register_nav_menus( array(
    'main-menu'   => __( 'Main Menu', 'cmswebdesign' ),
  ) );

  /*
  * Enable support for Post Thumbnails on posts and pages.
  *
  * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  */
  add_theme_support( 'post-thumbnails' );

  // Set post thumbnail size.
  set_post_thumbnail_size( 1200, 9999 );

  /**
   * Post formats allow users to format their posts in different ways. This is useful for allowing bloggers to choose    different formats and templates based on the content of the post. add_theme_support() is also used for Post Formats. This is recommended.
   */
  add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

  // Custom logo.
  $logo_width  = 120;
  $logo_height = 90;

  // If the retina setting is active, double the recommended width and height.
  if ( get_theme_mod( 'retina_logo', false ) ) {
    $logo_width  = floor( $logo_width * 2 );
    $logo_height = floor( $logo_height * 2 );
  }

  add_theme_support(
    'custom-logo',
    array(
      'height'      => $logo_height,
      'width'       => $logo_width,
      'flex-height' => true,
      'flex-width'  => true,
    )
  );

  /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
  add_theme_support( 'title-tag' );

  /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
      'navigation-widgets',
    )
  );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

  // Add support for responsive embeds.
  add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'cmswebdesign_setup' );

?>