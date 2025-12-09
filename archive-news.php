<?php get_header(); ?>

<main class="archive-news">
  <div class="container">

    <h1 class="archive-title">お知らせ一覧</h1>

    <?php if (have_posts()) : ?>
      <ul class="news-archive-list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="news-archive-item">
            <a href="<?php the_permalink(); ?>" class="news-archive-link">
              
              <span class="news-archive-date">
                <?php echo get_the_date('Y.m.d'); ?>
              </span>

              <span class="news-archive-title">
                <?php the_title(); ?>
              </span>

            </a>
          </li>
        <?php endwhile; ?>
      </ul>

    <?php else : ?>
      <p>投稿がありません。</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
