  <!-- ==============================
  FOOTER
================================= -->

</main>


    <?php
    $current_slug = get_post_field('post_name', get_post());
    if ($current_slug !== 'contact' && $current_slug !== 'contact-thanks') :
    ?>
    <section class="p-cta">
      <div class="p-cta__inner">
        <div class="p-cta__body" data-animation="fade-in">
          <div class="p-cta__heading">
            <div class="c-heading c-heading--white c-heading--center">
              <h2 class="c-heading__en">CONTACT</h2>
              <p class="c-heading__ja">お問い合わせ</p>
            </div>
          </div>
          <div class="p-cta__info">
            <a href="tel:0726533109" class="p-cta__tel">072-653-3109</a>
            <div class="p-cta__time">受付時間：平日8時～17時</div>
          </div>
          <div class="p-cta__actions">
            <a href="<?php echo home_url(); ?>/contact" class="c-button c-button--blue"
              >メールでのお問い合わせ</a
            >
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <footer class="l-footer">
      <div class="l-footer__inner" data-animation="fade-in">
        <div class="l-footer__top">
          <a href="<?php home_url(); ?>/" class="l-footer__logo">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/logos/company-logo.webp"
              alt="株式会社森内機械製作所"
              width="456"
              height="70"
            />
          </a>
          <div class="l-footer__info">
            <address>
              〒566-0052　大阪府摂津市鳥飼本町5-9−3<br />
              TEL：<a href="tel:0726533109">072-653-3109</a><br />
              FAX：072-653-3104
            </address>
          </div>
        </div>

        <nav
          class="l-footer__middle p-footer-nav"
          aria-label="フッターナビゲーション"
        >
          <ul class="p-footer-nav__list" aria-label="事業メニュー">
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/service" class="p-footer-nav__link">事業内容</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/garbage-treatment-plant" class="p-footer-nav__link">ごみ処理プラント</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/products" class="p-footer-nav__link">実績紹介</a>
            </li>
          </ul>

          <ul class="p-footer-nav__list" aria-label="企業情報">
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/company" class="p-footer-nav__link">会社案内</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/recruit" class="p-footer-nav__link">採用情報</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/news" class="p-footer-nav__link">お知らせ</a>
            </li>
          </ul>

          <ul class="p-footer-nav__list" aria-label="お問い合わせ">
            <li class="p-footer-nav__item">
              <a href="<?php home_url(); ?>/contact" class="p-footer-nav__link">お問い合わせ</a>
            </li>
          </ul>

          <ul class="p-footer-nav__list" aria-label="SNS">
            <li class="p-footer-nav__item">
              <a
                href="https://www.facebook.com/moriuchimachine/"
                target="_blank"
                rel="noopener"
                class="p-footer-nav__link p-footer-nav__link--icon"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/icons/icon-facebook.webp"
                  alt="Facebook"
                  width="62"
                  height="62"
                />
              </a>
            </li>
          </ul>
        </nav>

        <div class="l-footer__bottom">
          <small class="l-footer__copy"
            >Copyright &copy; moriuchi machine Co.,Ltd. All rights
            reserved.</small
          >
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
