<?php
/**
 * Theme Setup
 */
function reptio2026_setup() {

    // タイトルタグ自動生成
    add_theme_support('title-tag');

    // アイキャッチ画像（投稿 & CPT）
    add_theme_support('post-thumbnails');

    // メニュー登録
    register_nav_menus([
        'header-menu' => 'ヘッダーメニュー',
        'footer-menu' => 'フッターメニュー',
    ]);

}
add_action('after_setup_theme', 'reptio2026_setup');
