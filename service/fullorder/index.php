<?php
$site_root = '../../';
$cn = 'service-fullorder';
$page_title = "フルオーダーシステム開発";
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

<body id="<?= $cn ?>">
  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="contents-fullorder" class="sub__container serviceRow">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>service"><span>サービス一覧</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="FullOrder">FullOrder</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/fullorder/heading.jpg?<?= time() ?>" alt="<?= $page_title ?>"></div>
      </section><!-- sub__heading -->

      <div class="l-block fullorder">
        <div class="l-column">
          <div class="sub__side l-column__sub">
            <div class="sub__side--in js-ani-fade">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#onayami" class="js-anchor"><span>このような課題はありませんか？</span></a></li>
                <li class="sub__side--item js-nav"><a href="#service" class="js-anchor"><span>サービス紹介</span></a></li>
                <li class="sub__side--item js-nav"><a href="#price" class="js-anchor"><span>料金プラン</span></a></li>
                <li class="sub__side--item js-nav"><a href="#support" class="js-anchor"><span>サポート体制</span></a></li>
                <li class="sub__side--item js-nav"><a href="#develop" class="js-anchor"><span>開発体制</span></a></li>
                <li class="sub__side--item js-nav"><a href="#flow" class="js-anchor"><span>開発フロー</span></a></li>
                <li class="sub__side--item js-nav"><a href="#case" class="js-anchor"><span>開発事例</span></a></li>
                <li class="sub__side--item js-nav"><a href="#column" class="js-anchor"><span>コラム</span></a></li>
              </ul>
              <div class="sub__side--inquiry pc">
                <a href="<?= $site_root; ?>inquiry"><span class="icon-mail">お問合せ</span></a>
              </div>
            </div>
          </div>
          <!--./l-column__sub-->

          <div class="l-column__main">
            <!-- #onayami -->
            <section id="onayami" class="onayami l-section js-target">
              <div class="onayami__inner js-ani-fade">
                <h2 class="onayami__heading js-ani-fade">このような課題はありませんか？</h2>
                <ul class="onayami__list">
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>中小企業向けのシステムを、オーダーメイドで開発してくれる会社がない。</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>パッケージシステムでは自社の運用に合わず、管理できる機能がない。</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>売上の基礎をつくる自社独自の業務に合わせたシステムを開発したい。</li>
                </ul>
              </div>
              <div class="onayami__arrow js-ani-fade"><span></span></div>
              <div class="onayami__result js-ani-fade">
                <p>”システム”ではなく、<br>確実な導入効果とメリットをご提供します</p>
              </div>
            </section>
            <!-- ./onayami -->

            <!-- #service -->
            <section id="service" class="service js-target">
              <div class="l-section">
                <div class="service__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">サービス紹介</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    <span class="desc-large">DXの推進を実現させるオーダーメイドのシステム開発</span>
                    基幹となる業務システムを、フルオーダーメイドで構築。業務に合わせたシステムを導入します。
                    経験豊富なプロジェクトマネージャーがお客様の業務内容を理解した上で、操作性の良い最適なシステムを構築します。
                  </p>
                </div>
              </div>
              <div class="service__img p-over-img js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/fullorder/sercive_main.jpg" alt=""></div>
              <div class="l-section">
                <div class="service__cards common__cards">
                  <dl class="common__cards--list">
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#01">開発から保守まで一貫して対応</dt>
                      <dd class="common__cards--dd">
                        <p>どんな課題をシステムで解決したいか、また、システム導入で実現したいことを丁寧にヒアリングします。要件定義、設計、開発の工程はもちろんのこと、システム導入後の保守まで長期的にサポートします。データセンターでの管理・運用、遠隔地バックアップも実施。実績・サポートともに、安心してご利用頂けます。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#02">使い心地を追求したUI/UXデザイン</dt>
                      <dd class="common__cards--dd">
                        <p>使い心地にこだわった、誰でも簡単に操作できるストレスのないシステムを構築。<br>
                          ユーザー主体設計志向のもと利用品質の良さを追及し、UI/UXの優れたシステムをご提供します。</p>
                      </dd>
                      <ul class="common__cards--linkList">
                        <li class="common__cards--link"><a href="<?= $site_root; ?>uiux" class="common__borderLink"><span class="icon-arrow">UI/UX</span></a></li>
                      </ul>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#03">リスクを抑えた料金形態</dt>
                      <dd class="common__cards--dd">
                        <p>初期コスト０円システム利用料として月額での支払いが可能な料金プラン「IT-Trust」は、初期投資を抑えたシステム開発が実現できます。一般的な一括受託開発と合わせて、自社に合った方法で導入が検討できます。</p>
                      </dd>
                      <ul class="common__cards--linkList">
                        <li class="common__cards--link"><a href="<?= $site_root; ?>#price" class="common__borderLink"><span class="icon-arrow">料金プラン</span></a></li>
                      </ul>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#04">創業35年 安心の実績</dt>
                      <dd class="common__cards--dd">
                        <p>IT業界にて業績35年以上、業務システム開発やデータベース構築の実績で蓄積した技術を活かし、オーダーメイドのシステム開発で企業様の効率化を支援しております。</p>
                      </dd>
                      <ul class="common__cards--linkList">
                        <li class="common__cards--link"><a href="<?= $site_root; ?>case" class="common__borderLink"><span class="icon-arrow">開発事例</span></a></li>
                      </ul>
                    </div><!-- ./common__cards--item -->
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./service -->

            <!-- #price -->
            <section id="price" class="price l-section js-target">
              <div class="price__inner">
                <div class="price__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">料金プラン</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    初期コスト０円/月額利用料でシステム開発が可能な料金プランを選択できます。<br />一般的な一括受託でも大丈夫です。ご要望・ご状況に合わせた料金提案が可能です。
                  </p>
                </div>
                <div class="price__cards">
                  <ul class="price__cards--list">
                    <li class="price__cards--item js-ani-fade">
                      <h3 class="price__cards--title">
                        <span class="title-obi">初期投資を抑えたいなら</span>
                        <span class="title-small font-mincho">初期費用０円/月額制<br>オーダーメイドのシステム開発</span>
                        <span class="title-large font-mincho">「IT-Trust」</span>
                      </h3>
                      <div class="price__cards--img"><img src="<?= $site_root; ?>assets/img/service/fullorder/service_price_it.jpg" alt=""></div>
                      <div class="price__cards--desc">
                        <p>
                          ５年契約を基本とし、システム開発にかかる費用をシステム利用料として月額でお支払いいただくことで初期投資を抑えることができる料金プランです。システム保守を含めた月額のご提案をしています。
                        </p>
                      </div>
                    </li><!-- ./price__cards--item -->
                    <li class="price__cards--item js-ani-fade">
                      <h3 class="price__cards--title">
                        <span class="title-obi">一括受託で開発したいなら</span>
                        <span class="title-small font-mincho">一括受託で<br>オーダーメイドのシステム開発</span>
                        <span class="title-large font-mincho">「オリジナルクラウド」</span>
                      </h3>
                      <div class="price__cards--img"><img src="<?= $site_root; ?>assets/img/service/fullorder/service_price_oc.jpg" alt=""></div>
                      <div class="price__cards--desc">
                        <p>
                          一括受託開発で、お客様所有のシステムを構築します。別途、月額でのシステム保守やご要望に応じてインフラ保守もご提案しています。
                        </p>
                      </div>
                    </li><!-- ./price__cards--item -->
                  </ul>
                </div>
                <div class="price__caution js-ani-fade">
                  <p>※ネットワーク回線費用等は、お客様負担。<br>
                    ※IT-Trustの場合、システムの所有権は弊社エイ・エヌ・エスが保持することとなり、お客様はシステム利用料をお支払いいただくことでシステムを独占的に利用することができます。</p>
                </div>
              </div>
            </section>
            <!-- ./price -->

            <!-- #support -->
            <section id="support" class="support l-section js-target">
              <div class="support__inner">
                <div class="support__heading">
                  <h2 class="sub__contents--title  js-ani-fade"><span class="font-mincho">サポート体制</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    システム導入後も専任の保守担当者がしっかりサポートし、システム保守を実施します。<br>
                    長期的に安心してお任せいただけるサービスと体制をご提供します。 </p>
                </div>
                <div class="support__cards">
                  <ul class="support__cards--list">
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title"><span class="title-obi">システム保守</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc js-ani-fade">
                          システム開発の担当者がそのまま専任のシステム保守担当者を担います。<br>
                          日常のトラブル・相談に対応し、お客様のデータを万全なセキュリティ体制で保守します。<br>
                          保守・運用により、お客様が本業に専念できるよう、ストレスなくシステムを利用できる環境を提供します。
                        </p>
                        <div class="support__cards--map js-ani-fade">
                          <div class="mapcard__wrap js-ani-fade">
                            <div class="mapcard __harf">
                              <div class="mapcard__part"><span>お客様</span></div>
                              <div class="mapcard__title"><span>機能の修正・追加のご要望</span></div>
                              <ul class="mapcard__onayami">
                                <li class="mapcard__onayami--item"><span class="icon-moya">エラー表示が出た</span></li>
                                <li class="mapcard__onayami--item"><span class="icon-moya">操作方法が分からない</span></li>
                                <li class="mapcard__onayami--item"><span class="icon-moya">追加で機能を実装してほしい</span></li>
                              </ul>
                            </div>
                            <div class="mapcard__arrow _align icon-arrows">
                            </div>
                            <div class="mapcard __harf">
                              <div class="mapcard__part"><span>エイ・エヌ・エス</span></div>
                              <div class="mapcard__title"><span>保守担当者２名以上で対応</span></div>
                              <div class="mapcard__answer">
                                <img src="<?= $site_root; ?>assets/img/service/fullorder/service_support_ans.jpg" alt="">
                                <p>メール・お電話・FAX<br>いずれもご対応いたします</p>
                              </div>
                            </div>
                          </div>
                          <div class="mapcard__arrow _vetical icon-arrows">
                          </div>
                          <div class="mapcard __full js-ani-fade">
                            <div class="mapcard__part"><span>データセンター</span></div>
                            <ul class="mapcard__contents">
                              <li class="mapcard__contents--item">
                                <p class="mapcard__contents--part"><span>業務アプリケーション</span></p>
                                <p class="mapcard__contents--text"><span>システムの運用</span></p>
                              </li>
                              <li class="mapcard__contents--item">
                                <p class="mapcard__contents--part"><span>サーバー周辺機器</span></p>
                                <p class="mapcard__contents--text"><span>AP・OS・ミドルウェア</span></p>
                              </li>
                              <li class="mapcard__contents--item">
                                <p class="mapcard__contents--text">
                                  <span>
                                    ・データ調査、リカバリー<br>
                                    ・システム運用<br>
                                    ・バックアップなど
                                  </span>
                                </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title js-ani-fade"><span class="title-obi">インフラ管理</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc js-ani-fade">
                          インフラサービス、回線保守サービスに対応し、データバックアップ体制も万全です。<br>
                          インフラ管理代行サービスでは、お客様に代わりサーバの運用支援、トラブル発生時の復旧対応を実施致します。<br>
                          サーバ監視サービスでは、当社よりお客様のサーバ監視を行います。
                        </p>
                        <dl class="support__cards--tagsdl">
                          <div class="support__cards--tags js-ani-fade">
                            <dt class="support__cards--tagdt js-ani-fade">インフラ管理代行サービス</dt>
                            <dd class="support__cards--tagdd js-ani-fade">
                              <ul class="support__cards--tagList">
                                <li class="support__cards--tagItem"><span>障害情報受付</span></li>
                                <li class="support__cards--tagItem"><span>ネットワーク情報の管理</span></li>
                                <li class="support__cards--tagItem"><span>ハードウェア情報の管理</span></li>
                                <li class="support__cards--tagItem"><span>ADドメイン</span></li>
                                <li class="support__cards--tagItem"><span>サーバによる管理</span></li>
                                <li class="support__cards--tagItem"><span>ソフトウェア情報の管理</span></li>
                              </ul>
                            </dd>
                          </div>
                          <div class="support__cards--tags js-ani-fade">
                            <dt class="support__cards--tagdt js-ani-fade">サーバ監視サービス</dt>
                            <dd class="support__cards--tagdd js-ani-fade">
                              <ul class="support__cards--tagList">
                                <li class="support__cards--tagItem"><span>Png監視</span></li>
                                <li class="support__cards--tagItem"><span>ログ監視</span></li>
                                <li class="support__cards--tagItem"><span>リソース監視</span></li>
                              </ul>
                            </dd>
                          </div>
                        </dl>
                      </div>
                    </li>
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title"><span class="title-obi">サービスに合わせた保守体制</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc js-ani-fade">
                          サービスごとに合わせた保守体制をご提案いたします。<br>詳しくは各サービスページをご確認ください。
                        </p>
                        <div class="support__cards--links js-ani-fade">
                          <ul class="support__cards--linkList">
                            <li class="support__cards--link common__cards--link"><a href="#support" class="js-anchor common__borderLink"><span class="icon-arrow">フルオーダーシステム開発の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="<?= $site_root; ?>service/renewal#suppurt" class="common__borderLink"><span class="icon-arrow">システム再構築の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="<?= $site_root; ?>service/maintenance#suppurt" class="common__borderLink"><span class="icon-arrow">システム保守引継ぎの保守体制</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <!-- ./support -->

            <!-- #develop -->
            <section id="develop" class="develop l-section js-target">
              <div class="develop__inner">
                <div class="develop__heading">
                  <h2 class="sub__contents--title  js-ani-fade"><span class="font-mincho">開発体制</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    業績35年以上、約350社のシステム構築の実績。<br>システム導入後も専任の保守担当者がしっかりサポートし、システム保守まで安心してお任せいただける体制をご提供いたします。
                  </p>
                </div>
              </div>

            </section>
            <!-- ./develop -->

            <!-- #flow -->
            <section id="flow" class="flow js-target">
              <div class="l-section">
                <div class="flow__heading">
                  <h2 class="sub__contents--title  js-ani-fade"><span class="font-mincho">開発フロー</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    業績35年以上、約350社のシステム構築の実績。システム導入後も専任の保守担当者がしっかりサポートし、システム保守まで安心してお任せいただける体制をご提供いたします。
                  </p>
                </div>
              </div>
              <div class="flow__img p-over-img js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/fullorder/flow_main.jpg" alt=""></div>
              <div class="l-section">
                <dl class="flow__list">
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="01"></span>問い合わせ・ご相談</dt>
                    <dt class="flow__item--dd">お問合せフォームよりお問い合わせください。<br>内容をお伺いし、サービスのご説明とヒアリングをさせて頂く日時を調整します。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="02"></span>ヒアリング・ご提案</dt>
                    <dt class="flow__item--dd">提案内容や予算に問題がなければ、契約締結とさせていだたきます。金額やスケジュールは、要件定義・設計が終了後、変更があれば覚書にて両社で合意します。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="03"></span>ご契約・案件開始</dt>
                    <dt class="flow__item--dd">内容、予算に問題がないようでしたら、契約締結させて頂きます。<br>金額やスケジュールは、要件定義、設計が終了後に調整可能です。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="04"></span>要件定義</dt>
                    <dt class="flow__item--dd">ご要望のヒアリングや課題の改善方法等についての打ち合わせを週1～2回、2時間前後行います。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="05"></span>モックアップ・設計</dt>
                    <dt class="flow__item--dd">お客様からのご意見・ご要望を動く画面(モックアップ)に反映させ、要件定義→設計を繰り返します。検収の前に導入するシステムの画面が目で見える状態で確認・調整できます。ご納得いただいた段階で、正確なスケジュールや金額が確定します。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="06"></span>開発・テスト</dt>
                    <dt class="flow__item--dd">当社にて設計書から必要機能の開発を行い、ご要望頂いた内容が実現できているかテストをします。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="07"></span>検収</dt>
                    <dt class="flow__item--dd">お客様で受入テストを実施して頂き、検収をして頂きます。<br>
                      要件定義・設計の段階でシステムの画面を確認頂いていますので、お客様の検収負担は軽減されます。軽微なご要望は修正をいたします。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="08"></span>導入</dt>
                    <dt class="flow__item--dd">システム全体の動作確認や導入時の初期設定、 移行作業などを実施します。</dt>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="09"></span>保守・運用</dt>
                    <dt class="flow__item--dd">システムの安定運用のため、監視、管理、サポートの支援等の作業を実施。システム運用後も、より良いシステムとするための状況分析や提案を致します。</dt>
                  </div>
                </dl>
              </div>
            </section>
            <!-- ./flow -->

            <!-- #case -->
            <section id="case" class="subCase l-section js-target">
              <div class="subCase__inner">
                <h2 class="serviceTop__mainTitle sub__contents--title  js-ani-fade"><span class="font-mincho">フルオーダーシステムの開発事例</span></h2>
                <div class="subCase__cardList js-ani-fade">
                  <ul class="subCase__cardList--list js-ani-fade">
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag">
                                <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                                <li class="tag__item"><span class="">業種：〇〇</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag">
                                <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                                <li class="tag__item"><span class="">業種：〇〇</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag">
                                <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                                <li class="tag__item"><span class="">業種：〇〇</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag">
                                <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                                <li class="tag__item"><span class="">業種：〇〇</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag">
                                <li class="tag__item"><span class="icon-tag">IT-Trust</span></li>
                                <li class="tag__item"><span class="">業種：〇〇</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
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
              <div class="subColumn__linkButton common__linkButton js-ani-fade"><a href="<?= $site_root; ?>case"><span class="font-mincho">全ての事例を見る</span></a></div>
            </section><!-- ./subCase -->

            <!-- #subColumn -->
            <section id="column" class="subColumn l-section js-target">
              <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">フルオーダーシステムに関するコラム</span></h2>
              <div class="subColumn__inner js-ani-fade">
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
            </section><!-- ./subColumn -->
          </div>

        </div><!-- ./l-column -->
      </div><!-- ./l-block -->

    </main><!-- ./sub__container -->

    <!-- ▼ inc/contact -->
    <?php include($site_root . "_inc/contact.php"); ?>

    <!-- ▼ inc/footer -->
    <?php include($site_root . "_inc/footer.php"); ?>

  </div>
  <!-- END #fullWrap -->

</body>

</html>
