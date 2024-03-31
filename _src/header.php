<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=1">
  <title>タイトル</title>
  <meta name="description" content="(ページの説明)">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <!-- ogp -->
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="">
  <!-- ogp -->
  <link rel="canonical" href="正規ページのURL">
  <link rel="icon" href=""><!-- ファビコン -->
  <link rel="icon" href="./icon.svg" type="image/svg+xml"><!-- モダンブラウザ用SVGアイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png"><!-- スマホホーム画面ショートカット用アイコン -->
  <link rel="manifest" href="./manifest.webmanifest"><!-- Android用pngアイコンマニフェスト -->
  <?php wp_head(); ?>
</head>

<body>
  <header id="js-header" class="l-header p-header">
    <div class="l-inner p-header__inner">
      <div class="p-header__left">
        <h1 class="p-headerLogo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-headerLogo__link">Global standard</a><!-- /.p-header-log__link -->
        </h1>
      </div><!-- /.p-header__left -->
      <div class="p-header__right">
        <button id="js-toggle" class="p-headerBurger" aria-label="メニューを開く">
          <span class="p-headerBurger__line"></span>
          <span class="p-headerBurger__line"></span>
          <span class="p-headerBurger__line"></span>
        </button>
        <nav class="p-headerNav">
          <ul class="p-headerNav__list">
            <li class="p-headerNav__item"><a class="p-headerNav__link js-navLink" href="<?php echo esc_url(home_url('/')); ?>">トップ</a><span class="p-headerNav__slash u-show--xl">／</span></li>
            <li class="p-headerNav__item"><a class="p-headerNav__link js-navLink" href="<?php echo esc_url(home_url('/')); ?>#about">当社について</a><span class="p-headerNav__slash u-show--xl">／</span></li>
            <li class="p-headerNav__item"><a class="p-headerNav__link js-navLink" href="<?php echo esc_url(home_url('/')); ?>#service">サービス</a><span class="p-headerNav__slash u-show--xl">／</span></li>
            <li class="p-headerNav__item"><a class="p-headerNav__link js-navLink" href="<?php echo esc_url(home_url('/')); ?>#case">導入事例</a><span class="p-headerNav__slash u-show--xl">／</span></li>
            <li class="p-headerNav__item"><a class="p-headerNav__link js-navLink" href="<?php echo esc_url(home_url('/')); ?>#news">お知らせ</a></li>
            <li class="p-headerNav__item u-hide--xl">
              <ul class="p-headerNav__btnWrapper">
                <li class="p-headerNav__btn"><a class="js-navLink c-btn--nav c-btn--fill" href="<?php echo esc_url(home_url('/download/')); ?>">資料ダウンロード</a></li><!-- /.p-headerNav__btn -->
                <li class="p-headerNav__btn"><a class="js-navLink c-btn--nav" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li><!-- /.p-headerNav__btn -->
              </ul><!-- /.p-headerNav__btnWrapper -->
          </ul>
        </nav>
        <div class="p-header__btn">
          <a class="c-btn--nav">資料ダウンロード</a><!-- /.c-btn--nav -->
          <a class="c-btn--nav c-btn--fill">お問い合わせ</a><!-- /.c-btn--nav -->
        </div><!-- /.p-headerBtn -->
      </div><!-- /.p-header__right -->
    </div>
  </header>