<?php
/*
Template Name: 会社案内
*/
?>

<?php get_header(); ?>

    <div class="p-pageHead">
      <div class="p-pageHead__bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/company/page-header-company.webp"
          alt="company-head"
          width="2880"
          height="2672" />
      </div>

      <div class="p-pageHead__inner">
        <div class="p-pageHead__body" data-animation="fade-in">
          <h2 class="p-pageHead__en">COMPANY</h2>
          <div class="p-pageHead__ja">会社案内</div>
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

    <div class="c-lead c-lead--compact" data-animation="fade-in">
      <p>
        森内機械製作所は、鉄・ステンレスを用いた<wbr />コンベア・ホッパーの製造を主力とし、<br />
        設計から製缶、加工、組立まで一貫して<wbr />対応するものづくり企業です。<br />
      </p>
      <p>
        コンベアは自社ブランドとしての<wbr />製造も行っており、<wbr />長年の経験と技術力を活かした<wbr />オーダーメイド製作を強みとしています。<br />
      </p>
      <p>
        これまで50年以上にわたり、<wbr />多様な産業分野のお客様から<wbr />信頼をいただき、<wbr />安定した経営を続けてまいりました。<br />
        今後も、少数精鋭ならではの<wbr />柔軟な対応力と確かな品質で、<wbr />お客様のニーズに応えてまいります。<br />
      </p>
    </div>

    <section class="p-about">
      <div class="p-about__inner l-inner">
        <div class="p-about__heading">
          <div class="c-sectionTitle" data-animation="fade-in">
            <h2 class="c-sectionTitle__en">ABOUT</h2>
            <p class="c-sectionTitle__ja">会社概要</p>
          </div>
        </div>
        <div class="p-about__body" data-animation="fade-in">
          <dl class="c-definitionList">
            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">社名</dt>
              <dd class="c-definitionList__desc" itemprop="name">
                株式会社森内機械製作所
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">代表取締役社長</dt>
              <dd class="c-definitionList__desc" itemprop="founder">
                森内　健次
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">所在地</dt>
              <dd class="c-definitionList__desc" itemprop="address">
                〒566-0052　大阪府摂津市鳥飼本町5-9-3
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">創立</dt>
              <dd class="c-definitionList__desc">昭和31年5月</dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">資本金</dt>
              <dd class="c-definitionList__desc">10,000,000円</dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">事業内容</dt>
              <dd class="c-definitionList__desc">
                製缶加工全般、各種コンベア・ホッパー・ダクト・フライス・旋盤加工、組込、各種設計加工
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">請負業務</dt>
              <dd class="c-definitionList__desc">
                機械搬入・搬出、機械設備・施工全般
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">工場設備</dt>
              <dd class="c-definitionList__desc">
                <span>【本社工場】敷地 823.6㎡、建物 547.8㎡</span>
                <ul class="c-definitionList__listBullet">
                  <li>NC旋盤（13尺）：1台</li>
                  <li>旋盤（7尺）：1台</li>
                  <li>正面盤（チャック径1m）：1台</li>
                  <li>NC旋盤（7尺）：1台</li>
                  <li>フライスⅡ型（加工稼働域140mm）：1台</li>
                  <li>フライスⅢ型（加工稼働域700mm）：1台</li>
                  <li>キーシーター（ストローク長400L）：1台</li>
                  <li>ボール盤：3台</li>
                  <li>ラジアルボール盤（1600）：1台</li>
                  <li>定盤：1台</li>
                  <li>20tプレス（自社製）：1台</li>
                  <li>500tプレス（自社製）：1台</li>
                  <li>抵抗機：7台</li>
                  <li>ガス半自動溶接機：9台</li>
                  <li>TIG溶接機：4台</li>
                  <li>3本ロール（900巾）：1台</li>
                  <li>3本ロール（2500巾）：1台</li>
                  <li>高速カッター：3台</li>
                  <li>コンプレッサー（5馬力）：1台</li>
                  <li>コンプレッサー（10馬力）：1台</li>
                  <li>クレーン（1t）：1台</li>
                  <li>クレーン（2t）：1台</li>
                  <li>クレーン（2.8t）：2台</li>
                  <li>クレーン（2t）：1台</li>
                  <li>車両：4台</li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <section class="p-history">
      <div class="p-history__inner l-inner">
        <div class="p-history__heading">
          <div class="c-sectionTitle" data-animation="fade-in">
            <h2 class="c-sectionTitle__en">HISTORY</h2>
            <p class="c-sectionTitle__ja">沿革</p>
          </div>
        </div>

        <div class="p-history__body" data-animation="fade-in">
          <ul class="p-history__timeline">
            <li class="p-history__item">
              <time class="p-history__date" datetime="1953-06">1953年6月（昭和28年）</time>
              <p class="p-history__text">
                大阪府高槻市富田町にて故森内稔が大日本セロハン㈱の協力工場として、森内機械工作所を設立
              </p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1956-12">1956年12月（昭和31年）</time>
              <p class="p-history__text">
                資本金を50万円に増資<br />
                株式会社森内機械製作所を設立
              </p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1963-05">1963年5月（昭和38年）</time>
              <p class="p-history__text">資本金を150万円に増資</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1968-02">1968年2月（昭和43年）</time>
              <p class="p-history__text">代表取締役社長に森内政男が就任</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1968-12">1968年12月（昭和43年）</time>
              <p class="p-history__text">大阪府高槻市須賀町122-7に工場新設</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1969-04">1969年4月（昭和44年）</time>
              <p class="p-history__text">本社を大阪府高槻市須賀町に移転</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1986-07">1986年7月（昭和61年）</time>
              <p class="p-history__text">
                本社を大阪府摂津市鳥飼本町1丁目3-2に移転<br />
                代表取締役社長に森内由次が就任
              </p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1992-09">1992年9月（平成4年）</time>
              <p class="p-history__text">資本金を1000万円に増資</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="1993-08">1993年8月（平成5年）</time>
              <p class="p-history__text">大阪府高槻市梶原町に高槻工場開設</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="2000-07">2000年7月（平成12年）</time>
              <p class="p-history__text">
                本社工場と高槻工場を統合<br />
                大阪府摂津市鳥飼本町5丁目9-3に移転
              </p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="2009-11">2009年11月（平成21年）</time>
              <p class="p-history__text">大阪府摂津市新在家に第二工場設立</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="2011-11">2011年11月（平成23年）</time>
              <p class="p-history__text">本社と第二工場を統合</p>
            </li>

            <li class="p-history__item">
              <time class="p-history__date" datetime="2019-04">2019年4月（平成31年）</time>
              <p class="p-history__text">代表取締役社長に森内健次が就任</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="p-access">
      <div class="p-access__inner l-inner">
        <div class="p-access__heading">
          <div class="c-sectionTitle" data-animation="fade-in">
            <h2 class="c-sectionTitle__en">ACCESS</h2>
            <p class="c-sectionTitle__ja">アクセス</p>
          </div>
        </div>

        <div class="p-access__body" data-animation="fade-in">
          <div class="p-access__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5521.756097492769!2d135.5748070772571!3d34.77550887289313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e24133e577e7%3A0x6286c8f8d4ece290!2z77yI5qCq77yJ5qOu5YaF5qmf5qKw6KO95L2c5omA!5e0!3m2!1sja!2sjp!4v1757555467161!5m2!1sja!2sjp"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="株式会社森内機械製作所 周辺地図"></iframe>
            <noscript>
              <img
                class="map-fallback"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/content/company/map.webp"
                alt="周辺地図（静的画像）"
                width="2160"
                height="1100"
                loading="lazy" />
            </noscript>
          </div>

          <div class="p-access__content">
            <address
              class="p-access__address"
              itemprop="address"
              itemscope
              itemtype="https://schema.org/PostalAddress">
              〒566-0052　大阪府摂津市鳥飼本町5-9−3
            </address>

            <div class="p-access__actions">
              <a
                class="p-access__link"
                target="_blank"
                rel="noopener"
                href="https://maps.app.goo.gl/ogrsRaGzYvWLXgqd7">
                GoogleMapで見る
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>