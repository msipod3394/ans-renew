<?php
$site_root = './';
$cn = 'top';
include($site_root . 'functions.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?= SITE_TITLE; ?></title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= $site_root; ?>assets/css/style.css?<?= time() ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?= $site_root; ?>assets/js/top.js?<?= time() ?>" defer></script>
  <script src="<?= $site_root; ?>assets/js/common.js?<?= time() ?>" defer></script>
</head>

<body id="top">
  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="contents-top" class="top__container contentsTop">

      <!-- mv -->
      <section id="mv" class="mv js-firstv">
        <div class="mv__wrap">
          <div class="mv__slide swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="swiper-img" style="background-image: url('https://source.unsplash.com/Lks7vei-eAg.jpg')"></div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-img" style="background-image: url('/assets/img/top/mv/bg_1jpg.jpg')"></div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-img" style="background-image: url('https://source.unsplash.com/hpjSkU2UYSU')"></div>
              </div>
            </div>
          </div>
          <div class="mv__inner">
            <div class="mv__catch">
              <div class="mv__catch--en"><span class="font-en">CREATE THE FUTURE WITH YOU</span></div>
              <div class="mv__catch--ja"><span class="font-mincho">めざす明日を、<br />共につくる。</span></div>
              <div class="mv__catch--desc">
                <p>業務にあった最適なオーダーメイドのシステムを導入することで、DX推進を支援します。</p>
              </div>
              <div class="mv__catch--line"></div>
              <!-- プログレスバー -->
              <div class="mv__progressbar"><span class="mv__progressbar--in"></span></div>
            </div>
          </div>
        </div>
        <div class="mv__flow"><span class="font-en">CREATE THE FUTURE WITH YOU</span><span class="font-en">CREATE THE FUTURE WITH YOU</span><span class="font-en">CREATE THE FUTURE WITH YOU</span></div>
      </section>
      <!--./mv-->

      <!-- #Service -->
      <section id="service" class="service">
        <div class="common__title">
          <h2 class="common__title--text">
            <span class="common__title--textIn">
              <span class="font-en line-left">Service</span>
              <span class="font-mincho">サービス一覧</span>
            </span>
          </h2>
          <p class="common__title--desc service__title--desc">システム開発・保守に関連する課題やお悩みを解決し、事業成長に向けたIT支援を行います。<br>DX化や人材不足、業務効率化等の課題をITで解消するためのサービスを提供しています。</p>
        </div><!-- ./common__title -->
        <div class="service__main">
          <dl class="service__main--dl">
            <div class="service__main--item -fullorder">
              <a href="<?= $site_root; ?>service/fullorder" class="service__main--link">
                <dt class="service__main--dt">
                  <span class="font-mincho">フルオーダーシステム開発</span>
                  <span class="font-en" data-num="#01">Full Order</span>
                </dt>
                <dd class="service__main--dd">
                  使い心地を追求し、ご要望や現行業務に合わせたオーダーメイドの基幹系・業務システムを開発します。
                </dd>
              </a>
            </div><!-- ./service__main--item -->
            <div class="service__main--item -renewal">
              <a href="<?= $site_root; ?>service/renewal" class="service__main--link">
                <dt class="service__main--dt">
                  <span class="font-mincho">基幹システム再構築</span>
                  <span class="font-en" data-num="#02">Renewal</span>
                </dt>
                <dd class="service__main--dd">
                  システムの老朽化や新事業に伴うリニューアルなど、機能を見直した最適なシステム再構築を行います。
                </dd>
              </a>
            </div><!-- ./service__main--item -->
            <div class="service__main--item -maintenance">
              <a href="<?= $site_root; ?>service/maintenance" class="service__main--link">
                <dt class="service__main--dt">
                  <span class="font-mincho">システム保守引継ぎ</span>
                  <span class="font-en" data-num="#03">Maintenance</span>
                </dt>
                <dd class="service__main--dd">
                  システム開発の実績で蓄積した技術とノウハウをもとに、既存システムの保守引継ぎ・追加開発に対応します。
                </dd>
              </a>
            </div><!-- ./service__main--item -->
          </dl>
        </div><!-- service__main -->
        <div class="service__other -onbg">
          <h3 class="service__other--title"><span class="font-mincho">自社サービスのご紹介</span></h3>
          <dl class="service__other--dl">
            <div class="service__other--item -kintai">
              <img src="<?= $site_root; ?>assets/img/top/service_kintai.jpg" alt="勤怠Trust（勤怠トラスト）">
              <dt class="service__other--dt">
                <span class="font-mincho">勤怠Trust（勤怠トラスト）</span>
              </dt>
              <dd class="service__other--dd">
                多様な働き方に対応し、カスタマイズの要望にお応えするクラウド型勤怠管理システムです。
              </dd>
              <div class="service__other--link">
                <a href="https://www.kintai-trust.com/" target="_blank" class="common__borderLink"><span class="icon-link">勤怠トラスト 公式サイト</span></a>
              </div>
            </div><!-- ./service__other--item -->
            <div class="service__other--item -kintai">
              <img src="<?= $site_root; ?>assets/img/top/service_idl.jpg" alt="イノベーションデザインラボ">
              <dt class="service__other--dt">
                <span class="font-mincho">イノベーションデザインラボ</span>
              </dt>
              <dd class="service__other--dd">
                生産性・効率性を向上させる”ユーザーフレンドリー”な業務システムデザインを提供します。
              </dd>
              <div class="service__other--link">
                <a href="https://innovation-design-lab.com/" target="_blank" class="common__borderLink"><span class="icon-link">イノベーションデザインラボ 公式サイト</span></a>
              </div>
            </div><!-- ./service__other--item -->
          </dl>
        </div><!-- service__other -->
        <div class="service__sub">
          <div class="service__sub--in">
            <div class="service__sub--card --advice">
              <div class="service__sub--card--img"><img src="<?= $site_root; ?>assets/img/top/service_advice.jpg" alt="IT相談" loading="lazy"></div>
              <div class="service__sub--card--wrap">
                <h3 class="service__sub--card--title">IT相談<span class="font-mincho">Advice</span></h3>
                <div class="service__sub--card--content">
                  <p>IT・システムに関するお悩み・ご相談を無料で受付する、IT相談サービスを提供します。</p>
                  <div class="service__sub--card--link">
                    <a href="https://www.ans-net.co.jp/it-advice/" target="_blank" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- service__sub--card -->
            <div class="service__sub--card --insourcing">
              <div class="service__sub--card--img"><img src="<?= $site_root; ?>assets/img/top/service_insourcing.jpg" alt="システム開発内製化支援" loading="lazy"></div>
              <div class="service__sub--card--wrap">
                <h3 class="service__sub--card--title">システム開発<br>内製化支援<span class="font-mincho">Insourcing</span></h3>
                <div class="service__sub--card--content">
                  <p>システム開発の内製化を多角的にサポートし、DX推進に向けた課題解決のお手伝いをします。</p>
                  <div class="service__sub--card--link">
                    <a href="https://www.ans-net.co.jp/lp/insourcing/" target="_blank" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- service__sub--card -->
            <div class="service__sub--card --bcp">
              <div class="service__sub--card--img"><img src="<?= $site_root; ?>assets/img/top/service_bcp.jpg" alt="BCP対策" loading="lazy"></div>
              <div class="service__sub--card--wrap">
                <h3 class="service__sub--card--title">BCP対策<span class="font-mincho">BCP</span></h3>
                <div class="service__sub--card--content">
                  <p>リスクに備えてシステムやデータを守る対策を講じ、インフラ環境の保守・管理をしています。</p>
                  <div class="service__sub--card--link">
                    <a href="<?= $site_root; ?>service/bcp/" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- service__sub--card -->
            <div class="service__sub--card --offshore">
              <div class="service__sub--card--img"><img src="<?= $site_root; ?>assets/img/top/service_offshore.jpg" alt="オフショア開発" loading="lazy"></div>
              <div class="service__sub--card--wrap">
                <h3 class="service__sub--card--title">オフショア開発<span class="font-mincho">Offshore</span></h3>
                <div class="service__sub--card--content">
                  <p>高い技術力で開発を担うベトナム子会社ANSAsia。オフショアでのラボ型開発を提供します。</p>
                  <div class="service__sub--card--link">
                    <a href="https://www.ans-net.co.jp/lp/offshore/" target="_blank" class="common__borderLink"><span class="icon-arrow">詳細を見る</span></a>
                  </div>
                </div>
              </div>
            </div><!-- service__sub--card -->
          </div>
        </div><!-- service__sub -->
      </section><!-- ./Service -->

      <!-- #mission -->
      <section id="mission" class="mission -onbg">
        <div class="common__title">
          <h2 class="common__title--text">
            <span class="common__title--textIn">
              <span class="font-en line-left">Our Mission</span>
              <span class="font-mincho">”システム”ではなく、<br>確実な導入効果とメリットを<br class="sp">提供します</span>
            </span>
          </h2>
        </div><!-- ./common__title -->
        <div class="mission__in">
          <div class="mission__contents">
            <div class="mission__contents--in">
              <p class="mission__contents--text">
                システム開発会社として、首都圏を中心にITシステム関連サービス事業を展開しているエイ・エヌ・エスは、『DXを推進すべく、オーダーメイドの基幹業務システムを構築したい』『既存の業務システムを整理して使いやすく再構築したい』『システム保守が打ち切りになったため、保守を引継いでほしい』といったお悩み・課題を解決するために、システムをとおして、DX推進や業務効率化といった”導入効果とメリット”をご提供します。
              </p>
              <div class="mission__linkButton common__linkButton"><a href="<?= $site_root; ?>usability/"><span class="font-mincho">私たちの強み</span></a></div>
            </div>
          </div><!-- ./common__title -->
          <div class="mission__image">
            <img src="<?= $site_root; ?>assets/img/top/mission_image.png" alt="私たちの強み" />
          </div><!-- ./mission__image -->
        </div><!-- ./mission__in -->
      </section><!-- ./mission -->

      <!-- #develop -->
      <section id="develop" class="develop">
        <div class="common__title develop__title">
          <h2 class="common__title--text">
            <span class="common__title--textIn">
              <span class="font-en line-left">Development</span>
              <span class="font-mincho">対応技術</span>
            </span>
          </h2>
          <p class="common__title--desc develop__title--desc">お客様が抱える問題を整理し、問題に応じて最適な技術を使用した解決案を提案いたします。</p>
        </div><!-- ./common__title -->
        <div class="common__inner develop__inner">
          <div class="develop__listBox">
            <h3 class="develop__title"><span class="font-mincho">弊社対応技術 一覧</span></h3>
            <div class="develop__listWrap">
              <ul class="develop__list dev-lang">
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">VB.NET</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">C#.NET</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">APS.NET</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">Java</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">PHP</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">Ruby</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">HTML</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">CSS</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">JavaScript</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">TypeScript</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">CoffeeScript</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">Delphi</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">VB6</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">VB.NET</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">COBOL</span></p>
                </li>
              </ul>
              <ul class="develop__list dev-db">
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">VB.NET</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">PostgreSQL</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">MySQL</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot text-small">Oracle Database</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">DB2</span></p>
                </li>
              </ul>
              <ul class="develop__list dev-framework">
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">jQuery</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">Vue.js</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">Laravel</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot text-small">Ruby on Rails</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">CakePHP</span></p>
                </li>
                <li class="develop__item">
                  <p class="develop__item--text"><span class="font-robot">.NET</span></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section><!-- ./develop -->

      <!-- #case -->
      <section id="case" class="case">
        <div class="case__titleImg">
          <div class="case__titleImg--in">
            <div class="common__title">
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
          <div class="case__toggle">
            <h3 class="case__toggle--title"><span class="font-mincho">業種別でみる</span></h3>
            <ul class="case__toggle--list">
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
              <li class="case__toggle--item"><a href="">業種A</a></li>
            </ul>
          </div><!-- ./case__toggle -->
          <div class="case__cardList">
            <ul class="case__cardList--list">
              <li class="case__cardList--item caseItem">
                <a href="<?= $site_root; ?>case/detail.php" class="caseItem__link">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
              <li class="case__cardList--item caseItem">
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
        </div>
        <div class="column__linkButton common__linkButton"><a href="<?= $site_root; ?>case"><span class="font-mincho">全てのコラムを見る</span></a></div>
      </section><!-- ./case -->

      <!-- #columns -->
      <section id="columns" class="columns">
        <div class="common__title">
          <h2 class="common__title--text">
            <span class="common__title--textIn">
              <span class="font-en line-left">Columns</span>
              <span class="font-mincho">システム開発に関する最新情報</span>
            </span>
          </h2>
        </div>
        <div class="common__inner columns__inner">
          <div class="columns__box">
            <h3 class="columns__title"><span class="font-mincho">お悩み解決コラム</span></h3>
            <ul class="c-columnRow__list">
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>case/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>case/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>case/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>case/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
            </ul>
            <div class="columns__linkButton common__linkButton"><a href="<?= $site_root; ?>movie"><span class="font-mincho">全ての配信動画を見る</span></a></div>
          </div>
          <div class="columns__box">
            <h3 class="columns__title"><span class="font-mincho">配信動画</span></h3>
            <ul class="c-columnRow__list">
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>movie/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>movie/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>movie/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
              <li class="c-columnRow__card">
                <a href="<?= $site_root; ?>movie/detail.php" class="c-columnRow__card--link">
                  <div class="c-columnRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                  <div class="c-columnRow__card--contents">
                    <time class="c-columnRow__card--date" datetime="2024-04-03">2023.12.15</time>
                    <p class="c-columnRow__card--title">IT需要拡大とIT人材不足の背景</p>
                    <p class="c-columnRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <ul class="tag icon-tag">
                      <li class="tag__item">#IT-Trust</li>
                      <li class="tag__item">#システム開発</li>
                      <li class="tag__item">#販売管理システム</li>
                    </ul>
                  </div>
                </a>
              </li><!-- c-columnRow__card -->
            </ul>
            <div class="columns__linkButton common__linkButton"><a href="<?= $site_root; ?>movie"><span class="font-mincho">全ての配信動画を見る</span></a></div>
          </div>
        </div>
      </section><!-- ./columns -->

    </main><!-- ./top__container -->

    <!-- ▼ inc/gac -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
