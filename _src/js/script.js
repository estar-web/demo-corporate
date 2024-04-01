var $header = jQuery("#js-header");

// navigation
jQuery("#js-toggle").on("click", function (e) {
  e.preventDefault();
  $header.toggleClass("add-active");
});

jQuery(".js-navLink").on("click", function (e) {
  $header.removeClass("add-active");
});

var pcWidth = window.matchMedia("screen and (min-width: 769px)");
function checkBreakPoint() {
  if (pcWidth.matches) {
    $header.removeClass("add-active");
  }
}
pcWidth.addListener(checkBreakPoint);
checkBreakPoint();

//リサイズ時のチラツキ防止用のクラスを付与
let timeoutId;
jQuery(window).resize(() => {
  jQuery("html").addClass("is-resize");
  clearTimeout(timeoutId);

  timeoutId = setTimeout(() => {
    jQuery("html").removeClass("is-resize");
  }, 500);
});

// header
jQuery(window).on("scroll", function () {
  if (jQuery(this).scrollTop() > jQuery("#js-hero").outerHeight()) {
    jQuery("body").addClass("add-scrolled");
  } else {
    jQuery("body").removeClass("add-scrolled");
  }
});

//splide
jQuery(document).ready(function () {
  if (jQuery("#js-mvSlide").length) {
    new Splide("#js-mvSlide", {
      type: "fade", //フェードで移り変わり
      pagination: false, //ページネーション非表示
      rewind: true, //最後のスライドまで行ったら最初にもどる
      autoplay: true, //自動再生
      interval: 3000, //自動再生間隔（msec）
      arrows: false, //矢印を表示しない
      pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
      pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
    }).mount();
  }
});
