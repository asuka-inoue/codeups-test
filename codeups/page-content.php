<?php
/*
* Template Name: content
*/
?>

<?php get_header(); ?>
  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/content-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-content-mv.jpg" alt="事業内容">
        </picture>
        <h1 class="page-title__title">事業内容</h1>
      </div><!-- /.page-title__wrapper -->
    </div><!-- /.page-title -->

    <!-- ぱんくず -->
    <div id="breadcrumbs" class="page-breadcrumbs">
      <div class="inner">
        <div class="breadcrumbs">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </div>
      </div>
    </div>

    <section class="content section-content">
      <div class="content__inner">
        <h3 class="content__title">企業理念</h3><!-- /.content__title -->
        <div class="content__description">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </div><!-- /.content__description -->
        <div class="content__box" id="content1">
          <figure class="content__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/content-img1.jpg" alt="">
          </figure><!-- /.content__img -->
          <div class="content__textbox">
            <h4 class="content__subtitle">
              企業理念1
            </h4><!-- /.content__subtitle -->
            <p class="content__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p><!-- /.content__text -->
          </div><!-- /.content__textbox -->
        </div><!-- /.content__box -->
        <div class="content__box" id="content2">
          <figure class="content__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/content-img2.jpg" alt="">
          </figure><!-- /.content__img -->
          <div class="content__textbox">
            <h4 class="content__subtitle">
              企業理念2
            </h4><!-- /.content__subtitle -->
            <p class="content__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p><!-- /.content__text -->
          </div><!-- /.content__textbox -->
        </div><!-- /.content__box -->
        <div class="content__box" id="content3">
          <figure class="content__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/content-img3.jpg" alt="">
          </figure><!-- /.content__img -->
          <div class="content__textbox">
            <h4 class="content__subtitle">
              企業理念3
            </h4><!-- /.content__subtitle -->
            <p class="content__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p><!-- /.content__text -->
          </div><!-- /.content__textbox -->
        </div><!-- /.content__box -->
      </div><!-- /.inner -->
    </section><!-- /.content -->
    
    <section class="footer-contact section-footercontact">
      <div class="footer-contact__inner">
        <div class="section-header footer-contact__title">
          <h2 class="section-header__title">contact</h2><!-- /.section-header__title -->
          <span class="section-header__subtitle footer-contact__subtitle">お問い合わせ</span><!-- /.section-header__subtitle -->
        </div><!-- /.section-header -->
        <div class="footer-contact__body">
          <p class="footer-contact__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p><!-- /.footer-contact__text -->
          <div class="footer-contact__btn">
            <a href="<?php echo esc_url( home_url( '/' )); ?>/contact" class="btn">お問い合わせへ</a><!-- /.btn -->
          </div>
        </div><!-- /.footer-contact__body -->
      </div><!-- /.footer-contact__inner -->
    </section><!-- /.footer-contact -->
  </main>
  <?php get_footer(); ?>