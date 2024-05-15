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

<body id="<?= $cn; ?>">

  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="contents-column" class="sub__container column">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">movie</span>
            <span class="font-mincho">配信動画</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/column/heading.jpg" alt="お悩み解決コラム"></div>
      </section><!-- sub__heading -->

      <div id="column" class="l-block">
        <div class="l-column">

          <div class="l-column__sub">
            <div class="sub__side--in">
              <p class="sub__side--heading">カテゴリ</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor">テストカテゴリ (10)</a></li>
              </ul>
            </div>
          </div>
          <!--./l-column__sub-->

          <div class="l-column__main column">

            <!-- #column -->
            <section class="columnRow js-target">
              <div class="columnRow__inner l-section">
                <ul class="columnRow__list">
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                  <li class="columnRow__card">
                    <a href="./detail.php" class="columnRow__card--link">
                      <div class="columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                      <div class="columnRow__card--contents">
                        <time class="columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                        <p class="columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                        <p class="columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                        <ul class="tag icon-tag">
                          <li class="tag__item">#IT-Trust</li>
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#販売管理システム</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- columnRow__card -->
                </ul>
              </div>
            </section><!-- ./column -->

          </div><!-- ./l-column__main -->
        </div><!-- ./l-column -->
      </div><!-- ./l-block -->
    </main><!-- ./sub__container -->

    <!-- ▼ inc/gac -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
