// ウィンドウの幅が指定された幅以上であるかをチェックする関数
function isWindowWidthAbove(width) {
  return $(window).width() >= width;
}

// ヘッダーの処理
$(document).ready(function () {
  // var lastScrollTop = 0;
  // var header = $(".header");
  // if (isWindowWidthAbove(1200)) {
  //   $(window).scroll(function (event) {
  //     var st = $(this).scrollTop();
  //     if (st > lastScrollTop) {
  //       // 下にスクロールしている場合
  //       if (header.hasClass("scrolled-top")) {
  //         header.addClass("_remove");
  //         header.fadeOut(500, function () {
  //           header.removeClass("scrolled-top").fadeIn();
  //           setTimeout(() => {
  //             header.removeClass("_remove");
  //           }, 500);
  //         });
  //       }
  //     } else {
  //       // 上にスクロールしている場合
  //       header.addClass("scrolled-top");
  //     }
  //     // if ($(".mv").isOnScreen()) {
  //     //   header.removeClass("scrolled-top");
  //     // }
  //     lastScrollTop = st;
  //   });
  // }
});

//ハンバーガーメニュー
const ham = $("#js-hamburger");
const nav = $("#header");
ham.on("click", function () {
  ham.toggleClass("_active"); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass("_active"); // ナビゲーションメニューにactiveクラスを付け外し
});

$(document).ready(function () {
  $(".js-anchor").on("click", function (event) {
    event.preventDefault(); // リンクのデフォルト動作を無効化

    var targetId = $(this).attr("href"); // クリックされたリンクのhref属性を取得
    var offset = $(targetId).offset().top; // 対応するセクションの上端位置を取得

    // スクロールアニメーションを実行
    $("html, body").animate(
      {
        scrollTop: offset,
      },
      800
    ); // スクロールにかかる時間（ミリ秒）

    // ナビゲーションリンクの active クラスを設定
    // $(".js-anchor").removeClass("_current"); // 全てのリンクから active クラスを削除
    // $(this).addClass("_current"); // クリックされたリンクに active クラスを追加
  });

  // スクロール時の処理
  $(document).on("scroll", function () {
    let scrollPos = $(document).scrollTop();

    if (isWindowWidthAbove(1080)) {
      // 各セクションの位置を判定して active クラスを設定
      $(".js-target").each(function () {
        let top = $(this).offset().top - 40;
        let bottom = top + $(this).outerHeight();

        if (scrollPos >= top && scrollPos <= bottom) {
          const targetId = "#" + $(this).attr("id");

          $(".js-anchor").removeClass("is-current"); // 全てのリンクから active クラスを削除
          $('.js-nav a[href="' + targetId + '"]').addClass("is-current"); // 対応するリンクに active クラスを追加
        }
      });
    }
  });

  // qa toggle処理
});

// ヘッダーのホバー処理
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

// アニメーション
const fadeTargets = document.querySelectorAll(
  ".js-ani-fade, .js-ani-fade-ho, .js-subHeading-show, .js-ani-zoom"
);
const fadeOption = {
  root: null,
  rootMargin: "-10% 0px",
  threshold: [0],
};

const targets = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-ani");
      observer.unobserve(entry.target);
    }
  });
};

const fadeObserver = new IntersectionObserver(targets, fadeOption);

fadeTargets.forEach((target) => {
  fadeObserver.observe(target);
});

// トップへ戻る
$(function () {
  const $backtop = $(".js-backtop");
  let isActive = false;

  $(window).scroll(function () {
    const shouldBeActive = $(this).scrollTop() > 1;
    if (shouldBeActive !== isActive) {
      isActive = shouldBeActive;
      $backtop.toggleClass("is-active", isActive);
    }
  });

  $backtop.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });
});
