<?php
/*
* Template Name: page-blog
*/
?>

<?php get_header(); ?>

  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/blog-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-blog-mv.jpg" alt="ブログ">
        </picture>
        <h2 class="page-title__title">ブログ</h2>
      </div><!-- /.page-title__wrapper -->
    </div><!-- /.page-title -->

    <!-- ぱんくず -->
    <div id="breadcrumbs" class="detail-top">
      <div class="inner">
        <div class="breadcrumbs">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </div>
      </div>
    </div>

    <section class="blog section-blog">
      <div class="inner blog__inner">
        <div class="blog__search search">
          <span class="search__item is-active" data-group="">ALL</span>
          <span class="search__item" data-group="a">カテゴリ1</span>
          <span class="search__item" data-group="b">カテゴリカテゴリ</span>
          <span class="search__item" data-group="c">カテ</span>
        </div>

        <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $blog= new WP_Query( array(
                    'post_type' => 'blog',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                ));
        if ( $blog ->have_posts() ) :
      ?>
      <?php while ( $blog -> have_posts() ) : $blog -> the_post(); ?>
        <div class="blog__contents cards">
          <a href="../blog-detail/index.html" class="cards__item card card--new" data-group="a">
            <figure class="card__img">
              <img src="../images/common/blog1.jpg" alt="ブログ1">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="b">
            <figure class="card__img">
              <img src="../images/common/blog2.jpg" alt="ブログ2">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="c">
            <figure class="card__img">
              <img src="../images/common/blog3.jpg" alt="ブログ3">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="a">
            <figure class="card__img">
              <img src="../images/common/blog4.jpg" alt="ブログ4">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="b">
            <figure class="card__img">
              <img src="../images/common/blog5.jpg" alt="ブログ5">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="c">
            <figure class="card__img">
              <img src="../images/common/blog6.jpg" alt="ブログ6">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="a">
            <figure class="card__img">
              <img src="../images/common/blog7.jpg" alt="ブログ7">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="b">
            <figure class="card__img">
              <img src="../images/common/blog8.jpg" alt="ブログ8">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
          <a href="#" class="cards__item card" data-group="c">
            <figure class="card__img">
              <img src="../images/common/blog9.jpg" alt="ブログ9">
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                タイトルが入ります。タイトルが入ります。
              </h3><!-- /.card__title -->
              <p class="card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category">カテゴリ</p>
                <time class="card__date" datetime="2021-07-20">2021.07.20</time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
        </div><!-- /.blog__contents -->
        <?php endwhile; ?>
        <?php
      // サブクエリをリセット
        wp_reset_postdata();
        ?>

        <div class="wp-pagenavi__wrap">
          <?php
            if( function_exists('wp_pagenavi') ) {
                    wp_pagenavi(array('query' => $blog));
            }
            ?>
          <?php endif;?>
        </div>

      </div><!-- /.inner -->
    </section><!-- /.blog__contents -->
    
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
            <a href="#" class="btn">お問い合わせへ</a><!-- /.btn -->
          </div>
        </div><!-- /.footer-contact__body -->
      </div><!-- /.footer-contact__inner -->
    </section><!-- /.footer-contact -->
  </main>

  <?php get_footer(); ?>