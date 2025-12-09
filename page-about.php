<?php
/* Template Name: 会社概要 */
get_header();
?>

<main class="about-page">

  <!-- メインビジュアル -->
  <section class="about-hero">
    <div class="container">
      <h1 class="about-hero-title">会社概要</h1>
    </div>
  </section>


  <!-- 会社概要（テーブル） -->
  <section class="about-section">
    <div class="container">

      <h2 class="about-section-title">会社概要</h2>

      <table class="about-table">
        <tr><th>会社名</th><td>株式会社Opinio</td></tr>
        <tr><th>代表者</th><td>代表取締役 柴 久人</td></tr>
        <tr><th>事業内容</th><td>・エージェント事業<br>・HR Techサービスの開発/販売事業</td></tr>
        <tr><th>設立</th><td>2023年9月</td></tr>
        <tr><th>資本金</th><td>500万円</td></tr>
        <tr><th>有料職業紹介事業免許</th><td>13-ユ-316441</td></tr>
        <tr><th>保有資格</th><td>キャリアコンサルタント（国家資格）</td></tr>
        <tr>
          <th>本社所在地</th>
          <td>
            〒107-0052<br>
            東京都港区赤坂2丁目21番4号<br>
            天翔赤坂ANNEXビル404-C
          </td>
        </tr>
      </table>

    </div>
  </section>


<!-- 導入実績 -->
<section class="about-section">
  <div class="container">

    <h2 class="about-section-title">導入実績（一例）</h2>

    <ul class="about-clients logo-grid">

      <?php
      $args = array(
        'post_type'      => 'logo',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
      );
      $logo_query = new WP_Query($args);

      if ($logo_query->have_posts()) :
        while ($logo_query->have_posts()) :
          $logo_query->the_post();

          // アイキャッチ（ロゴ画像）
          $logo_img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
          $logo_alt = get_the_title();
      ?>

        <li class="logo-item">
          <?php if ($logo_img) : ?>
            <img src="<?php echo esc_url($logo_img); ?>" alt="<?php echo esc_attr($logo_alt); ?>">
          <?php else : ?>
            <?php echo esc_html($logo_alt); ?>
          <?php endif; ?>
        </li>

      <?php endwhile; endif; wp_reset_postdata(); ?>

    </ul>

  </div>
</section>



  <!-- Culture -->
  <section class="about-section">
    <div class="container">

      <h2 class="about-section-title">Opinioのカルチャー</h2>

      <h3 class="about-subtitle">Vision</h3>
      <p class="about-text">
        2035年、世界で最も使われるHRプラットフォームになる。<br>
        80億人のキャリアを革新し、HRの世界標準を創る。
      </p>

      <h3 class="about-subtitle">Mission</h3>
      <p class="about-text">
        「想像を、超えていく。」<br>
        誰もが想像を超えたキャリアの可能性に出会える世界をつくる。
      </p>

      <h3 class="about-subtitle">Value</h3>
      <ul class="about-values">
        <li>1. See the Invisible ― 見えない可能性を見る</li>
        <li>2. Love the Chain ― つながりの連鎖を愛する</li>
        <li>3. Now not Later ― あとでじゃなく、今</li>
        <li>4. World or Nothing ― 世界か、無か</li>
        <li>5. Make Mondays Better ― 月曜日を最高にする</li>
      </ul>

    </div>
  </section>


  <!-- CEO メッセージ -->
  <section class="about-section">
    <div class="container">

      <h2 class="about-section-title">CEOからのメッセージ</h2>

      <p class="about-text">
        私たちと共に新たなステージへ挑戦し、輝かしい未来を築きましょう。<br><br>

        株式会社OpinioはSaaS業界に特化した転職エージェントとして、皆様のキャリア形成を全力でサポートいたします。<br>
        SaaS業界は急速に成長し、多くの可能性が広がっています。その中で、適切なキャリアパスを見つけることは非常に重要です。<br><br>

        弊社のコンサルタントは、全員がSaaS企業での実務経験を持ち、深い業界知識と広いネットワークを活かして最適な転職先をご提案いたします。<br><br>

        求職者にはパーソナライズドなサポートを。<br>
        企業様には優秀な人材をご紹介し、組織の成長を支援します。<br><br>

        共に未来をつくりましょう。<br><br>

        柴 久人 / 株式会社Opinio 代表取締役
      </p>

    </div>
  </section>


  <!-- CEO プロフィール -->
  <section class="about-section">
    <div class="container">

      <h2 class="about-section-title">CEO プロフィール</h2>

      <p class="about-text">
        柴 久人（Hisato Shiba）<br><br>

        学生時代はサッカー部。新卒で税務コンサル会社へ入社。<br>
        2014年に求人広告会社へ。2015年からリクルートキャリアへ出向し人材紹介業に携わる。<br><br>

        2018年、Salesforce Japanへ入社。インサイド／フィールドセールスとしてCRM導入支援に従事。<br>
        2024年、SaaS業界の知見を元に株式会社Third Boxを創業。<br><br>

        キャリアコンサルタント（国家資格）保有。
      </p>

    </div>
  </section>

</main>

<?php get_footer(); ?>
