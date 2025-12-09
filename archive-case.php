<?php get_header(); ?>

<main class="archive-case">
  <div class="container">

    <h1 class="case-archive-title">導入事例</h1>

    <ul class="case-list">
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>

  </div>
</main>

<?php get_footer(); ?>
