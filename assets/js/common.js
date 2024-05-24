// ウィンドウの幅が指定された幅以上であるかをチェックする関数
function isWindowWidthAbove(width) {
  return $(window).width() >= width;
}

// ヘッダーの処理
$(document).ready(function () {
  // ウィンドウの幅が1080px未満の場合は処理を行わない
  if (!isWindowWidthAbove(1080)) {
    return;
  }

  // 現在のスクロール位置を取得
  let position = $(window).scrollTop();
  let isFixed = false;
  // ファーストビュー領域にいるかどうかを示すフラグ
  let isInFirstView = true;
  // ファーストビューの高さを取得
  let firstViewHeight = $(".sub__heading, .js-firstv").height();

  // 初期状態でファーストビュー領域にいるかチェック
  if (position < firstViewHeight) {
    $(".js-header").addClass("is-top");
    isInFirstView = true;
  } else {
    $(window).trigger("scroll");
  }

  // スクロールイベントハンドラー
  function onScroll() {
    let currentScroll = $(this).scrollTop();

    // ファーストビュー領域にいる場合
    if (currentScroll < firstViewHeight) {
      if (!isInFirstView) {
        $("#fullWrap").removeClass("is-headerFixed");
        $(".js-header").removeClass("is-fixed").addClass("is-top");
        isInFirstView = true; // ファーストビュー領域にいることを記録
      }
    } else {
      // ファーストビュー領域を離れた場合
      if (isInFirstView) {
        $(".js-header").removeClass("is-top");
        $("#fullWrap").addClass("is-headerFixed");
        $(".js-header").hide();
        isInFirstView = false; // ファーストビュー領域を離れたことを記録
      }

      if (position < currentScroll) {
        // 下スクロール
        if (isFixed) {
          $(".js-header").fadeOut(100, function () {
            $(this).removeClass("is-fixed").show(); // クラスを削除して再表示
          });
          isFixed = false;
        }
      } else {
        // 上スクロール
        if (!isFixed) {
          $(".js-header").addClass("is-fixed");
          $(".js-header").fadeIn(100); // フェードインを追加して表示
          isFixed = true;
        }
      }
    }

    position = currentScroll; // 現在のスクロール位置を更新
    console.log(position); // スクロール位置をコンソールに出力
  }

  // スクロールイベントをバインド
  $(window).on("scroll", onScroll);

  // 初期ロード時のスクロール位置に基づく処理
  if (position === 0) {
    $(".js-header").addClass("is-fixed");
    isFixed = true;
  }
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

/**
 * Modal open
 */
// Common
$(".js-modalOpen").on("click", function () {
  var modalID = $(this).data("modal");
  $("#" + modalID).fadeIn(500);
  $(".modalBox").fadeIn(500);
  $("body").css({ overflow: "hidden" });
});

// Youtube
$(".js-youtubePlay").on("click", function () {
  var ytID = $(this).data("ytid");
  var ytURL = "https://www.youtube.com/embed/" + ytID + "?autoplay=1&rel=0";
  setTimeout(function () {
    $(".js-youtubeIframe").attr("src", ytURL);
  }, 100);
});

/**
 * Modal close
 * iframeのsrcをcloseの際に消す
 */
var $modalIF = $(".js-youtubeIframe");

// Close処理
function modalClose() {
  $(".modalBox").fadeOut(500);
  setTimeout(function () {
    $modalIF.attr("src", "");
  }, 500);
  $("body").css({ overflow: "" });
}

// Closeボタン
$(".js-modalClose").on("click", function () {
  modalClose();
});

// Close エリア外
$(".js-oneModalIn").on("click touchend", function (e) {
  if (!$(e.target).closest(".js-oneModalIn__cont").length) {
    modalClose();
  }
});

// アクセス時自動モーダル
// if ($("#test")[0]) {
//   $("#test").click();
// }
