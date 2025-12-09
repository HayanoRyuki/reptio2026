<?php get_header(); ?>

<main class="archive-recruit">
  <div class="container">

    <h1 class="archive-title">採用情報一覧</h1>

    <?php if (have_posts()) : ?>
      <ul class="recruit-list">

        <?php while (have_posts()) : the_post(); ?>
          <li class="recruit-item">

            <a href="<?php the_permalink(); ?>" class="recruit-link">

              <span class="recruit-date">
                <?php echo get_the_date('Y.m.d'); ?>
              </span>

              <h2 class="recruit-title">
                <?php the_title(); ?>
              </h2>

              <?php if (has_excerpt()) : ?>
                <p class="recruit-excerpt"><?php echo get_the_excerpt(); ?></p>
              <?php endif; ?>

            </a>

          </li>
        <?php endwhile; ?>

      </ul>

    <?php else : ?>
      <p>現在、募集情報はありません。</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
