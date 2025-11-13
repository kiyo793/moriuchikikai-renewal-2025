<?php
/*
Template Name: 実績紹介
*/
?>

<?php get_header(); ?>

<div class="p-pageHead">
  <div class="p-pageHead__bg">
    <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/page-header-products.webp"
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

<div class="c-lead c-lead--compact c-lead--narrow" data-animation="fade-in">
  <p>
    森内機械製作所では、鉄・ステンレスを用いた<br class="u-hidden-pc">コンベアやホッパーなどの製品を、<br class="u-hidden-pc">製缶から設計・据付まで<br class="u-hidden-pc">一貫して製作しています。
  </p>
  <p>
    長年の経験と技術を活かし、<br class="u-hidden-pc">現場に合わせた<wbr>オーダーメイド製作を行っており、<br class="u-hidden-pc">以下にその一部をご紹介いたします。
  </p>
</div>

<section class="p-products">
  <div class="p-products__inner l-inner">
    <div class="p-products__body">
      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_1.webp"
            alt="減温塔ガスダクト"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">減温塔ガスダクト</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_2.webp"
            alt="灰押出装置本体"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">灰押出装置本体</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_5.webp"
            alt="スクリューコンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">スクリューコンベア(3m)</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_6.webp"
            alt="集塵機下ダストコンベヤスクリュー(12m)"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">集塵機下ダストコンベヤスクリュー(12m)</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_9.webp"
            alt="スラグ切替コンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">スラグ切替コンベヤ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_10.webp"
            alt="フライトコンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">フライトコンベヤ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <video src="<?php echo get_template_directory_uri(); ?>/assets/mov/products-mov.mp4" loop autoplay muted></video>
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">エプロンコンベヤ</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_4.webp"
            alt="ホッパーゲート"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">ホッパーゲート</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>



      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_7.webp"
            alt="脱水し渣ホッパ(6m3)"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">脱水し渣ホッパ(6m3)</h2>
          <h3 class="c-products-card__text">素材（ステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_8.webp"
            alt="脱水汚泥コンベヤ"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">脱水汚泥コンベヤ</h2>
          <h3 class="c-products-card__text">素材（ステンレス）</h3>
        </div>
      </div>


      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_11.webp"
            alt="投入ホッパー"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">投入ホッパー</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_12.webp"
            alt="ガスダクト(φ1200)"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">ガスダクト(φ1200)</h2>
          <h3 class="c-products-card__text">素材（ステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_13.webp"
            alt="熱分解ドラム"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">熱分解ドラム</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_14.webp"
            alt="キルン炉管(カロライズ加工)"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">キルン炉管(カロライズ加工)</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_15.webp"
            alt="調温塔傾斜部"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">調温塔傾斜部</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_16.webp"
            alt="スクリュー軸(羽部25t.  φ700)"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">スクリュー軸(羽部25t. φ700)</h2>
          <h3 class="c-products-card__text">材質（鉄またはステンレス）</h3>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_17.webp"
            alt="螺旋階段"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">螺旋階段</h2>
        </div>
      </div>

      <div class="c-products-card" data-animation="fade-in">
        <div class="c-products-card__head">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/products/img_18.webp"
            alt="エアーステップ台"
            width="1010"
            height="746"
            loading="lazy" />
        </div>
        <div class="c-products-card__bottom">
          <h2 class="c-products-card__name">エアーステップ台</h2>
        </div>
      </div>
    </div>

    <div class="p-products__button">
      <a href="<?php echo home_url(); ?>/garbage-treatment-plant" class="c-button c-button--white" data-animation="fade-in">ごみ処理プラントについて</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>