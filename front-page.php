<?php
/* Template Name: FrontPage */
echo "<!-- FRONT PAGE TEMPLATE LOADED -->";
get_header();
?>

<main class="front-page">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner">
      <div class="hero-text">

  <!-- 黒帯 -->
  <p class="hero-tagline">転職支援＆キャリアコンサルティング</p>

  <!-- 白帯 -->
  <h1 class="hero-main">見えない可能性を、<br>見える未来へ。</h1>

  <!-- ボタン -->
  <a class="hero-btn" href="/contact">転職/キャリア相談はこちら</a>

</div>
      <div class="hero-image">
  <picture>
    <!-- SP（768px以下） -->
    <source 
      srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-sp.jpg"
      media="(max-width: 768px)"
    >

    <!-- PC（768px以上） -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-pc.jpg"
      alt="HERO"
    >
  </picture>
</div>
    </div>
  </section>

  <!-- LOGO SLIDER -->
<section class="logo-slider">
  <div class="logo-slider-inner">

    <?php
    // TOP表示のロゴを全部取得
    $args = array(
      'post_type'      => 'logo',
      'posts_per_page' => -1,
      'meta_key'       => 'top_display',
      'meta_value'     => '1',
      'orderby'        => 'date',
      'order'          => 'DESC'
    );

    $logos = get_posts($args);

    // 上段（最新15件）
    $logos_top = array_slice($logos, 0, 15);

    // 下段（16件目〜）
    $logos_bottom = array_slice($logos, 15);
    ?>

    <div class="logo-track-wrapper">

      <!-- 上段（左 → 右） -->
      <div class="logo-track">
        <div class="logo-row left-to-right">
          <?php foreach ($logos_top as $post): ?>
            <?php 
              $img = get_the_post_thumbnail_url($post->ID, 'medium'); 
              if (!$img) continue;
            ?>
            <div class="logo-item">
              <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>">
            </div>
          <?php endforeach; ?>

          <!-- 無限ループのため同じ列を複製 -->
          <?php foreach ($logos_top as $post): ?>
            <?php 
              $img = get_the_post_thumbnail_url($post->ID, 'medium'); 
              if (!$img) continue;
            ?>
            <div class="logo-item">
              <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>">
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 下段（右 → 左） -->
      <div class="logo-track">
        <div class="logo-row right-to-left">
          <?php foreach ($logos_bottom as $post): ?>
            <?php 
              $img = get_the_post_thumbnail_url($post->ID, 'medium'); 
              if (!$img) continue;
            ?>
            <div class="logo-item">
              <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>">
            </div>
          <?php endforeach; ?>

          <!-- 無限ループのため同じ列を複製 -->
          <?php foreach ($logos_bottom as $post): ?>
            <?php 
              $img = get_the_post_thumbnail_url($post->ID, 'medium'); 
              if (!$img) continue;
            ?>
            <div class="logo-item">
              <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>">
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- /LOGO SLIDER -->


  <!-- ABOUT -->
  <section class="about">
    <div class="about-inner">

      <div class="about-text">
        <p class="about-label">ABOUT US</p>

        <h2 class="about-title">
          Opinioは、テクノロジーで<br>「透明性」を届けます。
        </h2>

        <p class="about-desc">
          私たちは、HR領域における「情報の信頼性」に向き合い、
          求職者・企業の双方にとって
          正直で信頼できる選択を支える仕組みを構築しています。
          第三者の声とテクノロジーを融合したプロダクトで、
          人と組織のよりよい出会いを実現していきます。
        </p>

        <a href="/about" class="about-btn">Opinioについて</a>
      </div>

      <div class="about-image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_photo.jpg" alt="ABOUT">
</div>

    </div>
  </section>

    <!-- NEWS -->
  <section class="news">
    <div class="news-inner">
      <h2 class="news-title">お知らせ</h2>

      <ul class="news-list">
        <?php
        // ▼ カスタム投稿「news」を最新5件取得
        $news = new WP_Query([
          'post_type'      => 'news',
          'posts_per_page' => 5,
          'orderby'        => 'date',
          'order'          => 'DESC'
        ]);

        while ($news->have_posts()) : $news->the_post(); ?>
          <li class="news-item">
            <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>

            <a class="news-link" href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>

      <!-- 一覧ページへのリンク（任意） -->
      <div class="news-more">
        <a href="/news" class="news-more-link">お知らせ一覧へ</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
