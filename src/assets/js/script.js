//ドロワーアイコン
jQuery(function ($) {
  $(".p-drawer__icon").on("click", function () {
    $(this).toggleClass("js-open");
    $(".p-drawer__menu").toggleClass("js-open");
    $("body").toggleClass("no-scroll");
    return false;
  });

    //ドロワーリンク
    $(".p-drawer__list a").on("click", function () {
      $(".p-drawer__icon").removeClass("js-open");
      $(".p-drawer__menu").removeClass("js-open");
      $(".p-drawer__bg").removeClass("js-open");
      $("body").removeClass("no-scroll");
      //return false;
    });
  
  //画面幅を広げたら自動で閉じるように
  $(window).resize(function () {
    var windowWidth = $(window).width(); //画面幅
    var pointWidth = 767; //切り替える画面幅 - 1
    if (pointWidth < windowWidth) {
      //画面幅がpointWidth以上のときの処理を書く
      $(".p-drawer__menu").removeClass("js-open");
      $(".p-drawer__icon").removeClass("js-open");
      $("body").removeClass("no-scroll");
      return false;
    }
  });
});

//ターゲットへスムーススクロール
const smoothScrollTriggers = document.querySelectorAll('a[href^="#"]');
smoothScrollTriggers.forEach((smoothScrollTrigger) => {
  smoothScrollTrigger.addEventListener("click", (e) => {
    e.preventDefault();
    const href = smoothScrollTrigger.getAttribute("href");
    // hrefが"#"または""の場合、スクロールさせない
    if (href === "#" || href === "") return;

    const targetElement = document.querySelector(href);
    // ターゲット要素が存在しない場合、スクロールさせない
    if (!targetElement) return;

    const rectTop = targetElement.getBoundingClientRect().top;
    const offset = window.pageYOffset;
    const gap = 20; // スクロール位置の微調整に使用
    const target = rectTop + offset - gap;

    window.scrollTo({
      top: target,
      behavior: "smooth",
    });

    // ドロワーメニューとアイコンの状態を閉じる
    $(".p-drawer__icon").removeClass("js-open");
    $(".p-drawer__menu").removeClass("js-open");
    $("body").removeClass("no-scroll");
  });
});

