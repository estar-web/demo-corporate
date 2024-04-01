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
  <section class="fr-about" id="about">
    <div class="l-inner">
      <div class="p-sectionHead">
        <div class="fr-about__title p-title">
          <h2 class="c-title--eg">ABOUT US</h2><!-- /.p-footerLink__title--eg -->
          <h2 class="c-title--JP">当社について</h2><!-- /.p-footerLink__title--eg -->
        </div><!-- /.fr-about__title -->
        <div class="p-link">
          <a href="" class="c-link">View more</a><!-- /.c-link -->
          <div class="c-circle"></div><!-- /.c-circle -->
        </div><!-- /.p-link -->
        <div class="p-link">
          <a href="" class="c-link c-link--fill">View more</a><!-- /.c-link -->
          <div class="c-circle c-circle--fill"></div><!-- /.c-circle -->
        </div><!-- /.p-link -->
      </div><!-- /.p-sectionHead -->
    </div><!-- /.l-inner -->
  </section>
</main>
<?php get_footer(); ?>