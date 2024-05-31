<?php
$site_root = '../';
$cn = 'movie';
$page_title = "配信動画";
include($site_root . 'functions.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?= $page_title; ?> | <?= SITE_TITLE; ?></title>
  <meta name="description" content="<?= $page_title; ?> | <?= SITE_DESCRIPTION; ?>">
  <meta name="keywords" content="<?= SITE_KEYWORDS; ?>">
  <meta property="og:site_name" content="<?= $page_title; ?> | <?= OG_TITLE; ?>">
  <meta property="og:title" content="<?= $page_title; ?> | <?= OG_TITLE; ?>">
  <meta property="og:type" content="website">
  <meta property="og:description" content="<?= OG_DESCRIPTION; ?>">
  <meta property="og:url" content="<?= OG_URL; ?>">
  <meta property="og:image" content="<?= OG_IMAGE; ?>">
  <meta name="theme-color" content="<?= THEME_COLOR; ?>">
  <meta name="viewport" content="<?= VIEWPORT; ?>">
  <meta name="format-detection" content="telephone=no, address=no, email=no">
  <link rel="shortcut icon" href="<?= $site_root; ?>favicon.ico">
  <link rel="stylesheet" href="<?= $site_root; ?>assets/css/style.css?<?= time() ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?= $site_root; ?>assets/js/common.js?<?= time() ?>" defer></script>
</head>

<!-- ▼ inc/gac -->
<?php include($site_root . "_inc/gac.php"); ?>

<body id="<?= $cn; ?>" class="js-sub-loaded-fadebg">

  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="contents-movie" class="sub__container movie">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Column">Column</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/column/heading.jpg" alt="お悩み解決コラム"></div>
      </section><!-- sub__heading -->

      <div id="movie" class="l-block -full movie">

        <div class="l-column__main--inner">
          <section class="c-contentsDetail">

            <!-- シェア -->
            <div class="c-contentsDetail__share js-ani-fade-ho">
              <dl class="shareLists">
                <dt class="shareLists__dt"><span class="font-robot">SHARE</span></dt>
                <div class="shareLists__wrap">
                  <dd class="shareLists__item is-twitter">
                    <a href="https://twitter.com/intent/tweet?url=[URL]&text=[text]" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="shareLists__link">
                      <span class="hd">Twitter share</span>
                    </a>
                  </dd>
                  <dd class="shareLists__item is-facebook">
                    <a href="https://www.facebook.com/share.php?u=[URL]" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" class="shareLists__link">
                      <span class="hd">Facebook share</span>
                    </a>
                  </dd>
                  <dd class="shareLists__item is-copy">
                    <a href="" onclick="" class="shareLists__link">
                      <span class="hd">copy share</span>
                    </a>
                  </dd>
                </div>
              </dl>
            </div>

            <!-- ロゴ・タイトル -->
            <div class="c-contentsDetail__head">
              <h1 class="c-contentsDetail__head--heading sub__contents--title js-ani-fade">
                <span class="font-mincho">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</span>
              </h1>
              <!-- 関連タグ -->
              <div class="c-contentsDetail__tag c-tags js-ani-fade">
                <ul class="c-tags__list icon-tag">
                  <li class="c-tags__item"><a href="">#IT-Trust</a></li>
                  <li class="c-tags__item"><a href="">#IT-Trust</a></li>
                  <li class="c-tags__item"><a href="">#IT-Trust</a></li>
                </ul>
              </div>
            </div>

            <!-- 公開日/更新日/シェア -->
            <div class="c-contentsDetail__update js-ani-fade-ho">
              <div class="c-contentsDetail__update--date">
                <span>公開日：2024年04月03日</span>
                <span>更新日：2024年04月03日</span>
              </div>
            </div>

            <!-- 画像 -->
            <div class="c-contentsDetail__images js-ani-fade">
              <div class="develop__modal common__modal">
                <a href="javascript:;" class="js-modalOpen js-youtubePlay common__modal--link" data-modal="youtubeModal" data-ytid="J3pUnESseN8">
                  <img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt="" loading="lazy">
                  <p class="common__modal--text"><span class="icon-lupe">拡大して見る</span></p>
                </a>
              </div>
            </div>

            <!-- 課題背景 -->
            <div class="c-contentsDetail__contents js-ani-fade">
              <p>
                【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～についてわかりやすくお答えします。
              </p>
            </div>

            <!-- お問い合わせ導線 -->
            <?php include($site_root . "_inc/inquiry.php"); ?>

            <div class="c-contentsDetail__linkBack common__linkButton js-ani-fade"><a href="<?= $site_root; ?>movie"><span class="font-mincho">動画配信 一覧に戻る</span></a></div>
          </section><!-- ./c-contentsDetail -->

          <!-- #column -->
          <section class="subCase l-section js-target">
            <div class="subCase__inner">
              <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">〇〇に関連する記事</span></h2>
              <div class="subCase__cardList">
                <!-- #column -->
                <section class="c-columnRow js-target">
                  <div class="c-columnRow__inner l-section">
                    <ul class="c-columnRow__list">
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                      <li class="c-columnRow__card js-ani-fade">
                        <a href="./detail.php" class="c-columnRow__card--link">
                          <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                          <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                          <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                          <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="c-columnRow__card--tag">
                            <ul class="tag icon-tag">
                              <li class="tag__item">#IT-Trust</li>
                              <li class="tag__item">#システム開発</li>
                              <li class="tag__item">#販売管理システム</li>
                            </ul>
                          </div>
                        </a>
                      </li><!-- c-columnRow__card -->
                    </ul>
                  </div>
                </section><!-- ./column -->
              </div>
            </div>
            <div class="c-contentsDetail__linkBack common__linkButton js-ani-fade"><a href="<?= $site_root; ?>movie"><span class="font-mincho">動画配信 一覧に戻る</span></a></div>
          </section><!-- ./subCase -->

        </div><!-- ./l-column__main--inner -->
      </div><!-- ./l-block -->

    </main><!-- ./sub__container -->

    <!-- ▼ inc/gac -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

  <!-- BEGIN .modalBox -->
  <div class="modalBox js-modalBox">
    <p class="closeBtn"><a href="javascript:;" class="ah js-modalClose"><span class="hd">close</span></a></p>

    <!-- BEGIN #youtubeModal -->
    <div id="youtubeModal" class="oneModal">
      <div class="oneModalIn js-oneModalIn">
        <div class="youtubeIframeWrap js-oneModalIn__cont">
          <iframe class="youtubeIframe commonIframe js-youtubeIframe" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div><!-- /.oneModalIn -->
    </div>
    <!-- END #youtubeModal -->

  </div>
  <!-- END .modalBox -->


</body>

</html>
