
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
          <a href="<?php echo esc_url( home_url( '/' )); ?>/blog" class="search__item">ALL</a>
          <?php
          $taxonomies = 'tax_blog';
          $args = array(
            'hide_empty'    => true, //投稿に紐づいていないタームは出力しない
            'order' => 'ASC', //昇順
            'orderby' => 'menu_order' //管理画面の並び順通りにする
          );
          $tax_blog_terms = get_terms($taxonomies, $args);
          foreach ($tax_blog_terms as $term) :
            $term_name = $term->name;
            $term_slug = $term->slug;
            $term_link = get_term_link($term_slug, $taxonomies)
          ?>
          <?php
            //現在表示中のタクソノミーアーカイブのスラッグと一致している場合
            if (get_query_var('term') === $term_slug) : ?>
              <span class="search__item is-active"><?php echo $term_name; ?></span>
            <?php else : ?>
              <a class="search__item" href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <div class="blog__contents cards">
        <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $tax_blog_args = array(
          'paged' => $paged,
          'post_type' => array('blog'),
          'post_status' => 'publish',
          'order' => 'DESC',
          'orderby' => 'date',
          'posts_per_page' => 9,
          'tax_query' => array(
            array(
              'taxonomy' => 'tax_blog',
              'field' => 'slug',
              'terms' => get_query_var('term'), //get_query_var()はページ種別やパーマリンク 構造によって取得できる情報が自動的に変化していく便利な関数
            ),
          ),
        );
      
        $tax_blog_query = new WP_Query($tax_blog_args);

            $post_count = $tax_blog_query->found_posts;
            if ($tax_blog_query->have_posts()) :
            ?>
        <?php while ($tax_blog_query->have_posts()) : $tax_blog_query->the_post(); ?>
      
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
              <?php
                $terms = get_the_terms(get_the_ID(), 'tax_blog');
                if ($terms) : ?>
                <p class="card__category"><?php echo $terms[0]->name; ?></p>
                <?php endif; ?>
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
                    wp_pagenavi(array('query' => $tax_blog_query));
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