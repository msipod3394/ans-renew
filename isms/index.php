<?php
$site_root = '../';
$cn = 'INFORMATION SECURITY';
$page_title = "情報セキュリティー";
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

    <main id="" class="sub__container">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading _type-simple">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">INFORMATION SECURITY</span>
            <span class="font-mincho"><?= $page_title; ?></span>
          </span>
        </h1>
      </section><!-- sub__heading -->

      <div class="others">

        <section class="others__section">
          <div class="others__bg others__section--in">
            <p>当社は『共存共栄』を企業理念とし、我々が開発するシステムを通して、お客様の成長と発展を継続的に支援することで、
              100年継栄を成し遂げお客様の繁栄と社会の発展に貢献することを経営理念としております。
              そして、この経営理念を具体的に実践していくには、お客様のシステム、データ等の情報資産ならびに
              当社の経営資源としての情報資産をあらゆる脅威から保護し、適切に活用していくことが重要であると認識しています。
              こうした考えのもと、情報セキュリティ基本方針を定め、以下のとおり宣言します。</p>
          </div>

          <div class="bg">
            <div class="others__section--in isms">
              <div class="isms isms__in">
                <ul class="isms__list">
                  <li class="isms__item">
                    保有する情報資産に対する脅威、脆弱性について継続的に分析、評価することにより情報資産をその利用目的、重要度に応じて適切に管理します。
                  </li>
                  <li class="isms__item">全ての従業員及び協力会社の要員は、情報セキュリティの推進にあたり、お客様との契約および関連法令を遵守します。</li>
                  <li class="isms__item">セキュリティ管理責任者を定め、情報セキュリティ委員会を設置し、情報セキュリティに関する組織的かつ、継続的な運用管理体制を確立・維持します。</li>
                  <li class="isms__item">全ての従業員(契約社員、派遣社員を含む)に対して、情報セキュリティの重要性と意識の向上を図るための教育・訓練を、定期的に実施します。</li>
                  <li class="isms__item">万一、情報セキュリティ上の事件または事故が発生した場合、迅速に対処する体制を確立し、被害を最小限にとどめると共に再発防止に努めます。</li>
                  <li class="isms__item">事業活動が中断・停止することを最小限に抑えるために、物理的・技術的・組織的及び人的な予防措置を講じます。また、万一の事態に備え、事業継続計画を策定し、事業活動と重要な業務プロセスの継続を確保します。</li>
                  <li class="isms__item">全ての従業員(契約社員、派遣社員を含む)に対して就業規則及び当社のISMSを遵守することを要求するとともに、当社、顧客、協力会社の情報資産の保護を危うくする故意の行為を行った場合は、人事規定により懲戒処分/法的処分の対象とします。</li>
                  <li class="isms__item">この基本方針に基づく情報セキュリティ目的を定め、その目的の達成に向けた活動を継続的に実施・改善してゆく体制及び、仕組みを確立するためにISMSを導入し、情報セキュリティの推進を図ります。</li>
                </ul>
                <p class="c-text-right">
                  2014年10月1日 改定<br>
                  株式会社エイ・エヌ・エス<br>
                  代表取締役 赤澤 博史
                </p>
              </div>
            </div>
          </div>

        </section><!-- ./c-contentsDetail -->
      </div><!-- ./l-block -->
    </main><!-- ./sub__container -->

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>


  </div>
  <!-- END #fullWrap -->

</body>

</html>
