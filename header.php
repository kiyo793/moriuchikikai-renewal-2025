<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="no-index" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_head(); ?>
  </head>
  <body id="top" <?php body_class(); ?>>

  <header class="l-header">
    <div class="l-header__inner">
      <h1 class="l-header__logo">
        <a href="<?php home_url(); ?>/" class="l-hader__logo-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/logos/company-logo.webp" alt="株式会社森内機械製作所" width="456" height="70">
        </a>
      </h1>

      <nav class="l-gnav" aria-label="グローバルナビ">
        <ul class="l-gnav__list">
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/service" class="l-gnav__link l-gnav__link--text">事業内容</a></li>
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/garbage-treatment-plant" class="l-gnav__link l-gnav__link--text">ごみ処理プラント</a></li>
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/products" class="l-gnav__link l-gnav__link--text">実績紹介</a></li>
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/company" class="l-gnav__link l-gnav__link--text">会社案内</a></li>
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/recruit" class="l-gnav__link l-gnav__link--text">採用情報</a></li>
          <li class="l-gnav__item"><a href="<?php home_url(); ?>/news" class="l-gnav__link l-gnav__link--text">お知らせ</a></li>
          <li class="l-gnav__item">
            <a href="https://www.facebook.com/moriuchimachine/" class="l-gnav__link l-gnav__link--icon" target="_blank" rel="noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/icons/icon-facebook.webp" alt="FaceBook" width="62" height="62">
            </a>
          </li>
          <li class="l-gnav__item">
            <a href="<?php home_url(); ?>/contact" class="l-gnav__button">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button type="button" class="c-drawer-icon" aria-label="メニューを開く">
        <span class="c-drawer-icon__bar"></span>
        <span class="c-drawer-icon__bar"></span>
        <span class="c-drawer-icon__bar"></span>
      </button>
    </div>
  </header>

  <div class="p-drawer">
    <div class="p-drawer__body">
      <ul class="p-drawer__list">
        <li><a href="<?php home_url(); ?>/service" class="p-drawer__link">事業内容</a></li>
        <li><a href="<?php home_url(); ?>/garbage-treatment-plant" class="p-drawer__link">ごみ処理プラント</a></li>
        <li><a href="<?php home_url(); ?>/products" class="p-drawer__link">実績紹介</a></li>
        <li><a href="<?php home_url(); ?>/company" class="p-drawer__link">会社案内</a></li>
        <li><a href="<?php home_url(); ?>/recruit" class="p-drawer__link">採用情報</a></li>
        <li><a href="<?php home_url(); ?>/news" class="p-drawer__link">お知らせ</a></li>
        <li>
          <a href="https://www.facebook.com/moriuchimachine/" target="_blank" rel="noopener" class="p-drawer__link p-drawer__link--icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/icons/icon-facebook.webp" alt="FaceBook" width="62" height="62">
          </a>
        </li>
        <li><a href="<?php home_url(); ?>/contact" class="p-drawer__link p-drawer__button">お問い合わせ</a></li>
      </ul>
    </div>
  </div>

  <main class="l-main">

  <!-- ==============================
  HEADER
================================= -->