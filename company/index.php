<?php
$site_root = '../';
$cn = 'company';
$page_title = "会社情報";
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

    <main class="company companyTop">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Company">Company</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/company/top/heading.jpg" alt="<?= $page_title ?>"></div>
      </section><!-- sub__heading -->

      <div id="companyTop" class="l-block company__sub--contents">
        <div class="companyTop__section">
          <div class="companyTop__section--left">
            <h2 class="companyTop__section--heading sub__contents--subtitle js-ani-fade">
              <span class="font-en">Brand Message</span>
              <span class="font-mincho">
                私たちは、共存共栄の精神で<br>
                お客様のめざす明日を共に創り続け、<br>
                100年継栄を実現して社会に貢献します。
              </span>
            </h2>
            <p class="companyTop__section--text js-ani-fade">
              エイ・エヌ・エスは、お客様と共にあり、共に栄える「共存共栄」の精神を根底に持ちながら、我々が開発するシステムを通してお客様の成長と発展を継続的に支援することで、多くの人に愛される企業として100年継栄（継続して栄える経営）を成し遂げ、広く社会に貢献していくために存在する会社です。
            </p>
            <div class="companyTop__section--link c-btn-circle js-ani-fade">
              <a class="c-btn-circle__link" href="<?= $site_root; ?>company/philosophy/">
                <span class="c-btn-circle__text">企業理念</span>
                <span class="c-btn-circle__circle icon-arrow"></span>
              </a>
            </div>
          </div>
          <div class="companyTop__section--right js-ani-fade"><img src="<?= $site_root; ?>assets/img/company/top/philosophy.jpg" alt="企業理念" loading="lazy"></div>
        </div><!-- ./companyTop__section -->

        <div class="companyTop__section -reverse">
          <div class="companyTop__section--left">
            <h2 class="companyTop__section--heading sub__contents--subtitle js-ani-fade">
              <span class="font-en">Top Message</span>
              <span class="font-mincho">
                「欲しい」を叶え<br>
                「困った」を解決するプロ集団として<br>
                また長期的にご信頼頂けるパートナーとして
              </span>
            </h2>
            <p class="companyTop__section--text js-ani-fade">
              明確な目的を持って日々成長し、常に革新を追求したサービスで幸福へのご支援をする企業体として在り続けます。
            </p>
            <div class="companyTop__section--link c-btn-circle js-ani-fade">
              <a class="c-btn-circle__link" href="<?= $site_root; ?>company/topmessage/">
                <span class="c-btn-circle__text">代表メッセージ</span>
                <span class="c-btn-circle__circle icon-arrow"></span>
              </a>
            </div>
          </div>
          <div class="companyTop__section--right js-ani-fade"><img src="<?= $site_root; ?>assets/img/company/topmessage/topmessage_ceo.jpg" loading="lazy"></div>
        </div><!-- ./companyTop__section -->
      </div><!-- ./l-block -->

      <div class="companyTop__otherLink otherLink js-ani-fade">
        <div class="otherLink__item">
          <a class="otherLink__link" href="<?= $site_root; ?>company/outline" data-bg="company">
            <h3 class="otherLink__heading"><span class="font-en">Outline</span>会社概要</h3>
            <p class="otherLink__text">本社所在地、営業所所在地、資本金、提供サービスなど基本情報を掲載しています。</p>
            <div class="otherLink__circle c-btn-circle">
              <span class="c-btn-circle__link">
                <span class="c-btn-circle__circle icon-arrow"></span>
              </span>
            </div>
          </a>
        </div>
        <div class="otherLink__item">
          <a class="otherLink__link" href="<?= $site_root; ?>company/organization" data-bg="organization">
            <h3 class="otherLink__heading"><span class="font-en">Organization</span>当社の体制・沿革</h3>
            <p class="otherLink__text">エイ・エヌ・エスの社内体制を掲載しています。</p>
            <div class="otherLink__circle c-btn-circle">
              <span class="c-btn-circle__link">
                <span class="c-btn-circle__circle icon-arrow"></span>
              </span>
            </div>
          </a>
        </div>
      </div>
    </main><!-- ./sub__container -->

    <!-- ▼ inc/gac -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
