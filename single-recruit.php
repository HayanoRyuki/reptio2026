<?php get_header(); ?>

<main class="single-recruit">
  <div class="container">

    <!-- タイトル -->
    <h1 class="recruit-title"><?php the_title(); ?></h1>

    <!-- カテゴリ（職種分類） -->
    <div class="recruit-meta">
      <?php
      $terms = get_the_terms(get_the_ID(), 'recruit_category');
      if ($terms && !is_wp_error($terms)) :
        foreach ($terms as $term) {
          echo '<span class="recruit-tag">' . esc_html($term->name) . '</span>';
        }
      endif;
      ?>
    </div>

    <!-- メインビジュアル -->
    <?php if (has_post_thumbnail()): ?>
      <div class="recruit-thumb">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <!-- 本文（求人詳細） -->
    <div class="recruit-content">
      <?php the_content(); ?>
    </div>

    <!-- ボタン -->
    <div class="recruit-cta">
      <a href="/contact-recruit" class="apply-button">この職種に応募する</a>
    </div>

    <!-- ナビゲーション -->
    <div class="recruit-navigation">
      <div class="recruit-prev">
        <?php previous_post_link('%link', '← 前の募集'); ?>
      </div>
      <div class="recruit-next">
        <?php next_post_link('%link', '次の募集 →'); ?>
      </div>
    </div>

    <!-- 一覧へ戻る -->
    <div class="recruit-back">
      <a href="/recruit" class="back-button">採用一覧にもどる</a>
    </div>

  </div>
</main>

<?php get_footer(); ?>
