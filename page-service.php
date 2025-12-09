<?php
/* Template Name: サービス一覧 */
get_header();
?>

<main class="service-page">

  <!-- HERO -->
  <section class="service-hero">
    <div class="container">
      <h1 class="service-hero-title">サービス一覧</h1>
    </div>
  </section>

  <!-- サービスブロック -->
  <section class="service-list">
    <div class="container">

      <!-- 転職支援 -->
      <div class="service-item">
        <div class="service-item-body">
          <h2 class="service-item-title">転職支援</h2>
          <p class="service-item-desc">
            SaaS業界への転職を希望する方を対象に、個別のキャリア相談と求人紹介を行います。
          </p>
          <a href="/contact" class="service-item-btn">詳しく見る</a>
        </div>
      </div>

      <!-- コミュニティ -->
      <div class="service-item">
        <div class="service-item-body">
          <h2 class="service-item-title">SaaSコミュニティ運営</h2>
          <p class="service-item-desc">
            SaaS業界の関係者がつながり学び合える交流機会を提供します。
          </p>
          <a href="/contact" class="service-item-btn">詳しく見る</a>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
