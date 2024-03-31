<?php
/*
Template Name: 研修紹介
*/
get_header();

$args = [
  'page' => 'service',
  'egTitle' => 'SERVICE',
  'jpTitle' => 'サービス'
]; //ここで引数を設定

get_template_part('template/lowerMv',null ,$args);

?>

<section class="se-program">
  <div class="l-inner se-program__inner">
    <h2 class="se-program__lead">世界で活躍できる<br>グローバルな人材を育てる<br class="u-hide">３つの研修プログラム</h2><!-- /.c-title -->
    <div class="se-program__contents p-contents">
      <div class="se-program__item">
        <div class="se-program__btn">
          <a href="" class="c-btn c-btn--arrow">お申し込みはこちら
            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.479 0.229859C11.1601 0.542468 11.1601 1.0614 11.4727 1.38026L15.2741 5.18783H0.80653C0.362626 5.18783 0 5.55046 0 6.00061C0 6.45077 0.362626 6.8134 0.80653 6.8134H15.2678L11.4665 10.621C11.1539 10.9398 11.1601 11.4525 11.4727 11.7714C11.7916 12.084 12.298 12.084 12.6169 11.7651L17.7687 6.57582C17.8374 6.50079 17.8937 6.41951 17.9375 6.31948C17.9812 6.21944 18 6.11316 18 6.00687C18 5.79429 17.9187 5.59423 17.7687 5.43792L12.6169 0.248619C12.3105 -0.0764976 11.7978 -0.0827499 11.479 0.229859Z" fill="#023E78" />
            </svg>
          </a><!-- /.c-btn -->
        </div><!-- /.se-program__btn -->
      </div><!-- /.se-program__item -->
    </div><!-- /.se-program__contents p-contents -->
  </div><!-- /.l-inner -->
</section>

<?php get_footer(); ?>