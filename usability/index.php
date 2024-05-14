<?php
$site_root = '../';
$cn = 'uiux';
$page_title = "UI/UX";
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

<body id="uiux">
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->
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
            <span class="font-en line-left">UI/UX</span>
            <span class="font-mincho">UI/UX</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/usability/heading.jpg" alt="UI/UX"></div>
      </section><!-- sub__heading -->

      <div id="usability" class="l-block">
        <div class="l-column">

          <!-- ▼ l-column__sub  -->
          <div class="l-column__sub">
            <div class="sub__side--in">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#about" class="js-anchor">UI/UXデザインを業務システムに取り入れる</a></li>
                <li class="sub__side--item js-nav"><a href="#features" class="js-anchor">私たちにできること</a></li>
                <li class="sub__side--item js-nav"><a href="#userneeds" class="js-anchor">ユーザーニーズ遷移をデザインする</a></li>
                <li class="sub__side--item js-nav"><a href="#cases" class="js-anchor">業務システムUI/UX改善事例</a></li>
                <li class="sub__side--item js-nav"><a href="#uiux" class="js-anchor">モックアップアプローチによる効率的なシステム開発</a></li>
                <li class="sub__side--item js-nav"><a href="#column" class="js-anchor">UI/UXデザインに関するコラム</a></li>
              </ul>
            </div>
          </div>

          <!-- ▼ l-column__main  -->
          <div class="l-column__main usability">
            <!-- #about -->
            <section id="about" class="about l-section js-target">
              <h2 class="sub__contents--title"><span class="font-mincho">
                  UI/UXデザインを業務システムに取り入れる
                </span></h2>
              <p class="sub__contents--desc">
                <span class="desc-large">ユーザーがシステムで見ているもの、操作している対象は「データ」です。</span>
                デザインの対象はデータであり、データをデザインすることで使い心地を追求した業務システムを構築します。データベースに格納されているローデータ(=素の明細情報)を利用するユーザーのニーズに合わせて、的確に、見やすく、必要なデータをデザインして見せるかが重要になります。
              </p>
              <dl class="about__cards--tagsdl">
                <div class="about__cards--tags">
                  <dt class="about__cards--tagdt">使い心地の良い業務システムのデザインとは</dt>
                  <dd class="about__cards--tagdd">
                    <ul class="about__cards--tagList">
                      <li class="about__cards--tagItem"><span>シンプルで直感的なデザイン</span>UIは直感的な操作ができ、情報や機能が簡単に見つかるように設計されるべきです。</li>
                      <li class="about__cards--tagItem"><span>一貫性のあるデザイン要素</span>ユーザーがより認識しやすくするため、デザイン要素は一貫性、統一感が重要です。</li>
                      <li class="about__cards--tagItem"><span>素早いレスポンスと高速な読込時間</span>短い読み込み時間と素早い操作レスポンスがユーザーエクスペリエンスに重要です。</li>
                      <li class="about__cards--tagItem"><span>分かりやすいナビゲーション</span>ユーザーがアプリ内を簡単に移動できるよう分かりやすいナビゲーションが重要です。</li>
                      <li class="about__cards--tagItem"><span>適切なフィードバック</span>アクションに対する明確で分かりやすいフィードバックが重要です。</li>
                      <li class="about__cards--tagItem"><span>モバイルフレンドリー</span>モバイル対応により、レスポンシブデザインやモバイルアプリ最適化が重要です。</li>
                      <li class="about__cards--tagItem"><span>ユーザーフィードバックの取り入れ</span>ユーザーの利用方法を理解し、フィードバックを活用して改善することが大切です。</li>
                      <li class="about__cards--tagItem"><span>アクセシビリティの考慮</span>多様なユーザーに対応し、利用しやすい環境を提供します。</li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </section>

            <!-- #features -->
            <section id="features" class="features l-section js-target">
              <div class="features__inner">
                <div class="features__heading">
                  <h2 class="sub__contents--title"><span class="font-mincho">私たちにできること</span></h2>
                  <p class="sub__contents--desc">
                    <span class="desc-large">「ユーザー主体設計志向」で “使い心地の良い” 最高の業務系システムを構築します。</span>
                    エイ・エヌ・エスは、ユーザー主体設計(User Centered design)をベースにUI（User Interface）／UX(User Experience)の技術を習得し、ユーザーの利用目的、ニーズに沿った設計志向で要件定義、設計に取り組んでいます。
                  </p>
                </div>
                <div class="common__cards">
                  <dl class="common__cards--list">
                    <div class="common__cards--item">
                      <div class="common__cards--img"><img src="<?= $site_root; ?>assets/img/service/renewal/features_img1.jpg" alt="ユーザー主体設計"></div>
                      <dt class="common__cards--dt _hasBorder">ユーザー主体設計</dt>
                      <dd class="common__cards--dd">
                        <p>ユーザー主体設計は、製品やサービスを提供する際に、ユーザーの視点からアプローチし、ユーザーが何を求めているのかを理解し、本質的なニーズを満たすことを目指すアプローチです。このアプローチはUX（ユーザーエクスペリエンス）と密接に関連しており、ユーザーが望むものを検証しながら製品やサービスを開発することで、ユーザーが使いづらい製品やサービスを作らないようにします。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item">
                      <div class="common__cards--img"><img src="<?= $site_root; ?>assets/img/service/renewal/features_img2.jpg" alt="UI / UX"></div>
                      <dt class="common__cards--dt _hasBorder">UI / UX</dt>
                      <dd class="common__cards--dd">
                        <p>
                          <span class="text-large">UI（ユーザーインターフェース）</span>
                          <br>
                          ソフトウェア、システム、または機器などとユーザーとの情報のやりとりを可能にする仕組みを指します。ソフトウェアやシステムにおいては、画面上に表示されるデザインやフォントなどを含み、機器に関してはその外観や操作インターフェースなどを指します。
                        </p>
                        <p>
                          <span class="text-large">UX（ユーザーエクスペリエンス）</span>
                          <br>
                          ユーザーが特定のサービスや製品を使用する際に得る経験全般や満足度などを包括的に指します。個々の機能や使いやすさだけでなく、ユーザーが本当に望むことを楽しく、心地よく実現できるかどうかに焦点を当てた概念です。UXはユーザーが製品やサービスを使う過程全体に関連し、ユーザーの感情、行動、および全体的な満足度に影響を与えます。
                        </p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                  </dl>
                </div>
              </div>
            </section>

            <!-- #userneeds -->
            <section id="userneeds" class="userneeds js-target">
              <div class="userneeds__inner l-section">
                <div class="userneeds__heading">
                  <h2 class="sub__contents--title"><span class="font-mincho">ユーザーニーズ遷移をデザインする</span></h2>
                  <p class="sub__contents--desc">
                    エイ・エヌ・エスのシステム構築において、お客様の業務に関するユーザーニーズを洗い出し、それをシステムに反映するために、2つのポイントに焦点を当てて設計を行います。<br>
                    ユーザーの視点に立ち、ユーザーの気持ちや立場を考慮しながら、お客様と協力して一連のユーザーニーズの進化を整理し、設計を行います。このアプローチは、”システム主体設計志向”から”ユーザー主体設計志向”に方針を転換し、使いやすく、優れたシステムの構築を実現します。
                  </p>
                </div>
                <div class="userneeds__figure">
                  <div class="userneeds__figure--top figureTop">
                    <ul class="figureTop__list">
                      <li class="figureTop__item">知りたい情報だけを<br class="sp">即座に見せる</li>
                      <li class="figureTop__item">次のニーズを<br class="sp">先読みした設計</li>
                    </ul>
                    <p class="figureTop__text">上記を満たしたシステムを構築するためには、<br class="sp">以下の点を考える必要があります。</p>
                  </div>
                  <div class="userneeds__figure--arrow icon-arrow3"></div>
                  <div class="userneeds__figure--bottom figureBottom">
                    <ul class="figureBottom__list">
                      <li class="figureBottom__item">全体掌握の目的は何か</li>
                      <li class="figureBottom__item">どんなデータ、<br>サマリーを見たいのか</li>
                      <li class="figureBottom__item">データを確認した後<br>どの詳細機能で<br>対処したいのか</li>
                      <li class="figureBottom__item">詳細機能の中において、<br>処理目的は何か</li>
                    </ul>
                    <div class="figureBottom__arrow icon-plus"></div>
                    <div class="figureBottom__text">
                      <p>現場見学など、<br class="sp">実際の現状運用を観察した情報</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- #cases -->
            <section id="cases" class="cases l-section js-target">
              <div class="cases__inner">
                <div class="cases__heading">
                  <h2 class="sub__contents--title"><span class="font-mincho">業務システムUI/UX改善事例</span></h2>
                  <p class="sub__contents--desc">
                    エイ・エヌ・エスのシステム構築において、お客様の業務に関するユーザーニーズを洗い出し、それをシステムに反映するために、2つのポイントに焦点を当てて設計を行います。ユーザーの視点に立ち、ユーザーの気持ちや立場を考慮しながら、お客様と協力して一連のユーザーニーズの進化を整理し、設計を行います。このアプローチは、”システム主体設計志向”から”ユーザー主体設計志向”に方針を転換し、使いやすく、優れたシステムの構築を実現します。</p>
                </div>
                <div class="cases__cards">
                  <ul class="cases__cards--list">
                    <li class="cases__cards--item ">
                      <h3 class="cases__cards--title"><span class="title-obi">共通のメニュー画面から、ユーザー毎のメニュー画面へ</span></h3>
                      <div class="cases__cards--itemIn">
                        <div class="cases__cards--itemBox itemBox _before">
                          <h3 class="itemBox__title"><span class="c-color-blue font-robot">Before</span></h3>
                          <div class="itemBox__img"><img src="<?= $site_root; ?>assets/img/usability/cases_before.jpg" alt="Before"></div>
                          <p class="itemBox__desc">
                            自分には必要のない機能の中からボタンを選択し、各機能に入って要件を確認するような画面
                          </p>
                        </div>
                        <div class="itemBox__arrow"><span class="icon-arrow3"></span></div>
                        <div class="cases__cards--itemBox itemBox _after">
                          <h3 class="itemBox__title"><span class="c-color-orange font-robot">After</span></h3>
                          <div class="itemBox__img"><img src="<?= $site_root; ?>assets/img/usability/cases_after.jpg" alt="After"></div>
                          <p class="itemBox__desc">
                            エイ・エヌ・エスのシステムでは、ダッシュボードを採用し、ユーザー毎に見たい情報を表示。
                            <span class="c-color-orange">必要な情報だけを見せることで使い心地の良さを実現</span>。
                          </p>
                        </div>
                      </div>
                    </li>
                    <!--cases__cards--item-->
                    <li class="cases__cards--item ">
                      <h3 class="cases__cards--title"><span class="title-obi">必要な情報だけを提供する詳細画面</span></h3>
                      <div class="cases__cards--itemIn">
                        <div class="cases__cards--itemBox itemBox _before">
                          <h3 class="itemBox__title"><span class="c-color-blue font-robot">Before</span></h3>
                          <div class="itemBox__img"><img src="<?= $site_root; ?>assets/img/usability/cases_before.jpg" alt="Before"></div>
                          <p class="itemBox__desc">
                            自分には必要のない機能の中からボタンを選択し、各機能に入って要件を確認するような画面
                          </p>
                        </div>
                        <div class="itemBox__arrow"><span class="icon-arrow3"></span></div>
                        <div class="cases__cards--itemBox itemBox _after">
                          <h3 class="itemBox__title"><span class="c-color-orange font-robot">After</span></h3>
                          <div class="itemBox__img"><img src="<?= $site_root; ?>assets/img/usability/cases_after.jpg" alt="After"></div>
                          <p class="itemBox__desc">
                            エイ・エヌ・エスの詳細機能では、処理の目的や対処法を確認し、運用しやすい遷移を検討する等、<span class="c-color-orange">ユーザーのニーズを先読みした設計に</span>。
                          </p>
                        </div>
                      </div>
                    </li>
                    <!--cases__cards--item-->
                  </ul>
                </div>
              </div>
            </section>

            <!-- #uiux -->
            <section id="uiux" class="uiux js-target">
              <div class="l-section">
                <h2 class="sub__contents--title"><span class="font-mincho">モックアップアプローチによる効率的なシステム開発</span></h2>
                <p class="sub__contents--desc">
                  エイ・エヌ・エスのシステム開発プロセスでは、要件定義の段階から動作可能なモックアップを提供することにより、プロジェクトの早い段階から実際にシステムがどのように動作するかを確認することができます。
                </p>
              </div>
              <div class="uiux__img p-over-img"><img src="<?= $site_root; ?>assets/img/ittrust/uiux.jpg" alt="使い心地を追求したUI/UXデザイン"></div>
              <div class="uiux__prosess l-section">
                <h3 class="sub__contents--subtitle"><span>エイ・エヌ・エスのシステム開発プロセス</span></h3>
                <div class="uiux__prosess--img"><img src="<?= $site_root; ?>assets/img/ittrust/uiux_prosess.jpg" alt=""></div>
                <div class="uiux__prosess--arrow"><span></span></div>
                <div class="uiux__prosess--result">
                  <p>システムがどのように動作できるかの<br class="sp">「見える化」によって、<br>
                    誤解やコミュニケーションの不明確さを<br class="sp">排除し、進行中の作業における<br>
                    手戻りや漏れを効果的に防止できます。</p>
                </div>
              </div>
              <div class="uiux__mockup l-section">
                <h3 class="sub__contents--subtitle"><span>モックアップの作成とは？</span></h3>
                <p class="sub__contents--desc">
                  要件定義の段階で実際に操作感を確認できるモックアップを作成します。<br>
                  <span class="c-text-border">
                    開発・導入前にシステムのデザイン、操作感を画面上で確認できるため、認識の相違なく、システム導入を進めることができます。
                  </span>
                </p>
                <dl class="uiux__mockup--list">
                  <div class="uiux__mockup--item">
                    <dt class="uiux__mockup--dt">定期的なお打合せ</dt>
                    <dt class="uiux__mockup--dd">
                      <span>目的</span>
                      ・認識の相違がないかを確認<br>
                      ・改良・改善点の共有
                    </dt>
                    <img src="<?= $site_root; ?>assets/img/usability/mockup_1.jpg" alt="モックアップ画面を作成">
                  </div>
                  <div class="uiux__mockup--arrows"><span class="icon-arrows"></span></div>
                  <div class="uiux__mockup--item">
                    <dt class="uiux__mockup--dt">モックアップ画面を作成</dt>
                    <dt class="uiux__mockup--dd">
                      <span>目的</span>
                      ・デザインの確認<br>
                      ・操作感の確認
                    </dt>
                    <img src="<?= $site_root; ?>assets/img/usability/mockup_2.jpg" alt="モックアップ画面を作成">
                  </div>
                </dl>
                <div class="uiux__mockup--arrow"><span class="icon-arrow3"></span></div>
                <div class="uiux__mockup--result"><span class="c-color-orange">認識の相違なく、システム導入が可能</span></div>
              </div>
              <div class="uiux__point l-section">
                <h3 class="sub__contents--subtitle"><span>モックアップ作成のポイント</span></h3>
                <p class="sub__contents--desc">
                  要件定義の段階で実際に操作感を確認できるモックアップを作成します。<br>
                  <span class="c-text-border">
                    開発・導入前にシステムのデザイン、操作感を画面上で確認できるため、認識の相違なく、システム導入を進めることができます。
                  </span>
                </p>
                <div class="uiux__point--cards">
                  <dl class="uiux__point--cards--list">
                    <div class="uiux__point--cards--item">
                      <div class="uiux__point--cards--img"><img src="<?= $site_root; ?>assets/img/usability/uiux_point_1.jpg" alt="関連業務の特性と全体像を掴み、効率と使いやすさを両立させる"></div>
                      <div class="uiux__point--cards--contents">
                        <dt class="uiux__point--cards--dt" data-num="#01">関連業務の特性と全体像を掴み<br>効率と使いやすさを両立させる</dt>
                        <dd class="uiux__point--cards--dd">
                          業務システムの画面設計では、業務内容やプロセスを正確に理解しないと、適切なデザインが難しくなり、非効率や機能の誤った使用が発生する可能性があります。私たちは業務を徹底的に理解し、プロセスを可視化し、現行システムを操作して深めた上で、業務システムの画面設計に取り組みます。
                          デザインにおいては見た目だけでなく、業務効率化を重視し、最終的にはお客様の経営課題を解決することを目指しています。
                        </dd>
                      </div>
                    </div>
                    <div class="uiux__point--cards--item _reverse">
                      <div class="uiux__point--cards--img"><img src="<?= $site_root; ?>assets/img/usability/uiux_point_2.jpg" alt="複雑な機能を持つ業務システムに、体験の一貫性を持たせる"></div>
                      <div class="uiux__point--cards--contents">
                        <dt class="uiux__point--cards--dt" data-num="#02">複雑な機能を持つ業務システムに<br>体験の一貫性を持たせる</dt>
                        <dd class="uiux__point--cards--dd">
                          多機能な業務システムでは、複雑な機能ナビゲーションがユーザーにとって操作を難しくし、潜在的な機能見落としが起こります。これを解決するために、プロジェクト初期に業務に合わせた画面遷移と機能配置のガイドラインを策定し、システム全体で一貫性を確保します。これらのガイドラインは文書化され、将来の改善や拡張にも適用可能です。 </dd>
                      </div>
                    </div>
                    <div class="uiux__point--cards--item">
                      <div class="uiux__point--cards--img"><img src="<?= $site_root; ?>assets/img/usability/uiux_point_3.jpg" alt="利用者視点からの業務システム設計"></div>
                      <div class="uiux__point--cards--contents">
                        <dt class="uiux__point--cards--dt" data-num="#03">利用者視点からの業務システム設計</dt>
                        <dd class="uiux__point--cards--dd">
                          開発者主導の業務システム設計では、時に利用者の視点が欠如し、結果として業務効率が低下することがあります。そこで、私たちはユーザーの視点を重視し、詳細なヒアリングやユーザーテスト、インタビューなどを通じて、ユーザーが直面する課題や頻繁に行う業務に焦点を当てます。このアプローチにより、ユーザーの実際の体験や心理に基づいてUIを設計し、ユーザーのニーズを正確に把握し、システムの使いやすさと効率性を向上させることができます。
                        </dd>
                      </div>
                    </div>
                  </dl>
                </div>
              </div>
            </section>

            <!-- #column -->
            <section id="column" class="subColumn js-target">
              <div class="subColumn__inner l-section">
                <h2 class="serviceTop__mainTitle sub__contents--title"><span class="font-mincho">UI/UXデザインに関するコラム</span></h2>
                <ul class="subColumn__list">
                  <li class="subColumn__card">
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
                  <li class="subColumn__card">
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
                  <li class="subColumn__card">
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
                  <li class="subColumn__card">
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
              </div>
              <div class="subColumn__linkButton common__linkButton"><a href="<?= $site_root; ?>column"><span class="font-mincho">全てのコラムを見る</span></a></div>
            </section>

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
