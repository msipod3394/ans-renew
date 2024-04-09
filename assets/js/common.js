// サービス
$(document).ready(function () {
  $(".js-hover-service").hover(
    function () {
      console.log("hover!");
      $(".js-hover-service").addClass("_isShow");
    },
    function () {
      console.log("hover out!");
      $(".js-hover-service").removeClass("_isShow");
    }
  );

  $(".js-hover-company").hover(
    function () {
      console.log("hover!");
      $(".js-hover-company").addClass("_isShow");
    },
    function () {
      console.log("hover out!");
      $(".js-hover-company").removeClass("_isShow");
    }
  );
});

// ヘッダーの処理
$(document).ready(function () {
  var lastScrollTop = 0;
  var header = $(".header");

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
});
