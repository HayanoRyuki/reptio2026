<?php get_header(); ?>

<main class="single-case">
  <div class="container">

    <!-- タイトル -->
    <h1 class="case-title"><?php the_title(); ?></h1>

    <!-- サムネイル -->
    <?php if (has_post_thumbnail()): ?>
      <div class="case-thumb">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <!-- 本文 -->
    <div class="case-content">
      <?php the_content(); ?>
    </div>

    <!-- ナビゲーション -->
    <div class="case-navigation">
      <div class="case-prev">
        <?php previous_post_link('%link', '← 前の事例'); ?>
      </div>
      <div class="case-next">
        <?php next_post_link('%link', '次の事例 →'); ?>
      </div>
    </div>

    <!-- 一覧に戻る -->
    <div class="case-back">
      <a href="/case" class="back-button">支援事例一覧へ戻る</a>
    </div>

  </div>
</main>

<?php get_footer(); ?>
