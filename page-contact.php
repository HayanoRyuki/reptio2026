<?php
/* Template Name: お問い合わせ */
get_header();
?>

<main class="contact-page">

  <!-- HERO -->
  <section class="contact-hero">
    <div class="container">
      <h1 class="contact-hero-title">お問い合わせ</h1>
      <p class="contact-hero-desc">
        お問い合わせの種類をお選びください。
      </p>
    </div>
  </section>

  <!-- CONTACT SELECT -->
  <section class="contact-select">
    <div class="container contact-select-grid">

      <!-- 総合お問い合わせ -->
      <a href="/contact-general" class="contact-box">
        <h2 class="contact-box-title">総合お問い合わせ</h2>
        <p class="contact-box-desc">
          サービス全般、取材、その他のお問い合わせはこちら。
        </p>
      </a>

      <!-- 企業（採用担当） -->
      <a href="/contact-company" class="contact-box">
        <h2 class="contact-box-title">企業の採用ご担当者様</h2>
        <p class="contact-box-desc">
          求人掲載・人材紹介のご相談はこちらから。
        </p>
      </a>

      <!-- 当社の採用について -->
      <a href="/contact-recruit" class="contact-box">
        <h2 class="contact-box-title">当社の採用について</h2>
        <p class="contact-box-desc">
          Opinioの採用情報・募集職種の詳細はこちら。
        </p>
      </a>

    </div>
  </section>

</main>

<?php get_footer(); ?>
