<?php
/*
* Template Name: thanks
*/
?>

<?php get_header(); ?>
  <main>
    <section class="thanks">
      <div class="inner">
        <div class="thanks__items">
          <h2 class="thanks__title">
            お問い合わせ完了
          </h2><!-- /.thanks__title -->
          <p class="thanks__text">
            3営業日以内に<br>
            返信させて頂きます。
          </p><!-- /.thanks__text -->
          <a href="<?php echo esc_url( home_url( '/' )); ?>" class="btn thanks__btn">topへ</a><!-- /.btn -->
        </div><!-- /.thanks__items -->
      </div><!-- /.inner -->
    </section><!-- /.thanks -->


  </main>
  <?php get_footer(); ?>