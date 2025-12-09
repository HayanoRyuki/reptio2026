<?php
// カスタム投稿：お知らせ（news）
function create_post_type_news() {
  register_post_type('news', array(
    'labels' => array(
      'name'          => 'お知らせ',
      'singular_name' => 'お知らせ',
    ),
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug' => 'news'),
    'show_in_rest'  => true,
    'menu_position' => 5,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
  ));
}
add_action('init', 'create_post_type_news');