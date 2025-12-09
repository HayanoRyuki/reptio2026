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

      <form class="contact-form js-rcp-contact-form" name="company">
        <input type="hidden" name="contact_type" value="company">

        <!-- ▼▼▼ ハニーポット（Botのみが入力する） ▼▼▼ -->
        <div class="honeypot-field" style="position:absolute; left:-9999px;">
          <label>このフィールドは入力しないでください</label>
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </div>
        <!-- ▲▲▲ ハニーポットここまで ▲▲▲ -->

        <div class="form-group">
          <label>御社名</label>
          <input type="text" name="company" required>
        </div>

        <div class="form-group">
          <label>ご担当者名</label>
          <input type="text" name="name" required>
        </div>

        <div class="form-group">
          <label>メールアドレス</label>
          <input type="email" name="email" required>
        </div>

        <div class="form-group">
          <label>お問い合わせ内容</label>
          <textarea name="message" rows="6" required></textarea>
        </div>

        <button class="button" type="submit">送信する</button>
      </form>

    </div>
  </section>

</main>

<?php get_footer(); ?>
