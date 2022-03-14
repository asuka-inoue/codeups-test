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
          <span class="search__item is-active" data-filter="">ALL</span>
          <span class="search__item" data-filter="category1">カテゴリ1</span>
          <span class="search__item" data-filter="category2">カテゴリ2</span>
          <span class="search__item" data-filter="category3">カテゴリ3</span>
        </div>

        <div class="blog__contents cards">
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
      
      
          <a href="<?php the_permalink(); ?>" class="cards__item card" data-category="<?php the_field('category_label'); ?>">
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
              <?php echo get_the_post_thumbnail(); ?>
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
              <?php echo wp_trim_words(get_the_title(), 30, '...'); ?>
              </h3><!-- /.card__title -->
              <p class="card__text">
              <?php echo wp_trim_words( get_the_content(), 38, '...' ); ?>
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                <time class="card__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.blog__content -->
        
        <?php endwhile; ?>
        <?php
      // サブクエリをリセット
        wp_reset_postdata();
        ?>
        </div><!-- /.blog__contents -->

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
            <a href="<?php echo esc_url( home_url( '/' )); ?>/contact" class="btn">お問い合わせへ</a><!-- /.btn -->
          </div>
        </div><!-- /.footer-contact__body -->
      </div><!-- /.footer-contact__inner -->
    </section><!-- /.footer-contact -->
  </main>

  <?php get_footer(); ?>