<?php get_header() ?>

<section class="p-topHero">
  <div class="p-topHero__inner">
    <div class="p-topHero__image">
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/hero-main.webp" />
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/hero-main_sp.webp"
          width="2720"
          height="1360"
          alt="溶接作業を行う職人の写真"
          decoding="async" />
      </picture>
    </div>
    <div class="p-topHero__contents" data-animation="fade-in">
      <h2 class="p-topHero__text">
        鍛え抜かれた<br class="u-hidden-pc" />匠の技術で、<br />
        人に喜ばれる、<br class="u-hidden-pc" />本物の<br
          class="u-hidden-pc" />「モノづくり」を。
      </h2>
    </div>
  </div>
</section>

<section class="p-topContentsNav">
  <div class="p-topContentsNav__inner">
    <div class="p-topContentsNav__media" data-animation="fade-in">
      <div class="p-topContentsNav__heading" data-animation="fade-in">
        <div class="c-heading">
          <h2 class="c-heading__en">SERVICE</h2>
          <p class="c-heading__ja">事業内容</p>
        </div>
      </div>
      <div class="p-topContentsNav__image">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/img_1.webp"
          alt="投入ホッパー"
          width="1600"
          height="1000"
          loading="lazy" />
      </div>
      <div class="p-topContentsNav__actions" data-animation="fade-in">
        <a href="<?php echo home_url(); ?>/service" class="c-button c-button--white">詳しく見る</a>
        <a href="<?php echo home_url(); ?>/garbage-treatment-plant" class="c-button c-button--white">ごみ処理プラントについて</a>
      </div>
    </div>

    <div class="p-topContentsNav__media" data-animation="fade-in">
      <div class="p-topContentsNav__heading" data-animation="fade-in">
        <div class="c-heading">
          <h2 class="c-heading__en">PRODUCTS</h2>
          <p class="c-heading__ja">実績紹介</p>
        </div>
      </div>
      <div class="p-topContentsNav__image">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/img_2.webp"
          alt="ダクト"
          width="1600"
          height="1000"
          loading="lazy" />
      </div>
      <div class="p-topContentsNav__actions" data-animation="fade-in">
        <a href="<?php echo home_url(); ?>/products" class="c-button c-button--white">詳しく見る</a>
      </div>
    </div>
  </div>
</section>

<section class="p-topCorporateNav">
  <div class="p-topCorporateNav__inner">
    <div class="p-topCorporateNav__list">
      <div class="p-topCorporateNav__media" data-animation="fade-in">
        <div class="p-topCorporateNav__image">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/img_3.webp"
            alt="会社案内"
            width="1020"
            height="720"
            loading="lazy" />
        </div>
        <div class="p-topCorporateNav__body">
          <div class="p-topCorporateNav__heading">
            <div class="c-heading c-heading--white c-heading--center">
              <h2 class="c-heading__en">COMPANY</h2>
              <p class="c-heading__ja">会社案内</p>
            </div>
          </div>
          <div class="p-topCorporateNav__actinos">
            <a href="<?php echo home_url(); ?>/company" class="c-button c-button--outline">詳しく見る</a>
          </div>
        </div>
      </div>

      <div class="p-topCorporateNav__media" data-animation="fade-in">
        <div class="p-topCorporateNav__image">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/content/home/img_4.webp"
            alt="採用情報"
            width="1020"
            height="720"
            loading="lazy" />
        </div>
        <div class="p-topCorporateNav__body">
          <div class="p-topCorporateNav__heading">
            <div class="c-heading c-heading--white c-heading--center">
              <h2 class="c-heading__en">RECRUIT</h2>
              <p class="c-heading__ja">採用情報</p>
            </div>
          </div>
          <div class="p-topCorporateNav__actinos">
            <a href="<?php echo home_url(); ?>/recruit" class="c-button c-button--outline">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-topNews">
  <div class="p-topNews__inner">
    <div class="p-topNews__body" data-animation="fade-in">
      <div class="p-topNews__heading">
        <div class="c-heading">
          <h2 class="c-heading__en">NEWS</h2>
          <p class="c-heading__ja">お知らせ</p>
        </div>
      </div>

      <ul class="p-topNews__list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()):
          while ($the_query->have_posts()): $the_query->the_post();
        ?>
            <li class="p-topNews__item">
              <article class="p-topNews__article">
                <a href="<?php echo the_permalink(); ?>" class="p-topNews__link">
                  <data value="<?php the_time('c'); ?>" class="p-topNews__data"><?php the_time('Y.m.d.') ?></data>
                  <h3 class="p-topNews__title">
                    <?php
                    $title = get_the_title();
                    echo mb_strimwidth($title, 0, 64, '…', 'UTF-8');
                    ?>
                  </h3>
                </a>
              </article>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>

      <div class="p-topContentsNav__actions">
        <a href="<?php echo home_url(); ?>/news" class="c-button c-button--white">詳しく見る</a>
      </div>
    </div>
  </div>
</section>

<!-- ==============================
  FOOTER
================================= -->

<?php get_footer(); ?>