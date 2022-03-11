<?php
/*
* Template Name: page-news
*/
?>

<?php get_header(); ?>
  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/news-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-news-mv.jpg" alt="お知らせ">
        </picture>
        <h2 class="page-title__title">お知らせ</h2>
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

    <section class="news news-page">
      <div class="news__inner inner">
      <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $information= new WP_Query( array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                ));
        if ( $information ->have_posts() ) :
      ?>
      <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
        <div class="news__content">
          <div class="news__info post-info">
            <time class="post-info__date" datetime="the_time( 'Y-m-d' )"><?php the_time( 'Y.m.d' ); ?></time>
            <p class="post-info__category">お知らせ</p>
          </div><!-- /.news__head -->
          <h3 class="news__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!-- /.news__title-link -->
          </h3><!-- /.news__title -->
        </div><!-- /.news__content -->
        <?php endwhile; ?>
        <?php
      // サブクエリをリセット
        wp_reset_postdata();
        ?>

          <div class="wp-pagenavi__wrap">
            <?php
              if( function_exists('wp_pagenavi') ) {
                      wp_pagenavi(array('query' => $information));
              }
              ?>
            <?php endif;?>
          </div>
      </div><!-- /.inner -->
    </section><!-- /.news -->
    
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