<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-inner">

    <!-- ロゴ -->
    <div class="header-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img 
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" 
          alt="<?php bloginfo('name'); ?>" 
          class="header-logo-img"
        >
      </a>
    </div>

    <!-- グローバルナビ -->
    <nav class="header-nav">
      <ul>
        <li><a href="/about">会社情報</a></li>
        <li><a href="/service">事業内容</a></li>
        <li><a href="/contact">お問い合わせ</a></li>
      </ul>
    </nav>

  </div>
</header>

<main class="site-main">
