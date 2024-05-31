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

    <main id="contents-column" class="sub__container column">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Movie">Movie</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/movie/heading.jpg" alt="<?= $page_title ?>"></div>
      </section><!-- sub__heading -->

      <div id="column" class="l-block">
        <div class="l-column">

          <div class="l-column__sub">
            <div class="sub__side--in js-ani-fade">
              <p class="sub__side--heading">カテゴリ</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="" class="js-anchor"><span>テストカテゴリ (10)</span></a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor"><span>テストカテゴリ (10)</span></a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor"><span>テストカテゴリ (10)</span></a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor"><span>テストカテゴリ (10)</span></a></li>
                <li class="sub__side--item js-nav"><a href="" class="js-anchor"><span>テストカテゴリ (10)</span></a></li>
              </ul>
              <div class="sub__side--inquiry pc">
                <a href="<?= $site_root; ?>contact/form.php"><span class="icon-mail">お問合せ</span></a>
              </div>
            </div>
          </div>
          <!--./l-column__sub-->

          <div class="l-column__main column">

            <!-- #column -->
            <section class="c-columnRow js-target">
              <div class="c-columnRow__inner l-section">
                <ul class="c-columnRow__list">
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->
                  <li class="c-columnRow__card js-ani-fade">
                    <a href="./detail.php" class="c-columnRow__card--link">
                      <div class="c-columnRow__card--thumb"><img src="http://img.youtube.com/vi/J3pUnESseN8/maxresdefault.jpg" alt=""></div>
                      <p class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</p>
                      <p class="c-columnRow__card--title">【システム開発Q＆A】オフショア開発編～メリットはコスト削減だけではない？～</p>
                      <p class="c-columnRow__card--desc"><span>オフショア開発について初心者でもわかるように解説します。ぜひ情報収集にお役立てください！</span></p>
                      <div class="c-columnRow__card--tag">
                        <ul class="tag icon-tag">
                          <li class="tag__item">#システム開発</li>
                          <li class="tag__item">#オフショア開発</li>
                        </ul>
                      </div>
                    </a>
                  </li><!-- c-columnRow__card -->


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
