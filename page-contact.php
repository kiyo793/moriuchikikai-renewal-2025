<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

    <div class="p-pageHead">
      <div class="p-pageHead__bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/contact/page-header-contact.webp"
          alt="company-head"
          width="2880"
          height="2672" />
      </div>

      <div class="p-pageHead__inner">
        <div class="p-pageHead__body" data-animation="fade-in">
          <h2 class="p-pageHead__en">CONTACT</h2>
          <div class="p-pageHead__ja">お問い合わせ</div>
        </div>
      </div>
    </div>

    <?php if ( function_exists( 'bcn_display' ) ) : ?>
      <nav class="c-breadcrumb" aria-label="パンくずリスト">
        <ol class="c-breadcrumb__list">
          <?php bcn_display(); ?>
        </ol>
      </nav>
    <?php endif; ?>

    <section class="p-contact" data-animation="fade-in">
      <div class="p-contact__inner l-inner--sm">
        <div class="p-contact__lead">
          <p>森内機械製作所へのお問い合わせは、以下のフォームまたは<wbr>お電話にて承っております。</p>
          <p>製品のご相談、ご依頼、採用に関するご質問など、お気軽にご連絡ください。</p>
        </div>

        <div class="p-contact__telBox">
          <p class="p-contact__telLead">お電話でのお問い合わせ</p>
          <p class="p-contact__telNum">
            <a href="tel:0726533109"> 072-653-3109 </a>
          </p>
          <p class="p-contact__telTime">受付時間：平日8時〜17時</p>
        </div>

        <div class="p-contact__head">
          <h2>お問い合わせフォーム</h2>
        </div>

        <div class="p-contact__form">
          <?php echo do_shortcode('[contact-form-7 id="b95043d" title="コンタクトフォーム 1"]'); ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>