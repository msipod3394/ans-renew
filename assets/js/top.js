// プログレスバーの要素を取得
const bar = document.querySelector(".mv__progressbar--in");

// オートプレイの速度を設定
const speed = 5000;

// ページの読み込みが完了したときに実行される処理
window.onload = function () {
  // Swiperインスタンスを作成
  const swiper = new Swiper(".swiper", {
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
};

// jQueryの拡張機能: 要素がビューポート内にあるかどうかを判定する関数
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

$(document).ready(function () {
  // ページ読み込み時にも実行
  checkElementVisibility();

  // スクロールイベントを設定
  $(window).scroll(function () {
    // スクロール時にも実行
    checkElementVisibility();
  });
});

function checkElementVisibility() {
  if ($(".mv").isOnScreen()) {
    // 要素がビューポート内にある場合
    $(".header").addClass("_notfixed");
    $(".header").removeClass("scrolled-top");
  } else {
    // 要素がビューポート内にない場合
    $(".header").removeClass("_notfixed");
  }
}

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
