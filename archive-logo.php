<?php get_header(); ?>

<main class="archive-logo">
  <div class="container">

    <h1 class="archive-title">導入企業一覧</h1>

    <?php
    if (have_posts()) :
      echo '<div class="logo-grid">';
      while (have_posts()) : the_post();
        $logo = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    ?>
        <div class="logo-grid-item">
          <img src="<?php echo esc_url($logo); ?>" alt="<?php the_title(); ?>">
        </div>
    <?php
      endwhile;
      echo '</div>';
    else :
      echo '<p>ロゴが登録されていません。</p>';
    endif;
    ?>

  </div>
</main>

<?php get_footer(); ?>
