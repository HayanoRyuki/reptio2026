<?php get_header(); ?>

<main class="single-news">
  <div class="container">

    <!-- タイトル -->
    <h1 class="news-title"><?php the_title(); ?></h1>

    <!-- 日付 -->
    <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>

    <!-- アイキャッチ -->
    <?php if (has_post_thumbnail()): ?>
      <div class="news-thumb">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <!-- 本文 -->
    <div class="news-content">
      <?php the_content(); ?>
    </div>

    <!-- 前後記事ナビ -->
    <div class="news-navigation">
      <div class="news-prev">
        <?php previous_post_link('%link', '← 前の記事'); ?>
      </div>
      <div class="news-next">
        <?php next_post_link('%link', '次の記事 →'); ?>
      </div>
    </div>

    <!-- 一覧へ戻る -->
    <div class="news-back">
      <a href="/news" class="back-button">お知らせ一覧へ戻る</a>
    </div>

  </div>
</main>

<?php get_footer(); ?>
