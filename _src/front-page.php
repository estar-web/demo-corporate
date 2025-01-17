<?php get_header(); ?>
<main id="main">
  <div id="js-hero" class="fr-mv">
    <div id="js-mvSlide" class="splide fr-mvSlide" aria-label="ファーストビューのスライド">
      <div class="splide__track fr-mvSlide__track">
        <div class="splide__list fr-mvSlide__list">
          <div class="splide__slide fr-mvSlide__slide">
            <picture class="fr-mvSlide__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-pc1.webp" media="(min-width: 768px)" width="1190" height="700" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-sp1.webp" width="335" height="607" alt="画像：話し合いをするメンバー" loading="lazy" decoding="async" />
            </picture>
          </div>
          <div class="splide__slide fr-mvSlide__slide">
            <picture class="fr-mvSlide__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-pc2.webp" media="(min-width: 768px)" width="1190" height="700" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-sp2.webp" width="335" height="607" alt="画像：運動をするメンバー" loading="lazy" decoding="async" />
            </picture>
          </div>
          <div class="splide__slide fr-mvSlide__slide">
            <picture class="fr-mvSlide__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-pc3.webp" media="(min-width: 768px)" width="1190" height="700" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/mv-sp3.webp" width="335" height="607" alt="画像：パソコンの画面を見ながら話し合いをするメンバー" loading="lazy" decoding="async" />
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="fr-mvText">
      <h1 class="fr-mvText__title">YOU CAN<br class="u-hide"> CHANGE<br>THE WORLD</h1><!-- /.fr-mvText__title -->
      <!-- <h1 class="fr-mvText__title"><span class="fr-mvText__title--parts">YOU CAN</span><span class="fr-mvText__title--parts u-hide">CHANGE</span><span class="fr-mvText__title--parts">THE WORLD</span></h1>/.fr-mvText__title -->
      <h2 class="fr-mvText__lead">世界で活躍できるグローバルな人材を育てる</h2><!-- /.fr-mvText__lead -->
    </div><!-- /.fr-mvText -->
  </div>
  <section class="fr-about p-section" id="about">
    <div class="l-inner fr-about__inner">
      <div class="p-section__head">
        <div class="fr-about__title p-title">
          <h2 class="c-title--eg">ABOUT US</h2><!-- /.p-footerLink__title--eg -->
          <h2 class="c-title--JP">当社について</h2><!-- /.p-footerLink__title--eg -->
        </div><!-- /.fr-about__title -->
        <div class="p-link c-link--fill u-show--flex">
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-link">View more</a><!-- /.c-link -->
          <div class="c-circle"></div><!-- /.c-circle -->
        </div><!-- /.p-link -->
      </div><!-- /.p-sectionHead -->
      <div class="p-contents fr-about__contents">
        <div class="fr-about__body">
          <p class="fr-about__text">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p><!-- /.fr-about__text -->
          <p class="fr-about__text">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。</p><!-- /.fr-about__text -->
          <p class="fr-about__text">文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p><!-- /.fr-about__text -->
        </div><!-- /.fr-about__body -->
        <figure class="fr-about__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/picture-about.webp" alt="写真：会議中のメンバー" width="681" height="426" loading="lazy" decoding="async">
        </figure><!-- /.fr-about__img -->
        <div class="p-link fr-about__link u-hide--flex">
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-link">View more</a><!-- /.c-link -->
          <div class="c-circle"></div><!-- /.c-circle -->
        </div><!-- /.p-link -->
      </div><!-- /.p-contents -->
    </div><!-- /.l-inner -->
  </section>
</main>
<?php get_footer(); ?>