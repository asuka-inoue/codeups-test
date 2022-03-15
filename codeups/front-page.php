<?php
/*
 * Template Name: top
 */

?>
<?php get_header(); ?>

<main>
    <div class="main-view">
      <div class="main-view__wrap">
        <div class="main-view__wrapper">
          <h2 class="main-view__title">メインタイトルが入ります</h2><!-- /.main-view__title -->
          <span class="main-view__subtitle">サブタイトルが入ります</span>
        </div><!-- /.main-view__wrapper -->
        
        <div class="swiper swiper1 js-top">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/main-view1.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-main-view1.jpg" alt="main-view1">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/main-view2.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-main-view2.jpg" alt="main-view2">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/main-view3.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-main-view3.jpg" alt="main-view3">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.main-view -->

    <section class="news top-news">
      <div class="top-news__inner inner">
      <?php
                    /* （ステップ1）データの取得 */
                    $query = new WP_Query(
                      array(
                          'post_type' => 'post',
                          'posts_per_page' => 1,
                      )
                  );
                  
                  ?>
                  <?php
                    /* （ステップ2）データの表示 */
                    if ( $query->have_posts() ) : ?>                  
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
          <div class="top-news__info post-info">
          <time class="post-info__date" datetime="the_time( 'Y-m-d' )"><?php the_time( 'Y.m.d' ); ?></time>
          <div class="post-info__category"><?php the_category(); ?></div>
        </div><!-- /.top-news__head -->
        <h3 class="news__title top-news__title">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a><!-- /.top-news__title-link -->
        </h3><!-- /.top-news__title -->
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
        
        <div class="top-news__btn">
          <a href="<?php echo esc_url( home_url( '/' )); ?>/news" class="btn">すべて見る</a><!-- /.top-news__btn -->
        </div><!-- /.top-news__btn -->
      </div><!-- /.top-news__inner -->
    </section><!-- /.top-news -->

    <div class="line__one">

    <section class="top-content section-topcontent">
      <div class="top-content__title section-header">
        <h2 class="section-header__title">content</h2><!-- /.section-header__title -->
        <span class="section-header__subtitle">事業内容</span><!-- /.section-header__subtitle -->
      </div><!-- /.section-header -->
      <div class="top-content__wrapper">
        <a href="<?php echo get_template_directory_uri(); ?>/content" class="top-content__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/content1.jpg" alt="事業内容1">
          <h3 class="top-content__linktitle">経営理念ページへ</h3>
        </a><!-- /.top-content__link -->
        <a href="<?php echo get_template_directory_uri(); ?>/content#content1" class="top-content__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/content2.jpg" alt="事業内容2">
          <h3 class="top-content__linktitle">理念1へ</h3>
        </a><!-- /.top-content__link -->
        <a href="<?php echo get_template_directory_uri(); ?>/content#content2" class="top-content__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/content3.jpg" alt="事業内容3">
          <h3 class="top-content__linktitle">理念2へ</h3>
        </a><!-- /.top-content__link -->
        <a href="<?php echo get_template_directory_uri(); ?>/content#content3" class="top-content__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/content4.jpg" alt="事業内容4">
          <h3 class="top-content__linktitle">理念3へ</h3>
        </a><!-- /.top-content__link -->
      </div><!-- /.top-content__wrapper -->
    </section><!-- /.top-content -->

    </div><!-- /.line__one -->

    <div class="line__two">

    <section class="top-works section-topworks">
      <div class="top-works__title section-header">
        <h2 class="section-header__title section-header__title--right">works</h2><!-- /.section-header__title -->
        <span class="section-header__subtitle">制作実績</span><!-- /.section-header__subtitle -->
      </div><!-- /.section-header -->
      <div class="top-works__wrapper">
        <div class="top-works__body">
          <div class="swiper swiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slide-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/works1.jpg" alt="制作実績1">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/works2.jpg" alt="制作実績2">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/works3.jpg" alt="制作実績3">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="top-works__content">
            <h3 class="top-works__contenttitle">メインタイトルが入ります。</h3><!-- /.top-works__title -->
            <div class="top-works__textblock">
              <p class="top-works__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p><!-- /.top-works__text -->
            </div><!-- /.top-works__textblock -->
            <div class="top-works__btn">
              <a href="<?php echo get_template_directory_uri(); ?>/work" class="btn">詳しく見る</a><!-- /.top-works__btn -->
            </div><!-- /.top-works__btn -->
          </div><!-- /.top-works__content -->
        </div><!-- /.top-works__body -->
      </div><!-- /.top-works__wrapper -->
    </section><!-- /.top-works -->

    <section class="top-overview section-topoverview">
      <div class="top-overview__title section-header">
        <h2 class="section-header__title">overview</h2><!-- /.section-header__title -->
        <span class="section-header__subtitle">企業概要</span><!-- /.section-header__subtitle -->
      </div><!-- /.section-header -->
      <div class="top-overview__wrapper">
        <div class="top-overview__body">
          <div class="top-overview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/overview.jpg" alt="企業概要">
          </div><!-- /.top-overview__img -->

          <div class="top-overview__content">
            <h3 class="top-overview__contentttl">メインタイトルが入ります。</h3><!-- /.top-overview__contentttl -->
            <div class="top-overview__textblock">
              <p class="top-overview__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p><!-- /.top-overview__text -->
            </div><!-- /.top-overview__textblock -->
            <div class="top-overview__btn">
              <a href="<?php echo get_template_directory_uri(); ?>/overview" class="btn">詳しく見る</a><!-- /.top-overview__btn -->
            </div><!-- /.top-overview__btn -->
          </div><!-- /.top-overview__content -->
        </div><!-- /.top-overview__body -->
      </div>
    </section><!-- /.top-overview -->

    <section class="top-blog section-topblog">
      <div class="top-blog__inner">
        <div class="top-blog__title section-header">
          <h2 class="section-header__title section-header__title--right">blog</h2><!-- /.section-header__title -->
          <span class="section-header__subtitle">ブログ</span><!-- /.section-header__subtitle -->
        </div><!-- /.section-header -->
        <div class="top-blog__contents cards">
        <?php
                    /* （ステップ1）データの取得 */
                    $blog = new WP_Query(
                      array(
                          'post_type' => 'blog',
                          'posts_per_page' => 3,
                      )
                  );
                  
                  ?>
                  <?php
                    /* （ステップ2）データの表示 */
                    if ( $blog->have_posts() ) : ?>                  
                    <?php while ( $blog->have_posts() ) : $blog->the_post();?>
          <a href="<?php the_permalink(); ?>" class="cards__item card">
          <?php
          //記事の公開時間
          $get_time = get_the_time('U');

          //何日以内の記事にNEWをつけるか？此処を変更すればOK
          $w = 7;

          // 今の時間 - 7日
          $last = time() - ($w * 24 * 60 * 60);

          //　記事の公開時間が7日以内かどうかを判定。
          //  7日以内だったらpタグ入れる
          if ($get_time > $last) {
            echo '<p class="card--new">NEW</p>';
          }
          ?>
            <figure class="card__img">
            <?php the_post_thumbnail(); ?>
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                <?php echo wp_trim_words(get_the_title(), 30, '...'); ?>
              </h3><!-- /.card__title -->
              <p class="card__text">
                <?php echo wp_trim_words( get_the_content(), 38, '...' ); ?>
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category"><?php the_field('category'); ?></p>
                <time class="card__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.top-blog__content -->
          <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
        </div><!-- /.top-blog__contents -->
        <div class="top-blog__btn">
          <a href="<?php echo get_template_directory_uri(); ?>/blog" class="btn">詳しく見る</a><!-- /.btn -->
        </div><!-- /.top-blog__btn -->
      </div><!-- /.top-blog__inner -->
    </section><!-- /.top-blog -->
  </div>

    <section class="footer-contact section-footercontact">
      <div class="footer-contact__inner">
        <div class="footer-contact__title section-header">
          <h2 class="section-header__title">contact</h2><!-- /.section-header__title -->
          <span class="section-header__subtitle">お問い合わせ</span><!-- /.section-header__subtitle -->
        </div><!-- /.section-header -->
        <div class="footer-contact__body">
          <p class="footer-contact__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p><!-- /.footer-contact__text -->
          <div class="footer-contact__btn">
            <a href="<?php echo get_template_directory_uri(); ?>/contact" class="btn">お問い合わせへ</a><!-- /.btn -->
          </div><!-- /.footer-contact__btn -->
        </div><!-- /.footer-contact__body -->
      </div><!-- /.footer-contact__inner -->
    </section><!-- /.footer-contact -->
  </main>


<?php get_footer(); ?>