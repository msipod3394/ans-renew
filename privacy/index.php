<?php
$site_root = '../';
$cn = 'privacy';
$page_title = "個人情報保護方針";
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
            <span class="font-en line-left">PRIVACY POLICY</span>
            <span class="font-mincho"><?= $page_title; ?></span>
          </span>
        </h1>
      </section><!-- sub__heading -->

      <div class="others">
        <section class="others__section">
          <h1 class="others__section--heading sub__contents--title">
            <span class="font-mincho">個人情報保護方針</span>
          </h1>

          <div class="others__bg">
            <p>株式会社エイ・エヌ・エスは（以下、「当社」といいます）はより良いシステム開発・ITサービスを通じてお客様にご満足いただきたいと願っております。そしてその事業目的を達成するために、お客様の個人情報は必要不可欠なものであり、当社の重要な情報資産です。当社は、お客様に安心して当社提供システム・ITサービスをご利用いただくために、個人情報保護を事業運営上の最重要事項と位置づけ、全社員が積極的に個人情報の保護活動を推進するとともに、以下の取り組みを実施します。</p>
          </div>

          <div class="bg">



            <div class="others__section--in">
              <h2 class="others__section--subtitle">1. 個人情報の取得、利用、提供</h2>
              <p>
                当社は、その事業内容および規範を考慮して個人情報を保護・管理する体制を確立し、適切な個人情報の取得・利用及び提供するための内部規定を定め、これを遵守します。社は、個人情報を取得する際にはその利用目的を明確にし、利用目的の達成に必要な範囲内で取り扱います。 また、目的外利用を行わないための体制を構築し、当初の範囲を超えて取り扱う場合には改めて本人の同意を得るなど規定に従った対応を行います。
              </p>
            </div>

            <div class="others__section--in">
              <h2 class="others__section--subtitle">2．個人情報の取り扱いに関する法令、国が定める指針その他規範の遵守</h2>
              <p>
                当社は、個人情報保護に関する法律および関連するその他の法令・規範を遵守致します。
              </p>
            </div>

            <div class="others__section--in">
              <h2 class="others__section--subtitle">3．個人情報の安全管理</h2>
              <p>
                当社は、個人情報への不正アクセス、個人情報の漏えい、滅失又は、き損などが生じないように万全の予防措置を講ずることにより、個人情報の安全性・正確性の確保を図り、万一問題が発生した場合及びその兆候を予見した場合には速やかに是正・改善を実施致します。
              </p>
            </div>

            <div class="others__section--in">
              <h2 class="others__section--subtitle">4．苦情及び相談への対応</h2>
              <p>
                当社は、個人情報の取り扱いに関する苦情・相談・お問合せ、開示などのご請求に、誠実かつ迅速に対応致します。
              </p>
            </div>

            <div class="others__section--in">
              <h2 class="others__section--subtitle">5．個人情報保護マネジメントシステムの確立と継続的改善</h2>
              <p>
                当社は、日本工業規格「個人情報保護マネジメントシステム－要求事項（JISQ15001）」に準拠した個人情報保護マネジメントシステムを確立し、確実に運用するとともに、定期的な見直しおよび継続的な改善を実施致します。
              </p>
            </div>

            <div class="others__section--in">
              <div class="others__bg">
                <h2 class="others__section--subtitle">お問い合わせ先</h2>
                <p>
                  個人情報苦情相談窓口<br>
                  星野 由紀（Yuki Hoshino）<br>
                  TEL 03-5540-8551　FAX 03-5540-0025<br>
                  平成16年 8月 1日（制定）平成19年 4月16日（改定）<br>
                  株式会社 エイ・エヌ・エス 代表取締役 赤澤博史
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
