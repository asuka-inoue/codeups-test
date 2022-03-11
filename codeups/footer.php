<footer class="footer">
    <div class="footer__inner">
      <div class="footer__wrapper">
        <div class="footer__title">
          <a href="<?php echo esc_url( home_url( '/' )); ?>" class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/codeups.svg" alt="codeups">
          </a><!-- /.footer__logo -->
        </div><!-- /.footer__title -->
        <nav class="footer__nav">
          <ul class="footer__lists">
            <li class="footer__list">
              <a href="<?php echo esc_url( home_url( '/' )); ?>/content">
                事業内容
              </a><!-- /.footer__link -->
            </li><!-- /.footer__list -->
            <li class="footer__list">
              <a href="<?php echo esc_url( home_url( '/' )); ?>/works">
                制作実績
              </a><!-- /.footer__link -->
            </li><!-- /.footer__list -->
            <li class="footer__list">
              <a href="<?php echo esc_url( home_url( '/' )); ?>/overview">
                企業概要
              </a><!-- /.footer__link -->
            </li><!-- /.footer__list -->
            <li class="footer__list">
              <a href="#">
                自社メディア
              </a><!-- /.footer__link -->
            </li><!-- /.footer__list -->
            <li class="footer__list">
              <a href="<?php echo esc_url( home_url( '/' )); ?>/contact">
                お問い合わせ
              </a><!-- /.footer__link -->
            </li><!-- /.footer__list -->
          </ul><!-- /.footer__lists -->
        </nav><!-- /.footer__nav -->
      </div><!-- /.footer__wrapper -->
      <div class="footer__copy">&copy; 2021 CodeUps Inc.</div>
    </div><!-- /.footer__inner -->
  </footer><!-- /.footer -->

  <div class="pagetop"></div>

<?php wp_footer(); ?>
</body>
</html>