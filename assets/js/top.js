// ローディング
/*-----------------------------------------------
 * Loading
-------------------------------------------------*/
var ww = $(window).innerWidth();
var wh = $(window).innerHeight();
var sct = $(window).scrollTop();
var scl = $(window).scrollLeft();

var hs = location.hash;

//loading,スクロールアニメーションのスキップ
var skiped = hs === "#skip";

var $header = $(".js-header");
var headerHeight = $header.innerHeight();
var $footer = $(".js-footer");
var footerHeight = $footer.innerHeight();

// hash(#skip)
if (skiped) {
  $(".js-fullWrap").css({ opacity: 1 });
  $(".js-loading").remove();

  setTimeout(() => {
    $(".js-firstv").addClass("is-show");
  }, 500);

  // hash none
} else {
  $(document).ready(function () {
    $(".js-loading").addClass("is-ani");
  });

  $(window).on("load", function () {
    setTimeout(() => {
      $(".js-loading img").fadeOut(500);
      setTimeout(() => {
        $(".js-fullWrap").css({ opacity: 1 });
        $(".js-loading").fadeOut(500);
        setTimeout(() => {
          $(".js-firstv").addClass("is-show");
          // bookSwpier();
        }, 600);
      }, 800);
    }, 1000);
  });

  // $(window).on("load resize scroll", function () {});
}

// プログレスバーの要素を取得
const bar = document.querySelector(".mv__progressbar--in");

// オートプレイの速度を設定
const speed = 5000;

// ページの読み込みが完了したときに実行される処理
window.onload = function () {
  const swiper_mv = new Swiper(".js-swiper-mv", {
    loop: true, // ループを有効化
    effect: "fade", // フェード切り替え
    // オートプレイ設定
    autoplay: {
      delay: speed, // オートプレイの遅延
      disableOnInteraction: false, // ユーザーが操作してもオートプレイを継続
    },
    // スライド変更時のイベントリスナーを設定
    on: {
      // Swiperが初期化されたときの処理
      init: function () {
        // プログレスバーのアニメーションを開始し、100%に拡大
        bar.style.transitionDuration = speed + "ms";
        bar.style.transform = "scaleX(1)";
      },
      // スライド変更のトランジションが開始したときの処理
      slideChangeTransitionStart: function () {
        // プログレスバーのアニメーションを停止し、0%にリセット
        bar.style.transitionDuration = "0s";
        bar.style.transform = "scaleX(0)";
      },
      // スライド変更のトランジションが終了したときの処理
      slideChangeTransitionEnd: function () {
        // プログレスバーのアニメーションを再開し、100%に拡大
        bar.style.transitionDuration = speed + "ms";
        bar.style.transform = "scaleX(1)";
      },
    },
  });

  // news
  const swiper_news = new Swiper(".js-swiper-news", {
    loop: true, // ループを有効化
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      type: "bullets",
    },

    // オートプレイ設定
    autoplay: {
      delay: speed, // オートプレイの遅延
      disableOnInteraction: false, // ユーザーが操作してもオートプレイを継続
    },
    // スライド変更時のイベントリスナーを設定
    // on: {
    //   // Swiperが初期化されたときの処理
    //   init: function () {
    //     // プログレスバーのアニメーションを開始し、100%に拡大
    //     bar.style.transitionDuration = speed + "ms";
    //     bar.style.transform = "scaleX(1)";
    //   },
    //   // スライド変更のトランジションが開始したときの処理
    //   slideChangeTransitionStart: function () {
    //     // プログレスバーのアニメーションを停止し、0%にリセット
    //     bar.style.transitionDuration = "0s";
    //     bar.style.transform = "scaleX(0)";
    //   },
    //   // スライド変更のトランジションが終了したときの処理
    //   slideChangeTransitionEnd: function () {
    //     // プログレスバーのアニメーションを再開し、100%に拡大
    //     bar.style.transitionDuration = speed + "ms";
    //     bar.style.transform = "scaleX(1)";
    //   },
    // },
  });
};

//  要素がビューポート内にあるかどうかを判定する関数
$.fn.isOnScreen = function () {
  var win = $(window);
  var viewport = {
    top: win.scrollTop(),
    left: win.scrollLeft(),
  };
  viewport.right = viewport.left + win.width();
  viewport.bottom = viewport.top + win.height();
  var bounds = this.offset();
  bounds.right = bounds.left + this.outerWidth();
  bounds.bottom = bounds.top + this.outerHeight();
  return !(
    viewport.right < bounds.left ||
    viewport.left > bounds.right ||
    viewport.bottom < bounds.top ||
    viewport.top > bounds.bottom
  );
};

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
