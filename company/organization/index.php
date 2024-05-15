<?php
$site_root = '../../';
$cn = 'company';
$page_title = "当社の体制";
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

    <main class="sub__container company company__sub">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href=""><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span class="">会社情報</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">Organization</span>
            <span class="font-mincho">当社の体制</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/company/organization/heading.jpg" alt="当社の体制"></div>
      </section><!-- sub__heading -->

      <div id="organization" class="l-block company__sub--contents organization">
        <div class="l-column__main organization__main">
          <!-- <div class="l-column__main--inner"> -->

          <!-- #organization-chart -->
          <section id="organization-chart" class="l-section js-target organization__chart">
            <h2 class="sub__contents--title"><span class="font-mincho">組織図</span></h2>
            <div class="organization__chart--modal">
              <img src="<?= $site_root; ?>assets/img/company/organization/organization_chart.jpg" alt="組織図" loading="lazy">
            </div>
          </section><!-- ./organization__chart -->

          <!-- #organization-history -->
          <section id="organization-history" class="l-section js-target organization__history">
            <h2 class="sub__contents--title"><span class="font-mincho">沿革</span></h2>
            <div class="organization__history--list">
              <dl class="historyList">
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2023</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>創業35周年を迎えました。</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2022</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">09月</span>「システム開発の内製」を支援しDX（デジタル変革）推進　「内製化支援サービス」をリリースしました。</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">05月</span>週2日、在宅勤務(テレワーク)を導入しております。</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">01月</span>テレワーク対応・書類電子化を推進する取り組みを継続的に実施しております。</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2017</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>クラウド型勤怠管理システム「勤怠Trust」リリース</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">03月</span>子会社ANSASIA CO.,LTD.　ダナン支社にて、BrSEスクールを開校</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2015</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">10月</span>本社を中央区新川THE WALL 6F に移転</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">08月</span>子会社ANSASIA CO.,LTD.　ダナン支社開設 (ベトナム ダナン市)</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>日経BP社「飛躍するベンチャー7社に学べ」森部好樹(著)単行本にエイ・エヌ・エスが掲載</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2014</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>基幹システムの「システム保守代行」サービスを開始<br>設立25周年</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">08月</span>新ブランドメッセージ、新ブランドロゴ発表</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">07月</span>資本金を5,000万円に増資</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>ISMS　ISO/IEC27001:2005(JISQ27001:2006)認証　(適用範囲にA.N.S Asia追加)</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">03月</span>PICC(一般社団法人公益資本主義推進協議会)に加盟</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">01月</span>食品販売・製造業向けERP「豪商」の旗艦パートナー契約を締結し、サービスリリース</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2011</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>勤怠ASPサービス「勤怠グリッパー」を構築し、(株)エスティワークス社と提携してサービス開始</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">11月</span>本社を中央区東日本橋のPMO東日本橋6Fに移転</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">06月</span>大阪オフィス　開設</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2009</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>設立20周年</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2008</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>ISMS ISO/IEC27001:2005(JISQ27001:2006) 認証取得（適用範囲 : 本社）</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2007</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">08月</span>福島県郡山市内　データセンターにてDR（ディザスタリカバリー）サイト開設し、<br>バックアップ体制の強化</dd>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>代表取締役に赤澤博史就任</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2006</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">05月</span>プライバシーマーク取得</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2003</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">07月</span>資本金を1,500万円に増資</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">2001</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">11月</span>(株)フェニックスシステムとグループ化</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">1999</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">04月</span>グループ会社　(株)ナヴィック設立</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">1990</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>津田沼センター開設</dd>
                </div>
                <div class="historyList__item">
                  <dt class="historyList__dt font-mincho">1989</dt>
                  <dd class="historyList__dd"><span class="c-color-blue">12月</span>
                    全日本商事(株)システム開発部門及びアウトソーシングサービス部門が独立し<br>
                    株式会社 エイ・エヌ・エスとして資本金800万円で分社独立</dd>
                </div>
              </dl>
            </div>
          </section><!-- ./organization__chart -->
        </div><!-- ./l-column__main -->
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
