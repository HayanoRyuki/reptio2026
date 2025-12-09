</main>

<footer class="site-footer">
  <div class="footer-inner">

    <!-- フッターメニュー -->
    <nav class="footer-nav">
      <ul>
        <li><a href="<?php echo home_url('/news'); ?>">ニュース</a></li>
        <li><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
        <li><a href="<?php echo home_url('/about'); ?>">会社情報</a></li>
        <li><a href="<?php echo home_url('/service'); ?>">事業内容</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
      </ul>
    </nav>

    <div class="footer-copy">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
