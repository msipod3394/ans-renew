<?php
$site_root = '../';
$cn = 'service';
$page_title = "サービス一覧";
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

<body id="<?= $cn ?>">
  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main class="sub__container serviceTop">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Service">Service</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/service-top_heading.jpg" alt=""></div>
      </section><!-- sub__heading -->

      <section id="serviceTop" class="serviceTop">
        <div class="serviceTop__main">
          <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">各サービスのご紹介</span></h2>
          <div class="serviceTop__mainList">
            <div class="serviceTop__mainItem -fullorder">
              <div class="serviceTop__mainItem--contents js-ani-fade">
                <h3 class="serviceTop__mainItem--title">
                  <span class="font-en">Full Order</span>
                  <span class="font-mincho">フルオーダーシステム開発</span>
                </h3>
                <div class="serviceTop__mainItem--text">
                  <p>使い心地を追求し、ご要望や現行業務に合わせたオーダーメイドの基幹系・業務システムを開発します。</p>
                </div>
                <ul class="serviceTop__mainItem--linkList">
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>/service/fullorder/" class="common__borderLink"><span class="icon-arrow">詳しく見る</span></a>
                  </li>
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>case/" class="common__borderLink"><span class="icon-arrow">導入事例</span></a>
                  </li>
                </ul>
              </div>
              <div class="serviceTop__mainItem--img js-ani-zoom">
                <img src="<?= $site_root; ?>assets/img/service/service-top_fullorder.jpg" alt="フルオーダーシステム開発" loading="lazy">
              </div>
            </div>

            <div class="serviceTop__mainItem -renewal">
              <div class="serviceTop__mainItem--contents js-ani-fade">
                <h3 class="serviceTop__mainItem--title">
                  <span class="font-en">Renewal</span>
                  <span class="font-mincho">基幹システム再構築</span>
                </h3>
                <div class="serviceTop__mainItem--text">
                  <p>システムの老朽化や新事業に伴うリニューアルなど、機能を見直した最適なシステム再構築を行います。</p>
                </div>
                <ul class="serviceTop__mainItem--linkList">
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>service/renewal/" class="common__borderLink"><span class="icon-arrow">詳しく見る</span></a>
                  </li>
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>case/" class="common__borderLink"><span class="icon-arrow">導入事例</span></a>
                  </li>
                </ul>
              </div>
              <div class="serviceTop__mainItem--img js-ani-zoom">
                <img src="<?= $site_root; ?>assets/img/service/service-top_renewal.jpg" alt="基幹システム再構築" loading="lazy">
              </div>
            </div>
            <div class="serviceTop__mainItem -maintenance">
              <div class="serviceTop__mainItem--contents js-ani-fade">
                <h3 class="serviceTop__mainItem--title">
                  <span class="font-en">Maintenance</span>
                  <span class="font-mincho">システム保守引継ぎ</span>
                </h3>
                <div class="serviceTop__mainItem--text">
                  <p>システム開発の実績で蓄積した技術とノウハウをもとに、既存システムの保守引継ぎ・追加開発に対応します。</p>
                </div>
                <ul class="serviceTop__mainItem--linkList">
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>/service/maintenance/" class="common__borderLink"><span class="icon-arrow">詳しく見る</span></a>
                  </li>
                  <li class="serviceTop__mainItem--link">
                    <a href="<?= $site_root; ?>case/" class="common__borderLink"><span class="icon-arrow">導入事例</span></a>
                  </li>
                </ul>
              </div>
              <div class="serviceTop__mainItem--img js-ani-zoom">
                <img src="<?= $site_root; ?>assets/img/service/service-top_maintenance.jpg" alt="システム保守引継ぎ" loading="lazy">
              </div>
            </div>
          </div>
        </div><!-- serviceTop__main -->

        <div class=" serviceTop__other -onbg">
          <h3 class="sub__contents--title js-ani-fade"><span class="font-mincho">自社サービスのご紹介</span></h3>
          <dl class="serviceTop__other--dl">
            <div class="serviceTop__other--item js-ani-fade -kintai">
              <img src="<?= $site_root; ?>assets/img/top/service_kintai.jpg" alt="勤怠Trust（勤怠トラスト）" loading="lazy">
              <dt class="serviceTop__other--dt">
                <span class="font-mincho">勤怠Trust（勤怠トラスト）</span>
              </dt>
              <dd class="serviceTop__other--dd">
                多様な働き方に対応し、カスタマイズの要望にお応えするクラウド型勤怠管理システムです。
              </dd>
              <div class="serviceTop__other--link">
                <a href="" target="_blank" class="common__borderLink"><span class="icon-link">勤怠トラスト 公式サイト</span></a>
              </div>
            </div><!-- ./serviceTop__other--item -->
            <div class="serviceTop__other--item js-ani-fade -kintai">
              <img src="<?= $site_root; ?>assets/img/top/service_idl.jpg" alt="イノベーションデザインラボ" loading="lazy">
              <dt class="serviceTop__other--dt">
                <span class="font-mincho">イノベーションデザインラボ</span>
              </dt>
              <dd class="serviceTop__other--dd">
                生産性・効率性を向上させる”ユーザーフレンドリー”な業務システムデザインを提供します。
              </dd>
              <div class="serviceTop__other--link js-ani-fade">
                <a href="" target="_blank" class="common__borderLink"><span class="icon-link">イノベーションデザインラボ 公式サイト</span></a>
              </div>
            </div><!-- ./serviceTop__other--item -->
          </dl>
        </div><!-- serviceTop__other -->

        <div class="serviceTop__sub">
          <div class="serviceTop__sub--in">
            <div class="serviceTop__sub--card --advice js-ani-fade">
              <div class="serviceTop__sub--card--img js-ani-zoom"><img src="<?= $site_root; ?>assets/img/top/service_advice.jpg" alt="IT相談" loading="lazy"></div>
              <div class="serviceTop__sub--card--wrap">
                <h3 class="serviceTop__sub--card--title">IT相談<span class="font-mincho">Advice</span></h3>
                <div class="serviceTop__sub--card--content">
                  <p>IT・システムに関するお悩み・ご相談を無料で受付する、IT相談サービスを提供します。</p>
                  <div class="serviceTop__sub--card--link">
                    <a href="<?= $site_root; ?>" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- serviceTop__sub--card -->
            <div class="serviceTop__sub--card --insourcing js-ani-fade">
              <div class="serviceTop__sub--card--img js-ani-zoom"><img src="<?= $site_root; ?>assets/img/top/service_insourcing.jpg" alt="システム開発内製化支援" loading="lazy"></div>
              <div class="serviceTop__sub--card--wrap">
                <h3 class="serviceTop__sub--card--title">システム開発<br>内製化支援<span class="font-mincho">Insourcing</span></h3>
                <div class="serviceTop__sub--card--content">
                  <p>システム開発の内製化を多角的にサポートし、DX推進に向けた課題解決のお手伝いをします。</p>
                  <div class="serviceTop__sub--card--link">
                    <a href="<?= $site_root; ?>" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- serviceTop__sub--card -->
            <div class="serviceTop__sub--card --bcp js-ani-fade">
              <div class="serviceTop__sub--card--img js-ani-zoom"><img src="<?= $site_root; ?>assets/img/top/service_bcp.jpg" alt="BCP対策" loading="lazy"></div>
              <div class="serviceTop__sub--card--wrap">
                <h3 class="serviceTop__sub--card--title">BCP対策<span class="font-mincho">BCP</span></h3>
                <div class="serviceTop__sub--card--content">
                  <p>リスクに備えてシステムやデータを守る対策を講じ、インフラ環境の保守・管理をしています。</p>
                  <div class="serviceTop__sub--card--link">
                    <a href="<?= $site_root; ?>" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- serviceTop__sub--card -->
            <div class="serviceTop__sub--card --offshore js-ani-fade">
              <div class="serviceTop__sub--card--img js-ani-zoom"><img src="<?= $site_root; ?>assets/img/top/service_offshore.jpg" alt="オフショア開発" loading="lazy"></div>
              <div class="serviceTop__sub--card--wrap">
                <h3 class="serviceTop__sub--card--title">オフショア開発<span class="font-mincho">Offshore</span></h3>
                <div class="serviceTop__sub--card--content">
                  <p>高い技術力で開発を担うベトナム子会社ANSAsia。オフショアでのラボ型開発を提供します。</p>
                  <div class="serviceTop__sub--card--link">
                    <a href="<?= $site_root; ?>" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- serviceTop__sub--card -->
          </div>
        </div><!-- serviceTop__sub -->

      </section>
      <!--./serviceMain-->

      <!-- #case -->
      <section id="case" class="case">
        <div class="case__titleImg">
          <div class="case__titleImg--in">
            <div class="common__title js-ani-fade">
              <h2 class="common__title--text">
                <span class="common__title--textIn">
                  <span class="font-en line-left">Case</span>
                  <span class="font-mincho">お客様導入事例</span>
                </span>
              </h2>
              <p class="common__title--desc">実績300社以上の豊富な実績。IT-Trustをご利用いただくお客様よりリアルな声をいただきました。</p>
            </div><!-- ./common__title -->
          </div>
        </div><!-- ./case__titleImg -->
        <div class="case__inner common__inner">
          <div class="case__toggle js-ani-fade">
            <h3 class="case__toggle--title"><span class="font-mincho">業種別でみる</span></h3>
            <ul class="case__toggle--list">
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
              <li class="case__toggle--item"><a href="<?= $site_root; ?>">業種A</a></li>
            </ul>
          </div><!-- ./case__toggle -->
          <div class="case__cardList">
            <ul class="case__cardList--list">
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="case__cardList--item caseItem js-ani-fade">
                <a href="<?= $site_root; ?>" class="caseItem__link">
                  <div class="caseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                  <div class="caseItem__contents">
                    <p class="caseItem__contents--company">株式会社フロンティアコンサルティング</p>
                    <p class="caseItem__contents--title">〇〇システム開発</p>
                    <p class="caseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseItem__contents--tagWrap">
                      <div class="caseItem__contents--tag">
                        <ul class="tag">
                          <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                          <li class="tag__item"><span class="">業種：〇〇</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="case__linkButton common__linkButton js-ani-fade"><a href="<?= $site_root; ?>case"><span class="font-mincho">全ての事例を見る</span></a></div>
        </div>
      </section><!-- ./case -->

      <!-- #column -->
      <section id="column" class="subColumn js-target">
        <div class="common__inner">
          <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">基幹システムに関するコラム</span></h2>
          <div class=" subColumn__inner">
            <ul class="subColumn__list">
              <li class="subColumn__card js-ani-fade">
                <a href="" class="subColumn__card--link">
                  <div class="subColumn__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="subColumn__card--contents">
                    <time class="subColumn__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="subColumn__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="subColumn__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="subColumn__card--tag">
                      <span class="tag">#IT-Trust</span>
                      <span class="tag">#システム開発</span>
                      <span class="tag">#販売管理システム</span>
                    </div>
                  </div>
                </a>
              </li><!-- subColumn__card -->
              <li class="subColumn__card js-ani-fade">
                <a href="" class="subColumn__card--link">
                  <div class="subColumn__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="subColumn__card--contents">
                    <time class="subColumn__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="subColumn__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="subColumn__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="subColumn__card--tag">
                      <span class="tag">#IT-Trust</span>
                      <span class="tag">#システム開発</span>
                      <span class="tag">#販売管理システム</span>
                    </div>
                  </div>
                </a>
              </li><!-- subColumn__card -->
              <li class="subColumn__card js-ani-fade">
                <a href="" class="subColumn__card--link">
                  <div class="subColumn__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="subColumn__card--contents">
                    <time class="subColumn__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="subColumn__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="subColumn__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="subColumn__card--tag">
                      <span class="tag">#IT-Trust</span>
                      <span class="tag">#システム開発</span>
                      <span class="tag">#販売管理システム</span>
                    </div>
                  </div>
                </a>
              </li><!-- subColumn__card -->
              <li class="subColumn__card js-ani-fade">
                <a href="" class="subColumn__card--link">
                  <div class="subColumn__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="subColumn__card--contents">
                    <time class="subColumn__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="subColumn__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="subColumn__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="subColumn__card--tag">
                      <span class="tag">#IT-Trust</span>
                      <span class="tag">#システム開発</span>
                      <span class="tag">#販売管理システム</span>
                    </div>
                  </div>
                </a>
              </li><!-- subColumn__card -->
            </ul>
            <div class="subColumn__linkButton common__linkButton js-ani-fade"><a href="<?= $site_root; ?>column"><span class="font-mincho">全てのコラムを見る</span></a></div>
          </div>
        </div>
      </section>
    </main><!-- ./sub__container -->

    <!-- ▼ inc/contact -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
