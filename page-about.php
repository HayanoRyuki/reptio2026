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

  <!-- 会社概要 -->
  <section class="about-section">
    <div class="container">
      <h2 class="about-section-title">会社概要</h2>

      <table class="about-table">
        <tbody>
          <tr>
            <th>会社名</th>
            <td>株式会社Opinio</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役 柴 久人</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              <ul>
                <li>エージェント事業</li>
                <li>HR Tech（HRテック）サービスの開発・販売</li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2023年9月</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>500万円</td>
          </tr>
          <tr>
            <th>有料職業紹介事業免許</th>
            <td>13-ユ-316441</td>
          </tr>
          <tr>
            <th>保有資格</th>
            <td>
              キャリアコンサルタント（国家資格）<br>
              一般社団法人プロティアン・キャリア協会 プロティアン基礎検定
            </td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>
              〒107-0052<br>
              東京都港区赤坂2丁目21番4号<br>
              天翔赤坂ANNEXビル404-C
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- 取引先一覧 -->
  <section class="about-section">
    <div class="container">
      <h2 class="about-section-title">取引先一覧（一部）</h2>

      <ul class="about-clients logo-grid">
        <?php
        $logo_query = new WP_Query([
          'post_type'      => 'logo',
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC'
        ]);

        if ($logo_query->have_posts()) :
          while ($logo_query->have_posts()) :
            $logo_query->the_post();

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

    <div class="culture-cards">

      <!-- VISION -->
      <div class="culture-card">
        <h3 class="culture-title">VISION</h3>
        <p class="culture-text">
          すべての選択肢に、<br>
          納得のいく<br>
          ストーリーを。
        </p>
      </div>

      <!-- MISSION -->
      <div class="culture-card">
        <h3 class="culture-title">MISSION</h3>
        <p class="culture-text">
          AI時代の<br>
          キャリアインフラになる。
        </p>
      </div>

      <!-- VALUE -->
      <div class="culture-card">
        <h3 class="culture-title">VALUE</h3>
        <ul class="culture-values">
          <li>
            <strong>The Dream Team</strong><br>
            最高のチームを作る
          </li>
          <li>
            <strong>Truth First</strong><br>
            真実を最優先に
          </li>
          <li>
            <strong>Think Big</strong><br>
            大きく考える
          </li>
        </ul>
      </div>

    </div>

  </div>
</section>


  <!-- 代表メッセージ -->
  <section class="about-section">
    <div class="container">
      <h2 class="about-section-title">代表メッセージ</h2>

      <p class="about-text">
        <strong>「真実」が、キャリアを変える。</strong><br><br>

        はじめまして。Opinio株式会社 代表の柴 久人です。<br><br>

        私はこれまで10年間、RecruitとSalesforceで営業職として働きながら、
        多くの「採用のミスマッチ」を目の当たりにしてきました。
        優秀な人材が、情報不足や表面的なマッチングによって、
        本来輝けるはずの場所に出会えない——
        この現実に、課題意識を持ち続けてきました。<br><br>

        2023年、私はOpinioを創業しました。
        社名の由来はラテン語で「意見・見解」を意味する言葉。
        採用においても、キャリアにおいても、
        「本当のこと」を伝え合うことでしか、
        真の成功は生まれないという信念を込めています。<br><br>

        <strong>Truth to Careers</strong>——これが私たちの信念・信条です。<br><br>

        企業には、飾らない現実を。<br>
        候補者には、正直なフィードバックを。<br>
        そして双方に、長期的な成功につながる
        「真実のマッチング」を届けること。<br><br>

        おかげさまで創業以来、早期離職ゼロという結果で、
        その信念を証明し続けています。<br><br>

        IT・SaaS業界は、日本の未来を担う成長産業です。
        この領域で「人」と「企業」を正しくつなぐことが、
        私たちにできる社会への貢献だと考えています。<br><br>

        採用に、キャリアに、真実を。<br><br>

        Opinio株式会社<br>
        代表取締役 柴 久人
      </p>
    </div>
  </section>

  <!-- CEO プロフィール -->
  <section class="about-section">
    <div class="container">
      <h2 class="about-section-title">CEO プロフィール</h2>

      <p class="about-text">
        会計コンサルティング会社、リクルート、
        セールスフォース・ジャパンを経て、
        2023年にOpinio株式会社を創業。<br><br>

        主にIT・SaaS業界に強みを持つ人材紹介事業を展開。
        創業以来、ご紹介候補者の退職ゼロを継続中。
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
