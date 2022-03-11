<?php get_header(); ?>
  <main>
    <section class="error section-error">
      <div class="inner">
        <div class="error__items">
          <h1 class="error__title">
            404 Not Found
          </h1><!-- /.error__title -->
          <p class="error__text">
            お探しのページは見つかりませんでした。
          </p><!-- /.error__text -->
          <a href="<?php echo esc_url( home_url( '/' )); ?>" class="btn error__btn">topへ</a><!-- /.btn -->
        </div><!-- /.error__items -->
      </div><!-- /.inner -->
    </section><!-- /.error -->
  </main>
<?php get_footer(); ?>