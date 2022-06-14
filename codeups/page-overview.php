<?php
/*
* Template Name: overview
*/
?>

<?php get_header(); ?>
  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/overview-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-overview-mv.jpg" alt="企業概要">
        </picture>
        <h2 class="page-title__title">企業概要</h2>
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

    <section class="overview section-overview">
      <div class="overview__inner inner">
        <dl class="overview__items">
          <div class="overview__item">
            <dt class="overview__term">会社名</dt><!-- /.overview__term -->
            <dd class="overview__description">株式会社CodeUps</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">設立</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">資本金</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">売上高</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">代表者</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">従業員数</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">事業内容</dt><!-- /.overview__term -->
            <dd class="overview__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
          <div class="overview__item">
            <dt class="overview__term">所在地</dt><!-- /.overview__term -->
            <dd class="overview__description">東京駅</dd><!-- /.overview__description -->
          </div><!-- /.overview__item -->
        </dl>
      </div><!-- /.inner -->
      <div class="overview__map map">
        <div class="map__inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.827853398501!2d139.76493611477107!3d35.681240537579804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1655193665878!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/map.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-map.jpg" alt="map">
          </picture> -->
        </div><!-- /.map__inner -->
      </div><!-- /.map -->
    </section><!-- /.overview -->
    
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