<?php
/*
Template Name: 実績紹介
*/
?>

<?php get_header(); ?>

<div class="p-pageHead">
  <div class="p-pageHead__bg">
    <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/page-header-products.webp"
      alt="products-head"
      width="2880"
      height="2672" />
  </div>

  <div class="p-pageHead__inner">
    <div class="p-pageHead__body" data-animation="fade-in">
      <p class="p-pageHead__en">PRODUCTS</p>
      <h1 class="p-pageHead__ja">実績紹介</h1>
    </div>
  </div>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <nav class="c-breadcrumb" aria-label="パンくずリスト">
    <ol class="c-breadcrumb__list">
      <?php bcn_display(); ?>
    </ol>
  </nav>
<?php endif; ?>

<div class="c-lead c-lead--compact" data-animation="fade-in">
  <p>
    森内機械製作所では、鉄・ステンレスを用いたコンベアやホッパーなどの製品を、製缶から設計・据付まで一貫して製作しています。
  </p>
  <p>
    長年の経験と技術を活かし、現場に合わせたオーダーメイド製作を行っており、以下にその一部をご紹介いたします。
  </p>
</div>

<section class="p-products">
  <div class="p-products__inner l-inner">
    <div class="p-products__body">
      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_1.webp"
            alt="タンク"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">タンク</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_2.webp"
            alt="油圧ダンパー"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">油圧ダンパー</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_3.webp"
            alt="Φ370ｘ1300Lプーリー"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">Φ370ｘ1300Lプーリー</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_4.webp"
            alt="エプロンコンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">エプロンコンベヤ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_5.webp"
            alt="スクリューコンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">スクリューコンベヤ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_6.webp"
            alt="ヘッドスプロケット"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">ヘッドスプロケット</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_7.webp"
            alt="駆動ホイル＆シャフト"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">駆動ホイル＆シャフト</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_8.webp"
            alt="鋳物２つ割軸受"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">鋳物２つ割軸受</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_9.webp"
            alt="φ190ｘ2500Lシャフト"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">φ190ｘ2500Lシャフト</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_10.webp"
            alt="沈殿槽タンク"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">沈殿槽タンク</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_11.webp"
            alt="破砕機部品"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">破砕機部品</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_12.webp"
            alt="砲金２つ割ブッシュ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">砲金２つ割ブッシュ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_13.webp"
            alt="蒸気配管"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">蒸気配管</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_14.webp"
            alt="エアーステップ台"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">エアーステップ台</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_15.webp"
            alt="油圧機械"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">油圧機械</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_16.webp"
            alt="チルローダー"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">チルローダー</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_17.webp"
            alt="ダンプ用ハッチ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">ダンプ用ハッチ</h2>
          <h3 class="c-products-card__text">材質なし</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/produts/img_18.webp"
            alt="重量単体物輸送"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">重量単体物輸送</h2>
          <h3 class="c-products-card__text">材質なし</h3>
        </div>
      </div>
    </div>

    <div class="p-products__button">
      <a href="<?php echo home_url(); ?>/garbage-treatment-plant" class="c-button c-button--white" data-animation="fade-in">ごみ処理プラントについて</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>