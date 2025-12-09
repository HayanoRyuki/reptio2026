<?php
/* Template: Default Page */
get_header();
?>

<main class="site-main page-default">
  <section class="page-section">
    <div class="container">

      <!-- タイトル -->
      <h1 class="page-title">
        <?php the_title(); ?>
      </h1>

      <!-- 本文 -->
      <div class="page-content">
        <?php
          while ( have_posts() ) :
            the_post();
            the_content();
          endwhile;
        ?>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>
