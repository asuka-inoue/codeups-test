<?php get_header(); ?>
  <main>
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

    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="blog-detail section-blogdetail">
      <div class="blog-detail__inner inner">
        <h1 class="blog-detail__title">
          <?php the_title(); ?>
        </h1><!-- /.blog-detail__title -->
        <div class="blog-detail__info detail__post-info">
        <time class="post-info__date" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y/m/d'); ?></time><!-- /.detail__date -->
          <div class="detail__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div><!-- /.detail__category -->
        </div><!-- /.detail__post-info -->
      </div><!-- /.inner -->

      <div class="blog-detail__gallery gallery">
        <div class="gallery__inner">
          <figure class="gallery__img">
          <?php
            $data1 = get_field('image1');
            if($data1):
              //wp_get_attachment_image_src(画像ID, '画像サイズ')で画像情報を取得
              $images1 = wp_get_attachment_image_src($data1, 'full');
              
              //画像URLは配列の[0]にあるので、それを利用して画像出力
              echo '<img src="'.$images1[0].'">';
            endif;
            ?>
          </figure><!-- /.gallery__img -->
        </div><!-- /.gallery__inner -->                
      </div>

      <div class="blog-detail__inner inner">
        <div class="blog-detail__text">
        <?php the_content(); ?>
        </div><!-- /.blog-detail__text -->
        <h3 class="blog-detail__subtitle"><?php the_field('title2'); ?></h3><!-- /.blog-detail__subtitle -->
        <p class="blog-detail__text">
        <?php the_field('text2'); ?>
        </p><!-- /.blog-detail__text -->
        <h4 class="blog-detail__smalltitle"><?php the_field('title3'); ?></h4><!-- /.blog-detail__smalltitle -->
        <p class="blog-detail__text">
        <?php the_field('text3'); ?>
        </p><!-- /.blog-detail__text -->
      </div><!-- /.blog-detail__inner -->

      <div class="blog-detail__gallery gallery">
        <div class="gallery__inner">
          <figure class="gallery__img">
          <?php
            $data2 = get_field('image2');
            if($data2):
              //wp_get_attachment_image_src(画像ID, '画像サイズ')で画像情報を取得
              $images2 = wp_get_attachment_image_src($data2, 'full');
              
              //画像URLは配列の[0]にあるので、それを利用して画像出力
              echo '<img src="'.$images2[0].'">';
            endif;
            ?>
          </figure><!-- /.gallery__img -->
        </div><!-- /.gallery__inner -->                
      </div>

      <div class="blog-detail__inner inner">
        <div class="blog-detail__lists">
        <?php the_field('list1'); ?>
        </div><!-- /.blog-detail__lists -->

        <div class="blog-detail__lists">
        <?php the_field('list2'); ?>
        </div>
      </div><!-- /.blog-detail__inner -->
      <?php endwhile; ?>
      <?php endif; ?>

      
        <div class="wp-pagenavi">
          <div class="wp-pagenavi__wrap detail__pagenav">
            <div class="wp-pagenavi__prev">
              <?php previous_post_link('%link', 'PREV'); // 前の投稿へのリンク ?>
            </div><!-- /.wp-pagenavi__prev -->
            <a href="<?php echo esc_url( home_url( '/' )); ?>/blog" class="wp-pagenavi__more">一覧</a>
            <div class="wp-pagenavi__next">
              <?php next_post_link('%link', 'NEXT'); // 次の投稿へのリンク ?>
            </div>
          </div><!-- /.wp-pagenavi__wrap -->
        </div><!-- /.wp-pagenavi -->
    </section><!-- /.works-detail -->

    <section class="related-article section-article">
      <div class="inner">
        <h2 class="related-article__title">
          関連記事
        </h2><!-- /.related-article__btn -->
        <div class="related-article__contents cards">
        <?php if(has_category() ) {
          $cats =get_the_category();
          $catkwds = array();
          foreach($cats as $cat){
              $catkwds[] = $cat->term_id;
          }
        } ?>
        <?php $args = array(
            'post_type' => 'blog',
            'posts_per_page' => '4',
            'post__not_in' =>array( $post->ID ),
            'category__in' => $catkwds,
            'orderby' => 'rand'
          );
          $my_query = new WP_Query( $args );
          if ( $my_query->have_posts() ) : 
            while ( $my_query->have_posts() ) : $my_query->the_post(); 
          ?>
        
          <a href="<?php the_permalink(); ?>" class="card related-article__card">
            <figure class="card__img related-article__img">
            <?php the_post_thumbnail(); ?>
            </figure><!-- /.card__img -->
            <div class="card__body">
              <h3 class="card__title">
                <?php echo wp_trim_words( get_the_title(), 18, '...' ); ?>
              </h3><!-- /.card__title -->
              <p class="card__text u-mobile">
              <?php echo wp_trim_words( get_the_content(), 38, '...' ); ?>
              </p><!-- /.card__text -->
              <div class="card__info">
                <p class="card__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                <time class="card__date" datetime="the_time( 'Y-m-d' )"><?php the_field('date'); ?></time>
              </div><!-- /.card__info -->
            </div><!-- /.card__body -->
          </a><!-- /.related-article__content -->
          <?php endwhile;
          else:
          ?>

          <p>記事は見つかりませんでした</p>

          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- /.related-article__contents -->
      </div><!-- /.inner -->
    </section><!-- /.related-article -->
    
    
    <section class="footer-contact section-footercontact">
      <div class="footer-contact__inner">
        <div class="section-header footer-contact__title">
          <h2 class="section-header__title">contact</h2><!-- /.section-header__title -->
          <span class="section-header__subtitle">お問い合わせ</span><!-- /.section-header__subtitle -->
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