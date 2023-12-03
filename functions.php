<?php
function my_script_init() {
  wp_enqueue_style("googlefonts", "https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP:wght@400;500&display=swap", array(), null );
  wp_enqueue_style("my", get_template_directory_uri() . "/public/assets/css/style.css", array(), filemtime(get_theme_file_path('public/assets/css/style.css')), "all");
  wp_enqueue_script("fontawesome", "https://kit.fontawesome.com/f7b38d3e99.js");
  wp_enqueue_script("my", get_template_directory_uri() . "/public/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('public/assets/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

?>