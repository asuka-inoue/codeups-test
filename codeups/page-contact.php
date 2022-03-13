<?php
/*
* Template Name: contact
*/
?>

<?php get_header(); ?>

  <main>
    <div class="page-title main-view">
      <div class="page-title__wrap">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/contact-mv.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-contact-mv.jpg" alt="お問い合わせ">
        </picture>
        <h2 class="page-title__title">お問い合わせ</h2>
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

    <section class="contact section-contact">
      <div class="contact__inner inner">
        <div class="contact__form">
          <?php echo apply_shortcodes( '[contact-form-7 id="201" title="お問い合わせ"]' ); ?>
        </div><!-- /.contact__form -->
      </div>
    </section><!-- /.contact -->
    
  </main>
  <?php get_footer(); ?>