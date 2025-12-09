<?php
/* Template Name: 当社採用お問い合わせ */
get_header();
?>

<main class="contact-form-page">

  <section class="contact-form-hero">
    <div class="container">
      <h1 class="contact-form-title">Opinio 採用お問い合わせ</h1>
      <p class="contact-form-desc">
        求人応募、選考に関するお問い合わせはこちらからお送りください。
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
