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

<body id="<?= $cn; ?>">

  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="whitepaper" class="sub__container whitepaper">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <div id="" class="l-block -full downloadDetail">
        <div class="l-column__main--inner">
          <section class="c-contentsDetail">

            <!-- ロゴ・タイトル -->
            <div class="c-contentsDetail__head">
              <h1 class="c-contentsDetail__head--heading sub__contents--title">
                <span class="font-mincho">サービス資料と企業情報</span>
              </h1>
            </div>

            <!-- ダウンロードコンテンツ -->
            <div class="downloadDetail__complete">
              <div class="downloadDetail__contents">
                <p class="downloadDetail__text">
                  資料ダウンロードありがとうございます。下記から資料ダウンロードが可能です。
                </p>
              </div>
              <!--downloadDetail__contents-->
              <div class="downloadDetail__download">
                <div class="c-contentsDetail__linkBack common__linkButton"><a href=""><span class="font-mincho">ダウンロードする</span></a></div>
              </div>
            </div>
            <!--downloadDetail-->

            <!-- お問い合わせ導線 -->
            <?php include($site_root . "_inc/inquiry.php"); ?>

            <div class="c-contentsDetail__linkBack common__linkButton"><a href="<?= $site_root; ?>download"><span class="font-mincho">お役立ち資料 一覧に戻る</span></a></div>
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
