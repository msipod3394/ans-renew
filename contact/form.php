<?php
$site_root = '../';
$cn = 'contact';
$page_title = "お問い合わせ";
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

    <!-- ▼ header -->
    <header id="header" class="header js-header _contact">
      <p class="header__logo"><a href="../"><img src="../assets/img/common/logo/logo.svg" alt="株式会社エイ・エヌ・エス"></a></p>
    </header>
    <!--./header-->

    <main id="" class="sub__container ">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="../"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current">お問い合わせ</span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading _type-simple">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">Contact</span>
            <span class="font-mincho">お問い合わせ</span>
          </span>
        </h1>
      </section><!-- sub__heading -->

      <div class="contact">
        <div class="l-column__main--inner">
          <section class="contact__form">
            <div class="contact__form--headingComment">
              <p>当社サービスにご興味をお持ちいただき<br class="sp">ありがとうございます。<br>
                ご相談・お見積りは無料です。<br class="sp" まずはお気軽にお問い合わせ下さい。</p>
            </div>
            <div class="contact__form--headingCaution">
              <p>
                必要事項を記入し送信してください。<br>
                <span class="bg-red">必 須</span>のついた項目は必須項目になりますので、必ず入力をして頂きますようお願い申し上げます。<br>
                うまく送信できない場合は直接メールに詳しい内容を書いてご送信下さい。
              </p>
            </div>

            <script id="_bownow_cs_sid_7a2be39561dbe0eaa76e">
              var _bownow_cs_sid_7a2be39561dbe0eaa76e = document.createElement('script');
              _bownow_cs_sid_7a2be39561dbe0eaa76e.charset = 'utf-8';
              _bownow_cs_sid_7a2be39561dbe0eaa76e.src = 'https://contents.bownow.jp/forms/sid_7a2be39561dbe0eaa76e/trace.js';
              document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_7a2be39561dbe0eaa76e);
            </script>

          </section><!-- ./c-contentsDetail -->
        </div><!-- ./l-column__main--inner -->
      </div><!-- ./l-block -->
    </main><!-- ./sub__container -->

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>


  </div>
  <!-- END #fullWrap -->

</body>

</html>
