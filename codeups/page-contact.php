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
        <form action="" class="contact__form">
          <div class="contact__error-message">※必要事項を入力してください</div>
          <div class="contact__item">
            <label class="contact__label" for="company">※会社名・団体名</label>
            <input class="contact__input" type="text" id="company" name="company" placeholder="テキストがはいります" required>
          </div><!-- /.contact__item -->
          <div class="contact__item">
            <label class="contact__label" for="name">※お名前</label>
            <input  class="contact__input" type="text" id="name" name="name" placeholder="テキストがはいります" required>
          </div><!-- /.contact__item -->
          <div class="contact__item">
            <label class="contact__label" for="kana">※ふりがな</label>
            <input  class="contact__input" type="text" id="kana" name="kana" placeholder="テキストがはいります" required>
          </div><!-- /.contact__item -->
          <div class="contact__item">
            <label class="contact__label" for="email">※メールアドレス</label>
            <input  class="contact__input" type="text" id="email" name="email" placeholder="テキストがはいります" required>
          </div><!-- /.contact__item -->
          <div class="contact__item">
            <label class="contact__label" for="message">※お問い合わせ内容</label>
            <textarea  class="contact__input" id="message" name="message" placeholder="テキストがはいります" rows="11" required></textarea>
          </div><!-- /.contact__item -->
          <div class="contact__btn">
            <input class="contact__submit" type="submit" value="送信">
          </div><!-- /.contact__submit -->
        </form><!-- /.contact__form -->
      </div>
    </section><!-- /.contact -->
    
  </main>
  <?php get_footer(); ?>