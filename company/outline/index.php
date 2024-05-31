<?php
$site_root = '../../';
$cn = 'company-outline';
$page_title = "会社概要・アクセス";
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

    <main class="sub__container company company__sub">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>company/"><span>会社情報</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Outline / Access">Outline / Access</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/company/outline/heading.jpg" alt="会社概要 / アクセス"></div>
      </section><!-- sub__heading -->

      <div id="outline" class="l-block company__sub--contents outline">
        <div class="l-column__main outline__main">

          <!-- #outline-contents -->
          <section id="outline-contents" class=" js-target outline__contents">
            <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">会社概要</span></h2>
            <div class="outline__contents--list">
              <dl class="contentsList">
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">社名</dt>
                  <dd class="contentsList__dd">株式会社エイ・エヌ・エス</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">グループ会社</dt>
                  <dd class="contentsList__dd">
                    <a href="https://www.ans-asia.com/" target="_blank" class="contentsList__dd--link">
                      <img src="<?= $site_root; ?>assets/img/common/logo/logo_asia.jpg" alt="A.N.S Asia">
                      <span class="icon-blank">A.N.S Asia 公式サイト</span>
                    </a>
                  </dd>
                  <dd class="contentsList__dd">A.N.Sが100%出資し2012年(平成24年)11月ベトナム　ハノイ市に設立</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">設立</dt>
                  <dd class="contentsList__dd">
                    1989年（平成元年）12月1日<br>
                    <img src="<?= $site_root; ?>assets/img/company/outline/bnr_35th.jpg" alt="株式会社エイ・エヌ・エスは、創立35周年を迎えました。" loading="lazy">
                  </dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">資本金</dt>
                  <dd class="contentsList__dd">￥50,000,000.-</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">代表者</dt>
                  <dd class="contentsList__dd">代表取締役　赤澤　博史（Hirofumi Akazawa）</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">社員数</dt>
                  <dd class="contentsList__dd">正社員　42名（2024年3月現在）</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">決算期</dt>
                  <dd class="contentsList__dd">7月</dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">役員構成</dt>
                  <dd class="contentsList__dd">
                    代表取締役　赤澤博史<br>
                    取締役　渡辺秀康<br>
                    取締役　赤澤敏郎(非常勤)<br>
                    他、監査役１名
                  </dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">主な事業内容</dt>
                  <dd class="contentsList__dd">
                    システム構築 (提案、設計、開発、導入、保守)<br>
                    システム保守代行<br>
                    クラウド型サービス<br>
                    オフショア開発<br>
                    その他 IT 関連サービス
                  </dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">主要取引銀行</dt>
                  <dd class="contentsList__dd">
                    三井住友銀行<br>
                    三菱東京UFJ銀行<br>
                    りそな銀行
                  </dd>
                </div>
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">所属団体等</dt>
                  <dd class="contentsList__dd">
                    東京商工会議所<br>
                    公益財団法人CIESF（シーセフ)<br>
                    一般社団法人公益資本主義推進協議会(PICC)
                  </dd>
                </div>
              </dl>
            </div>
          </section><!-- ./outline__contents -->

          <!-- #outline-access -->
          <section id="outline-access" class=" js-target outline__access">
            <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">アクセス</span></h2>
            <div class="outline__access--list">
              <dl class="contentsList">
                <div class="contentsList__item js-ani-fade">
                  <dt class="contentsList__dt">住所</dt>
                  <dd class="contentsList__dd">
                    〒104-0033 東京都中央区新川2-1-5 THE WALL 6F
                    <a href="https://maps.app.goo.gl/98GmZpRbmVYnSTK69" target="_blank" class="contentsList__dd--link">
                      <span class="icon-blank">Google Map</span>
                    </a>
                  </dd>
                </div>
              </dl>
              <div class="outline__access--map js-ani-fade">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d810.2439345037405!2d139.77990960427744!3d35.67759939110514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018895c64d5b8ed%3A0xe4453505abf40b70!2z44CSMTA0LTAwMzMg5p2x5Lqs6YO95Lit5aSu5Yy65paw5bed77yS5LiB55uu77yR4oiS77yV!5e0!3m2!1sja!2sjp!4v1715490901747!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="outline__access--info js-ani-fade">
                <dl>
                  <dt class="c-color-blue">交通のご案内</dt>
                  <dd>
                    東京メトロ日比谷線、東京メトロ東西線「茅場町」駅、徒歩3分<br>
                    東京メトロ日比谷線、JR京葉線「八丁堀」駅、徒歩5分
                  </dd>
                </dl>
              </div>
            </div>
          </section><!-- ./outline__contents -->
        </div><!-- ./l-column__main -->
      </div><!-- ./l-block -->
    </main><!-- ./sub__container -->

    <!-- ▼ inc/companyLink -->
    <?php include($site_root . "_inc/companyLink.php"); ?>

    <!-- ▼ inc/contact -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
