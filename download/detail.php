<?php
$site_root = '../';
$cn = 'download';
$page_title = "お役立ち資料";
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

    <main id="download" class="sub__container downloadDetail">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Download">Download</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
      </section><!-- sub__heading -->

      <div id="" class="l-block -full ">
        <div class="l-column__main--inner">
          <section class="c-contentsDetail js-ani-fade">

            <!-- ロゴ・タイトル -->
            <div class="c-contentsDetail__head">
              <h1 class="c-contentsDetail__head--heading sub__contents--title">
                <span class="font-mincho">サービス資料と企業情報</span>
              </h1>
            </div>

            <!-- ダウンロードコンテンツ -->
            <div class="downloadDetail__flex _detail">
              <div class="downloadDetail__contents">
                <p class="downloadDetail__text">
                  弊社のメイン事業であるサービスに加えて、内製化支援、各種開発サービスなど、弊社の全ての情報をまとめてご請求いただけます。
                </p>
                <h3 class="downloadDetail__subtitle">ダウンロード対象資料一覧</h3>
                <div class="downloadDetail__detail">
                  <ul class="downloadDetail__detail--list">
                    <li class="downloadDetail__detail--item">ダウンロード対象資料名が入ります</li>
                    <li class="downloadDetail__detail--item">ダウンロード対象資料名が入ります</li>
                    <li class="downloadDetail__detail--item">ダウンロード対象資料名が入ります</li>
                  </ul>
                </div>

                <!-- 画像 -->
                <div class="downloadDetail__images">
                  <img src="<?= $site_root; ?>assets/img/download/paper_sample.jpg" alt="" srcset="">
                </div>
              </div>
              <!--downloadDetail__contents-->
              <div class="downloadDetail__form">
                <p>フォームが入ります</p>
              </div>
            </div>
            <!--downloadDetail-->

            <!-- お問い合わせ導線 -->
            <?php include($site_root . "_inc/inquiry.php"); ?>

            <div class="c-contentsDetail__linkBack common__linkButton js-ani-fade"><a href="<?= $site_root; ?>download"><span class="font-mincho">お役立ち資料 一覧に戻る</span></a></div>
          </section><!-- ./c-contentsDetail -->

        </div><!-- ./l-column__main--inner -->
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
