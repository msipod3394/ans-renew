// ウィンドウの幅が指定された幅以上であるかをチェックする関数
function isWindowWidthAbove(width) {
  return $(window).width() >= width;
}

// ヘッダーの処理
$(document).ready(function () {
  var lastScrollTop = 0;
  var header = $(".header");

  if (isWindowWidthAbove(1200)) {
    $(window).scroll(function (event) {
      var st = $(this).scrollTop();
      if (st > lastScrollTop) {
        // 下にスクロールしている場合
        if (header.hasClass("scrolled-top")) {
          header.addClass("_remove");
          header.fadeOut(500, function () {
            header.removeClass("scrolled-top").fadeIn();
            setTimeout(() => {
              header.removeClass("_remove");
            }, 500);
          });
        }
      } else {
        // 上にスクロールしている場合
        header.addClass("scrolled-top");
      }

      if ($(".mv").isOnScreen()) {
        header.removeClass("scrolled-top");
      }

      lastScrollTop = st;
    });
  }
});

//ハンバーガーメニュー
const ham = $("#js-hamburger");
const nav = $("#header");
ham.on("click", function () {
  ham.toggleClass("_active"); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass("_active"); // ナビゲーションメニューにactiveクラスを付け外し
});
