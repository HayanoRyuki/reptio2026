<?php
/**
 * 最小構成の enqueue.php（安全・整理済み）
 */

function reptio2026_enqueue_scripts() {

    $uri = get_template_directory_uri();
    $dir = get_template_directory();

    /* ===================================================
       基本スタイル
    =================================================== */

    /* style.css（必須） */
    $style = $dir . '/style.css';
    if (file_exists($style)) {
        wp_enqueue_style(
            'reptio2026-style',
            $uri . '/style.css',
            [],
            filemtime($style)
        );
    }

    /* common.css */
    $common = $dir . '/assets/css/common.css';
    if (file_exists($common)) {
        wp_enqueue_style(
            'reptio2026-common',
            $uri . '/assets/css/common.css',
            [],
            filemtime($common)
        );
    }


    /* ===================================================
       固定ページテンプレート別のCSS
    =================================================== */

    /* 会社概要 */
    if (is_page_template('page-about.php')) {
        reptio2026_enqueue_single_css('page-about.css', 'reptio2026-page-about', $dir, $uri);
    }

    /* サービス */
    if (is_page_template('page-service.php')) {
        reptio2026_enqueue_single_css('page-service.css', 'reptio2026-page-service', $dir, $uri);
    }

    /* お問い合わせ */
    if (is_page_template('page-contact.php')) {
        reptio2026_enqueue_single_css('page-contact.css', 'reptio2026-page-contact', $dir, $uri);
    }

    /* 総合お問い合わせ */
    if (is_page_template('page-contact-general.php')) {
        reptio2026_enqueue_single_css('page-contact-general.css', 'reptio2026-contact-general', $dir, $uri);
    }

    /* 企業向けお問い合わせ */
    if (is_page_template('page-contact-company.php')) {
        reptio2026_enqueue_single_css('page-contact-company.css', 'reptio2026-contact-company', $dir, $uri);
    }

    /* 採用お問い合わせ */
    if (is_page_template('page-contact-recruit.php')) {
        reptio2026_enqueue_single_css('page-contact-recruit.css', 'reptio2026-contact-recruit', $dir, $uri);
    }


    /* ===================================================
       アーカイブ / シングル
    =================================================== */

    reptio2026_enqueue_css_if_exists('archive-news.css',   'reptio2026-archive-news',   $dir, $uri);
    reptio2026_enqueue_css_if_exists('archive-logo.css',   'reptio2026-archive-logo',   $dir, $uri);
    reptio2026_enqueue_css_if_exists('archive-recruit.css','reptio2026-archive-recruit',$dir, $uri);
    reptio2026_enqueue_css_if_exists('archive-case.css',   'reptio2026-archive-case',   $dir, $uri);

    reptio2026_enqueue_css_if_exists('single-case.css',    'reptio2026-single-case',    $dir, $uri);
    reptio2026_enqueue_css_if_exists('single-recruit.css', 'reptio2026-single-recruit', $dir, $uri);
    reptio2026_enqueue_css_if_exists('single-news.css',    'reptio2026-single-news',    $dir, $uri);


    /* ===================================================
       main.js（共通JS）
    =================================================== */

    $main_js = $dir . '/assets/js/main.js';
    if (file_exists($main_js)) {
        wp_enqueue_script(
            'reptio2026-main',
            $uri . '/assets/js/main.js',
            [],
            filemtime($main_js),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'reptio2026_enqueue_scripts');


/* ===================================================
   共通関数：存在チェックしてCSS enqueue
=================================================== */

/**
 * 固定ページテンプレート専用（common に依存）
 */
function reptio2026_enqueue_single_css($filename, $handle, $dir, $uri) {
    $path = $dir . '/assets/css/' . $filename;
    if (file_exists($path)) {
        wp_enqueue_style(
            $handle,
            $uri . '/assets/css/' . $filename,
            ['reptio2026-common'],
            filemtime($path)
        );
    }
}

/**
 * アーカイブ・シングル用（common に依存）
 */
function reptio2026_enqueue_css_if_exists($filename, $handle, $dir, $uri) {
    $path = $dir . '/assets/css/' . $filename;
    if (file_exists($path)) {
        wp_enqueue_style(
            $handle,
            $uri . '/assets/css/' . $filename,
            ['reptio2026-common'],
            filemtime($path)
        );
    }
}
