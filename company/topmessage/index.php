<?php
$site_root = '../../';
$cn = 'company';
$page_title = "代表メッセージ";
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

      <section class="sub__heading">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">Top Message</span>
            <span class="font-mincho">代表メッセージ</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/company/topmessage/heading.jpg" alt="代表メッセージ"></div>
      </section><!-- sub__heading -->

      <div id="topmessage" class="l-block company__sub--contents topmessage">
        <div class="topmessage__main">
          <!-- <div class="l-column__main--inner"> -->

          <!-- #topmessage-contents -->
          <section id="topmessage-contents" class="l-section js-target topmessage__contents">
            <h2 class="sub__contents--title"><span class="font-mincho">代表メッセージ</span></h2>
            <div class="topmessage__contents--wrap">
              <div class="topmessage__contents--left">
                <h3 class="topmessage__contents--title font-mincho">
                  「欲しい」を叶え<br>「困った」を解決するプロ集団として <br>また長期的にご信頼頂けるパートナーとして
                </h3>
                <div class="topmessage__contents--text">
                  <p>
                    お取引先様並びに弊社関係者の皆様
                    日頃より格別のご支援ご愛願を賜り、誠に有難う御座います。<br>
                    <br>
                    お陰様で、株式会社エイ・エヌ・エスは2017年12月をもちまして設立29年目を迎えます。<br>
                    <br>
                    これまで長年培ってきた基幹業務システムの構築ノウハウを活かして、業務特性やニーズにベストマッチしたシステムサービス、及びシステムがもたらす導入メリットをご提供し、お客様の企業成長を継続的にご支援させていただきます。先義後利の想いでリリースしたIT-Trustサービスを中心に、「欲しい」を叶え「困った」を解決するプロ集団として、また長期的にご信頼頂けるパートナーとして、共存共栄の精神のもとお客様と共に発展し社会に貢献し続ける企業として在り続けます。<br>
                    <br>
                    今後の展開においては、日本のより良い未来の為に、東南アジア諸国と連携や人材教育、雇用創出、その他自社のサービスを通じた社会貢献活動などに取り組んでまいります。<br>
                    <br>
                    社会性を最優先で考え、事業の独自性、継続・拡大に必要な経済合理性を備えて企業としての「在り方」、経営の「在り方」をしっかりと体現するとともに、実体経済・社会に影響力のある会社法人としてその責任を果たし、未来に向けての社会づくりに寄与します。<br>
                    <br>
                    当社は、お客様、そしてスタッフとその家族のために存在します。社会から認められ、A.N.Sに関わる全ての人々が幸福になる経営を行います。スタッフ一同、明確な目的を持って日々成長し、常に革新を追求したサービスで幸福へのご支援をする企業体として在り続けます。<br>
                    <br>
                    今後もご指導・ご鞭撻のほどよろしくお願い申し上げますとともに、すべてのお取引先様の益々のご発展とご健勝を心よりお祈り申し上げます。
                    <span class="text-ceoName font-mincho">株式会社エイ・エヌ・エス<br>代表取締役　赤澤博史</span>
                  </p>
                </div>
              </div>
              <div class="topmessage__contents--right">
                <div class="topmessage__contents--ceo">
                  <img src="<?= $site_root; ?>assets/img/company/topmessage/topmessage_ceo.jpg" alt="株式会社エイ・エヌ・エス 代表取締役　赤澤博史" loading="lazy">
                </div>
              </div>
            </div>
          </section><!-- ./topmessage__contents -->

          <!-- #topmessage-contents -->
          <section id="topmessage-book" class="l-section js-target topmessage__book">
            <h2 class="sub__contents--title"><span class="font-mincho">書籍紹介</span></h2>
            <div class="topmessage__book--wrap">
              <div class="topmessage__book--left">
                <img src="<?= $site_root; ?>assets/img/company/topmessage/topmessage_book.jpg" alt="飛躍するベンチャー７社に学べ！ なぜ新事業が起こせるのか？" loading="lazy">
              </div>
              <div class="topmessage__book--right">
                <h3 class="topmessage__book--title">
                  飛躍するベンチャー７社に学べ！ なぜ新事業が起こせるのか？
                </h3>
                <div class="topmessage__book--text">
                  <p>
                    将来が楽しみな成長株ベンチャー7社、彼らはなぜ新しい事業を起こすことができたのか？<br>
                    60社ものベンチャー企業のベテラン・アドバイザーとして活躍中の著者が、日々多くのベンチャーを見ている中、選りすぐりのベンチャーをピックアップしました。
                  </p>
                </div>
              </div>
            </div>
          </section><!-- ./topmessage__contents -->


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
