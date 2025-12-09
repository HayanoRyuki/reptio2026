<?php
/**
 * Reptio2026 Functions
 * セットアップ・CSS/JS読み込み・カスタム投稿タイプ
 */

/* ------------------------------
   Setup（テーマサポート）
------------------------------ */
require_once get_template_directory() . '/inc/setup.php';

/* ------------------------------
   CSS / JS 読み込み
------------------------------ */
require_once get_template_directory() . '/inc/enqueue.php';

/* ------------------------------
   カスタム投稿タイプ
------------------------------ */
require_once get_template_directory() . '/inc/cpt-news.php';
require_once get_template_directory() . '/inc/cpt-logo.php';
require_once get_template_directory() . '/inc/cpt-recruit.php';
require_once get_template_directory() . '/inc/cpt-case.php';
