<?php
$site_root = '../../';
$cn = 'company-philosophy';
$page_title = "企業理念";
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
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>company/"><span>会社情報</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Philosophy">Philosophy</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/company/philosophy/heading.jpg?<?= time() ?>" alt="代表メッセージ" loading="lazy"></div>
      </section><!-- sub__heading -->

      <div id="philosophy" class="l-section l-block company__sub--contents philosophy">
        <div class="philosophy__main">
          <section class="philosophy__message">
            <div class="philosophy__message--left">
              <h2 class="philosophy__message--heading sub__contents--subtitle js-ani-fade">
                <span class="font-mincho">
                  私たちは、共存共栄の精神で<br>
                  お客様のめざす明日を共に創り続け、<br>
                  100年継栄を実現して社会に貢献します。
                </span>
              </h2>
              <p class="philosophy__message--text js-ani-fade">
                エイ・エヌ・エスは、お客様と共にあり、共に栄える「共存共栄」の精神を根底に持ちながら、我々が開発するシステムを通してお客様の成長と発展を継続的に支援することで、多くの人に愛される企業として100年継栄（継続して栄える経営）を成し遂げ、広く社会に貢献していくために存在する会社です。
              </p>
            </div>
            <div class="philosophy__message--right pc js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/company/philosophy/message.jpg?<?= time() ?>" loading="lazy"></div>
          </section>
          <!-- ./philosophy__message -->

          <section class="philosophy__element">
            <h1 class="sub__contents--title js-ani-fade"><span class="font-mincho">エイ・エヌ・エスブランドを構成する<br class="sp">3つの要素</span></h1>
            <div class="philosophy__element--contents philosophyList">
              <dl class="philosophyList__dl js-ani-fade">
                <div class="philosophyList__item js-ani-fade">
                  <dt class="philosophyList__dt">
                    <span class="philosophyList__dt--en font-en">Vision</span>
                    <span class="philosophyList__dt--ja">私たちが目指したい未来</span>
                  </dt>
                  <dd class="philosophyList__dd">
                    <span class="philosophyList__dd--heading">「システム」で「社会」の「未来」をつくる</span>
                    <span class="philosophyList__dd--text">高い技術力やコンサルティング力を持ったプロのPM 集団が、自社に根付いた教育体制などのDNAを活かして、</span>
                    <span class="philosophyList__dd--text -onbg">
                      【1】お客様企業の基幹システム (=を通した成長)<br>
                      【2】国内外のエンジニア業界のこれから
                    </span>
                    <span class="philosophyList__dd--text">
                      をつくり、直接的・間接的に社会の課題を解決します。
                    </span>
                  </dd>
                </div>
                <div class="philosophyList__item js-ani-fade">
                  <dt class="philosophyList__dt">
                    <span class="philosophyList__dt--en font-en">Mission</span>
                    <span class="philosophyList__dt--ja">達成のために必要なこと</span>
                  </dt>
                  <dd class="philosophyList__dd">
                    <span class="philosophyList__dd--text -onbg">
                      <span class="indent">
                        【1】技術力はもちろん、提案力コンサルティング力・コミュニケーション能力など総合的にハイレベルなPMを多数輩出します<br>
                      </span>
                      <span class="indent">
                        【2】新事業などの取り組みを筆頭に、ビジョンを実現するための社内 団結力を高めます<br>
                      </span>
                      <span class="indent">
                        【3】理念・ビジョンに共感し、会社の発展に長く貢献してくれる社員を採用します
                      </span>
                    </span>
                  </dd>
                </div>
                <div class="philosophyList__item js-ani-fade">
                  <dt class="philosophyList__dt">
                    <span class="philosophyList__dt--en font-en">Value</span>
                    <span class="philosophyList__dt--ja">私たちの提供できる価値</span>
                  </dt>
                  <dd class="philosophyList__dd">
                    <span class="philosophyList__dd--text -onbg">
                      <span class="indent">
                        【1】フルスクラッチで企業の心臓部である基幹システムを構築できます<br>
                        業務効率の改善、売上アップ、コスト削減といった価値をお客様に提供できます<br>
                      </span>
                      <span class="indent">
                        【2】月額費用で基幹システムを開発するサービス「IT-Trust」を提供します <br>
                        お客様が多額の初期費用を負担することなく基幹システムを導入していただけます<br>
                      </span>
                      <span class="indent">
                        【3】納品後の修正メンテナンスなど保守運用を行います<br>
                        システムのパフォーマンスを維持でき、お客様の発展を継続的にサポートできます<br>
                      </span>
                      <span class="indent">
                        【4】日本とアジアに拠点を持ち、豊富な人材・優れた教育・体制高い能力を展開できます<br>
                        国内外のエンジニア不足を解消し、さまざまな開発需要にも応えます<br>
                      </span>
                      <span class="indent">
                        【5】真面目でプライドを持ったスタッフが、先義後利の精神でお客様に尽くします<br>
                        強固なパートナーシップを築けるため、お客様に安心して頼っていただけます
                      </span>
                    </span>
                  </dd>
                </div>
              </dl>
              <div class="philosophy__element--img js-ani-fade"><img src="<?= $site_root; ?>assets/img/company/philosophy/keyword.jpg?<?= time() ?>" alt="ブランドを構成するキーワード" loading="lazy"></div>
            </div>
          </section>
          <!-- ./philosophy__element -->

        </div><!-- ./philosophy__main -->
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
