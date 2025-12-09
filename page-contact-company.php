<?php
/* Template Name: 企業採用お問い合わせ */
get_header();
?>

<main class="contact-form-page">

  <section class="contact-form-hero">
    <div class="container">
      <h1 class="contact-form-title">企業様向けお問い合わせ</h1>
      <p class="contact-form-desc">
        求人掲載、人材紹介のご相談はこちらからお送りください。
      </p>
    </div>
  </section>

  <section class="contact-form-section">
    <div class="container">

      <!-- ▼ HubSpotフォーム埋め込み ▼ -->
      <script src="https://js-na2.hsforms.net/forms/embed/244556311.js" defer></script>
      <div class="hs-form-frame"
        data-region="na2"
        data-form-id="d9167c75-37be-4434-9f06-e99abd5d1e03"
        data-portal-id="244556311">
      </div>
      <!-- ▲ HubSpotフォームここまで ▲ -->

    </div>
  </section>

</main>

<?php get_footer(); ?>
