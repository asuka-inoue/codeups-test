<?php
/*
* Template Name: page-work
*/
?>

<?php get_header(); ?>

  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/content-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-content-mv.jpg" alt="制作実績">
        </picture>
        <h1 class="page-title__title">制作実績</h1>
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

    <section class="works section-works">
      <div class="works__search search">
        <span class="search__item is-active">ALL</span>
        <?php
          $taxonomies = 'tax_works';
          $args = array(
            'hide_empty'    => true, //投稿に紐づいていないタームは出力しない
            'order' => 'ASC', //昇順
            'orderby' => 'menu_order' //管理画面の並び順通りにする
          );
          $tax_works_terms = get_terms($taxonomies, $args);
          foreach ($tax_works_terms as $term) :
            $term_name = $term->name;
            $term_slug = $term->slug;
            $term_link = get_term_link($term_slug, $taxonomies)
          ?>
          <a class="search__item" href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a>
          <?php endforeach; ?>
      </div>

      <div class="works__inner">
        <div class="works__contents">
        <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $work= new WP_Query( array(
                    'post_type' => 'works',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                ));
        if ( $work ->have_posts() ) :
      ?>
      <?php while ( $work -> have_posts() ) : $work -> the_post(); ?>
      
          <a href="<?php the_permalink(); ?>" class="works__card">
            <figure class="works__img">
              <?php echo get_the_post_thumbnail(); ?>
              <?php
                $terms = get_the_terms(get_the_ID(), 'tax_works');
                if ($terms) : ?>
                <figcaption><?php echo $terms[0]->name; ?></figcaption>
                <?php endif; ?>
            </figure><!-- /.card__img -->
            <h3 class="works__title"><?php the_title(); ?></h3>
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
                    wp_pagenavi(array('query' => $work));
            }
            ?>
          <?php endif;?>
        </div>
      </div>
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