<?php
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

function my_script_init() {

  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Noto+Sans+JP:wght@400;500;700&display=swap',
    array(),
    null
  );

 
  wp_enqueue_style(
    'swiper-css',
    get_template_directory_uri() . '/assets/lib/swiper-bundle.min.css',
    array(),
    filemtime(get_theme_file_path('assets/lib/swiper-bundle.min.css'))
  );

  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/style.min.css',
    array(),
    filemtime(get_theme_file_path('assets/css/style.min.css'))
  );

  wp_enqueue_script(
    'jquery-custom',
    get_template_directory_uri() . '/assets/lib/jquery-3.7.1.min.js',
    array(),
    null,
    true
  );

  wp_enqueue_script(
    'gsap',
    get_template_directory_uri() . '/assets/lib/gsap/gsap.min.js',
    array(),
    null,
    true
  );

  wp_enqueue_script(
    'scrolltrigger',
    get_template_directory_uri() . '/assets/lib/gsap/scrolltrigger.min.js',
    array('gsap'),
    null,
    true
  );


  wp_enqueue_script(
    'swiper',
    get_template_directory_uri() . '/assets/lib/swiper-bundle.min.js',
    array(),
    null,
    true
  );

  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/assets/js/main.min.js',
    array('jquery-custom', 'gsap', 'scrolltrigger', 'swiper'),
    filemtime(get_theme_file_path('assets/js/main.min.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_script_init');

add_filter( 'wpcf7_autop_or_not', '__return_false' );


?>