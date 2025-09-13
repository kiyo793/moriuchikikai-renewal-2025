<?php
/*
Template Name: 事業内容
*/
?>

<?php get_header(); ?>

    <div class="p-pageHead">
      <div class="p-pageHead__bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/page-header-service.webp"
          alt="company-head"
          width="2880"
          height="2672" />
      </div>

      <div class="p-pageHead__inner" data-animation="fade-in">
        <div class="p-pageHead__body">
          <p class="p-pageHead__en">SERVICE</p>
          <h1 class="p-pageHead__ja">事業内容</h1>
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

    <div class="c-lead" data-animation="fade-in">
      <p>
        森内機械製作所では、鉄・ステンレスを用いた<br
          class="u-hidden-pc" />コンベア・ホッパーの製作を主軸に、<br />
        製缶加工・機械加工・設計・据付まで<br
          class="u-hidden-pc" />一貫して対応できる体制を整えています。
      </p>
      <p>
        用途や設置環境に合わせた<br
          class="u-hidden-pc" />オーダーメイド製作に強みを持ち、<br />
        小ロットからのご依頼にも<br
          class="u-hidden-pc" />柔軟に対応いたします。
      </p>
      <p>
        長年培ってきた技術力を活かし、<br
          class="u-hidden-pc" />品質・精度・納期のすべてに誠実に取り組んでいます。
      </p>
    </div>

    <section class="p-service">
      <div class="p-service__inner l-inner">
        <div class="p-service__body">
          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service01</span>
                  <h2 class="c-service-media__title">
                    コンベア・ホッパー・ダクト製作
                  </h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>
                      各種コンベア（搬送ライン）や、ホッパー・ダクトの設計・製作
                    </li>
                    <li>設置環境・搬送物に応じたオーダーメイド対応</li>
                    <li>自社ブランドのコンベア製造にも対応可能</li>
                    <li>鉄・ステンレス対応</li>
                    <li>ごみ処理プラント向けの実績多数</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_1.webp"
                  alt="コンベア・ホッパー・ダクト製作"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
            </div>
          </div>

          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service02</span>
                  <h2 class="c-service-media__title">製缶加工</h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>鉄・ステンレス製の筐体、フレーム、タンクなど</li>
                    <li>精密な寸法管理・高品質な溶接仕上げ</li>
                    <li>コンベア部品・プラント設備の筐体製作にも対応</li>
                    <li>ごみ処理設備向けの実績多数</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_2.webp"
                  alt="製缶加工"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
            </div>
          </div>

          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service03</span>
                  <h2 class="c-service-media__title">
                    機械加工（旋盤・フライス）
                  </h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>鉄・ステンレスの部品加工に対応</li>
                    <li>製缶品と組み合わせた一体製作も対応可能</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_3.webp"
                  alt="機械加工"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
            </div>
          </div>

          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service04</span>
                  <h2 class="c-service-media__title">組込・据付</h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>自社工場での組立、動作確認後に納品</li>
                    <li>現地据付け対応可能</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_4.webp"
                  alt="組込・据付"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
            </div>
          </div>

          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service05</span>
                  <h2 class="c-service-media__title">設計・施工</h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>ご要望に応じた図面作成（2D CADベース）</li>
                    <li>製作・施工まで一貫して対応</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_5.webp"
                  alt=" 設計・施工"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
            </div>
          </div>

          <div class="c-service-media" data-animation="fade-in">
            <div class="c-service-media__inner">
              <div class="c-service-media__content">
                <div class="c-service-media__head">
                  <span class="c-service-media__num">Service06</span>
                  <h2 class="c-service-media__title">その他請負業務</h2>
                </div>
                <div class="c-service-media__list">
                  <ul>
                    <li>機械の搬入・搬出</li>
                    <li>
                      螺旋階段・鉄骨構造物などの製作にも対応（鉄・ステンレス）
                    </li>
                    <li>産業機械関連の個別対応もご相談可</li>
                  </ul>
                </div>
              </div>
              <div class="c-service-media__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/content/service/img_6.webp"
                  alt="その他請負業務"
                  width="960"
                  height="652"
                  loading="lazy" />
              </div>
          </div>
        </div>

        <div class="p-service__button" data-animation="fade-in">
          <a href="<?php home_url(); ?>/products" class="c-button c-button--white">実績紹介を見る</a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>