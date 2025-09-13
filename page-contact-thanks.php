<?php
/*
Template Name: お問い合わせ完了
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
          <p class="p-pageHead__en">CONTACT</p>
          <h1 class="p-pageHead__ja">お問い合わせ</h1>
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
          <p>この度はお問い合わせいただき、誠にありがとうございます。</p>
          <p>担当者が内容を確認のうえ、改めてご連絡差し上げます。<br>ご回答まで今しばらくお待ちください<wbr />ますようお願い申し上げます。</p>
        </div>

        <div class="p-contact__button">
          <a href="#" class="c-button c-button--white c-button--back">トップへ戻る</a>
        </div>

        <div class="p-contact__telBox">
          <p class="p-contact__telLead">お電話でのお問い合わせ</p>
          <p class="p-contact__telNum">
            <a href="tel:0726533109">072-653-3109</a>
          </p>
          <p class="p-contact__telTime">受付時間：平日8時〜17時</p>
        </div>

      </div>
    </section>

<?php get_footer(); ?>