<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <meta name="keywords" content="" />
  <meta name=”robots” content=”noindex”>
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="data:," />
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo esc_url( home_url( '/' )); ?>/thanks';
}, false );
</script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
    <?php if ( is_front_page() ): ?>
      <h1 class="header__title">
        <a href="<?php echo esc_url( home_url( '/' )); ?>" class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/codeups.svg" alt="codeups">
        </a><!-- /.header__logo -->
      </h1><!-- /.header__title -->
      <?php else : ?>
        <p class="header__title">
        <a href="<?php echo esc_url( home_url( '/' )); ?>" class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/codeups.svg" alt="codeups">
        </a><!-- /.header__logo -->
      </p><!-- /.header__title -->
      <?php endif; ?>
      <!--ナビゲーション-->
      <nav class="header__nav header-nav">
        <ul class="header-nav__lists">
          <li class="header-nav__list"><a href="<?php echo esc_url( home_url( '/' )); ?>/news">お知らせ</a></li>
          <li class="header-nav__list"><a href="<?php echo esc_url( home_url( '/' )); ?>/content">事業内容</a></li>
          <li class="header-nav__list"><a href="<?php echo esc_url( home_url( '/' )); ?>/works">制作実績</a></li>
          <li class="header-nav__list"><a href="<?php echo esc_url( home_url( '/' )); ?>/overview">企業概要</a></li>
          <li class="header-nav__list"><a href="<?php echo esc_url( home_url( '/' )); ?>/blog">ブログ</a></li>
          <li class="header-nav__list header-nav__list--white"><a href="<?php echo esc_url( home_url( '/' )); ?>/contact">お問い合わせ</a></li>
        </ul>
      </nav>
      <!--hamburgerボタンー-->
      <div class="header__btn js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!--hamburgerメニュー-->
      <nav class="header__spnav header-spnav js-hamburger-nav">
        <ul class="header-spnav__lists">
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>">トップ</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/news">お知らせ</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/content">事業内容</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/works">制作実績</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/overview">企業概要</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/blog">ブログ</a>
          </li>
          <li class="header-spnav__list">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/contact">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <!--//ここまでナビゲーション-->
    </div><!-- /.header__inner -->
  </header>