<?php get_header(); ?>

<main class="archive-news">
  <div class="container">

    <h1 class="news-archive-title">お知らせ一覧</h1>

    <ul class="news-list">
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>

  </div>
</main>

<?php get_footer(); ?>
