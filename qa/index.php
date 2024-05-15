<?php
$site_root = '../';
$cn = 'qa';
$page_title = "よくあるご質問";
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
  <script src="<?= $site_root; ?>assets/js/qa.js?<?= time() ?>" defer></script>
</head>

<!-- ▼ inc/gac -->
<?php include($site_root . "_inc/gac.php"); ?>

<body id="<?= $cn; ?>">
  <div id="fullWrap">
    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main class="sub__container">

      <!-- ▼ breadcrumbs -->
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <!-- ▼ heading  -->
      <section class="sub__heading">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">Q&A</span>
            <span class="font-mincho">よくあるご質問</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/qa/heading.jpg" alt="よくあるご質問"></div>
      </section><!-- sub__heading -->

      <div class="l-block">
        <div class="l-column">

          <!-- ▼ l-column__sub  -->
          <div class="l-column__sub">
            <div class="sub__side--in">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#qa1" class="js-anchor">サービス内容・契約について</a></li>
                <li class="sub__side--item js-nav"><a href="#qa2" class="js-anchor">システムについて</a></li>
                <li class="sub__side--item js-nav"><a href="#qa3" class="js-anchor">保守サポートについて</a></li>
              </ul>
            </div>
          </div>

          <!-- ▼ l-column__main  -->
          <div class="l-column__main qa">
            <div class="l-column__main--inner">
              <!-- #qa -->
              <section class="l-section">
                <div class="qa__inner">
                  <div id="qa1" class="qa__contents js-target">
                    <h2 class="sub__contents--title"><span class="font-mincho">サービス内容・契約について</span></h2>
                    <div class="accordion_area gutter">
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">アウトソーシングとは、どういう意味ですか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">一般的に、アウトソーシングとは、一部業務や機能を外部に委託することを意味します。ITのアウトソーシングとは、ソフトウェアやハードウェア、ネットワークなど全般を専門業者に委託することや、 保守サービスや運用管理サービスなどがあります。 自社の本業に専念でき、コスト削減や効率化を図ることができます。</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)でシステム開発を依頼した場合、システムの所有権はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)のシステム開発の場合、契約期間は何年ですか？また、契約期間内に途中解約する場合はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">IT-Trustの契約期間である5年間の利用期間が終了したら、システムを買い取ることは可能ですか？</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">休日や夜間・深夜の対応はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">月額固定制(IT-Trust)の場合の、月額料金の内訳を教えてください</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- qa__contents -->

                  <div id="qa2" class="qa__contents js-target">
                    <h2 class="sub__contents--title"><span class="font-mincho">システムについて</span></h2>
                    <div class="accordion_area gutter">
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">アウトソーシングとは、どういう意味ですか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">一般的に、アウトソーシングとは、一部業務や機能を外部に委託することを意味します。ITのアウトソーシングとは、ソフトウェアやハードウェア、ネットワークなど全般を専門業者に委託することや、 保守サービスや運用管理サービスなどがあります。 自社の本業に専念でき、コスト削減や効率化を図ることができます。</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)でシステム開発を依頼した場合、システムの所有権はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)のシステム開発の場合、契約期間は何年ですか？また、契約期間内に途中解約する場合はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">IT-Trustの契約期間である5年間の利用期間が終了したら、システムを買い取ることは可能ですか？</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">休日や夜間・深夜の対応はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">月額固定制(IT-Trust)の場合の、月額料金の内訳を教えてください</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- qa__contents -->

                  <div id="qa3" class="qa__contents js-target">
                    <h2 class="sub__contents--title"><span class="font-mincho">保守サポートについて</span></h2>
                    <div class="accordion_area gutter">
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">アウトソーシングとは、どういう意味ですか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">一般的に、アウトソーシングとは、一部業務や機能を外部に委託することを意味します。ITのアウトソーシングとは、ソフトウェアやハードウェア、ネットワークなど全般を専門業者に委託することや、 保守サービスや運用管理サービスなどがあります。 自社の本業に専念でき、コスト削減や効率化を図ることができます。</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)でシステム開発を依頼した場合、システムの所有権はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">月額固定制(IT-Trust)のシステム開発の場合、契約期間は何年ですか？また、契約期間内に途中解約する場合はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">IT-Trustの契約期間である5年間の利用期間が終了したら、システムを買い取ることは可能ですか？</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion_one qa__contents--box">
                        <div class="ac_header qa__contents--row __ques">
                          <div class="ques__inner">
                            <p class="">休日や夜間・深夜の対応はどうなりますか？</p>
                          </div>
                          <div class="i_box"></div>
                        </div>
                        <div class="ac_inner">
                          <div class="qa__contents--row __ans">
                            <p class="">月額固定制(IT-Trust)の場合の、月額料金の内訳を教えてください</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- qa__contents -->

                </div><!-- qa__inner -->
              </section>
              <!-- ./qa -->
            </div><!-- ./l-column__main--inner -->
          </div><!-- ./l-column__main -->

        </div><!-- ./l-column -->
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
