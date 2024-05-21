<?php
$site_root = '../../';
$cn = 'service-maintenance';
$page_title = "システム保守引継ぎ";
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

    <main id="contents-maintenance" class="sub__container serviceRow">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href=""><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span>サービス一覧</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span class="_current">システム保守引継ぎ</span></a></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Maintenance">Maintenance</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/maintenance/heading.jpg" alt="システム保守引継ぎ"></div>
      </section><!-- sub__heading -->

      <div class="l-block">
        <div class="l-column">

          <div class="sub__side l-column__sub">
            <div class="sub__side--in js-ani-fade">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#onayami" class="js-anchor"><span>このような課題はありませんか？</span></a></li>
                <li class="sub__side--item js-nav"><a href="#service" class="js-anchor"><span>サービス紹介</span></a></li>
                <li class="sub__side--item js-nav"><a href="#features" class="js-anchor"><span>ご契約後、最短1ヶ月～保守実施が可能</span></a></li>
                <li class="sub__side--item js-nav"><a href="#support" class="js-anchor"><span>サービス紹介</span></a></li>
                <li class="sub__side--item js-nav"><a href="#price" class="js-anchor"><span>料金プラン</span></a></li>
                <li class="sub__side--item js-nav"><a href="#flow" class="js-anchor"><span>開発フロー</span></a></li>
                <li class="sub__side--item js-nav"><a href="#case" class="js-anchor"><span>事例</span></a></li>
                <li class="sub__side--item js-nav"><a href="#column" class="js-anchor"><span>コラム</span></a></li>
              </ul>
            </div>
          </div>

          <div class="l-column__main maintenance">

            <!-- #onayami -->
            <section id="onayami" class="onayami l-section js-target">
              <div class="onayami__inner js-ani-fade">
                <h2 class="onayami__heading js-ani-fade">このような課題はありませんか？</h2>
                <ul class="onayami__list">
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>現在のシステム会社の保守対応が悪い、保守スピードが遅く運用に耐えられない</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>現在のシステム会社で担当者確保がむずかしくなり、保守料が高額になった</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>社内でシステムを維持管理(保守)する人材がいない</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>システムやサーバー等のインフラ管理の安全性において不安を感じている</li>
                </ul>
              </div>
              <div class="onayami__arrow js-ani-fade"><span></span></div>
              <div class="onayami__result js-ani-fade">
                <p>こんなお悩みは、エイ・エヌ・エスの<br>システム保守引継ぎサービスにお問い合わせください</p>
              </div>
            </section>
            <!-- ./onayami -->

            <!-- #service -->
            <section id="service" class="service l-section js-target">
              <div class="service__inner">
                <div class="service__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">サービス紹介</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    35年以上の経験で培った業務知識と技術力を活かし、現行システムの解析を通じて保守・メンテナンスサービスを提供しています。専属エンジニアが迅速で柔軟な対応をし、お客様のシステムを確実にサポート。これにより、お客様は本業に専念でき、安心してシステムを運用できます。
                  </p>
                </div>
              </div>
            </section>
            <!-- ./service -->

            <!-- #strong -->
            <section id="strong" class="strong l-section js-target">
              <div class="strong__inner">
                <h2 class="strong__title js-ani-fade"><span class="font-mincho">エイ・エヌ・エスの強み</span></h2>
                <div class="strong__circle">
                  <dl class="strong__circle--list">
                    <div class="strong__circle--item circleItem --circle-1 js-ani-fade">
                      <div class="strong__circle--item--in">
                        <div class="circleItem__in">
                          <dt class="circleItem__title">業績35年以上の実績で<br>培った技術力</dt>
                          <dd class="circleItem__text">業績35年以上の実績で培った<br>技術力開発実績を活かし、<br>しっかり保守できるよう<br>システムを解析します。</dd>
                        </div>
                      </div>
                    </div>
                    <div class="strong__circle--item circleItem --circle-2 js-ani-fade">
                      <div class="strong__circle--item--in">
                        <div class="circleItem__in">
                          <dt class="circleItem__title">お客様が本業に専念できる<br>サポート体制</dt>
                          <dd class="circleItem__text">お客様に安心して<br>本業に専念頂ける体制を組んで<br>保守対応にあたります。</dd>
                        </div>
                      </div>
                    </div>
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./strong -->

            <!-- #features -->
            <section id="features" class="features js-target">
              <div class="features__inner">
                <div class="features__heading l-section">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">ご契約後、最短1ヶ月～保守実施が可能</span></h2>
                </div>
                <div class="features__img p-over-img js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/maintenance/features_img.jpg" alt="開発フロー"></div>
                <div class="l-section">
                  <div class="features__desc js-ani-fade">
                    <p>
                      システム保守引継ぎ・引き継ぎには必要な分析・解析工程。保守実施までに、システム規模によっては数か月を要します。エイ・エヌ・エスの引継ぎは、初期解析と保守実施を平行して対応することで、最短期間の保守実施を実現します。(※但し、解析期間中は特約事項あり)<br><br>
                      <span class="c-text-border">保守開始までの最短期間は、システムの規模によって異なります。</span>まずはお気軽にお問い合わせ・ご相談下さい。
                    </p>
                    <div class="features__desc--comparison js-ani-fade">
                      <img src="<?= $site_root; ?>assets/img/service/maintenance/features_comparison.jpg" alt="">
                    </div>
                  </div>
                  <div class="common__caution __onbg js-ani-fade">
                    <p class="common__caution--title">※特約事項※</p>
                    <ul class="common__caution--text">
                      <li>解析中の保守依頼は調査・解析作業が必要となる為、3～14日営業日(エイ・エヌ・エス)の対応期間を頂く場合があります。(単純、軽微且つ他機能に影響の少ない対応については可能な限り迅速に対応します。)</li>
                      <li>調査・解析作業を効率的に行う為、内容等々について詳細にご質問させて頂く場合がございます。</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <!-- ./features -->

            <!-- #support -->
            <section id="support" class="support l-section js-target">
              <div class="support__inner">
                <div class="support__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">サービス紹介</span></h2>
                </div>
                <div class="support__cards">
                  <ul class="support__cards--list">
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title"><span class="title-obi">システム解析</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          お客様が現在利用している業務システムの解析を行った後、保守・メンテナンスを継続的にご提供いたします。契約に基づき必要な解析を行います。仕様書等ドキュメントが無くてもソースの解析を行います。
                        </p>
                      </div>
                    </li>
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title"><span class="title-obi">システム運用</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          専任のスタッフが、日常のトラブル・相談に対応し、お客様のデータを万全なセキュリティ体制で保守します。保守・運用により、お客様が本業に専念できるよう、ストレスなくシステムを利用できる環境を提供します。
                        </p>
                        <div class="support__cards--map">
                          <div class="mapcard__wrap">
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
                          <div class="mapcard __full">
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
                      <h3 class="support__cards--title"><span class="title-obi">追加開発・改修</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          現行のシステムに追加要件はあれば、追加開発・改修にも対応し、将来的なリプレースの提案等も行います。貴社のシステムをよく理解した上で、業務効率化が実現するための工夫と提案を致します。
                        </p>
                        <dl class="support__cards--tagsdl">
                          <div class="support__cards--tags js-ani-fade">
                            <dt class="support__cards--tagdt">追加開発事例</dt>
                            <dd class="support__cards--tagdd js-ani-fade">
                              <ul class="support__cards--tagList">
                                <li class="support__cards--tagItem __harf"><span>データ抽出</span>現行のシステムでは抽出が行えないデータを、抽出するための追加開発を行った</li>
                                <li class="support__cards--tagItem __harf"><span>機能変更</span>軽微な機能変更を行った</li>
                                <li class="support__cards--tagItem __harf"><span>項目・チェックの追加</span>操作を誤らないようにする為、アラートを表示しチェックを行うように追加開発を行った</li>
                                <li class="support__cards--tagItem __harf"><span>消費税対応</span>消費税改定に伴い改修を行った</li>
                              </ul>
                            </dd>
                          </div>
                        </dl>
                      </div>
                    </li>
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title js-ani-fade"><span class="title-obi">インフラ管理</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc js-ani-fade">
                          インフラサービス、回線保守サービスに対応し、データバックアップ体制も万全です。<br>
                          インフラ管理代行サービスでは、お客様に代わりサーバの運用支援、トラブル発生時の復旧対応を実施致します。サーバ監視サービスでは、当社よりお客様のサーバ監視を行います。
                        </p>
                        <dl class="support__cards--tagsdl">
                          <div class="support__cards--tags js-ani-fade">
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
                            <dd class="support__cards--tagdd">
                              <ul class="support__cards--tagList js-ani-fade">
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
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
                            <dd class="support__cards--tagdd">
                              <ul class="support__cards--tagList js-ani-fade">
                                <li class="support__cards--tagItem"><span>障害情報受付</span></li>
                                <li class="support__cards--tagItem"><span>ネットワーク情報の管理</span></li>
                                <li class="support__cards--tagItem"><span>ハードウェア情報の管理</span></li>
                                <li class="support__cards--tagItem"><span>ADドメイン</span></li>
                                <li class="support__cards--tagItem"><span>サーバによる管理</span></li>
                                <li class="support__cards--tagItem"><span>ソフトウェア情報の管理</span></li>
                              </ul>
                            </dd>
                          </div>
                        </dl>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <!-- ./support -->

            <!-- #price -->
            <section id="price" class="price l-section js-target">
              <div class="price__inner">
                <div class="price__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">料金プラン</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    お客様が現在利用している業務システムの解析を行った後、保守・メンテナンスを継続的にご提供します。<br>
                    初期コスト0円、月額の保守引継ぎサービス料でシステムの保守引継ぎをします。
                  </p>
                </div>
                <div class="price__cards">
                  <ul class="price__cards--list">
                    <li class="price__cards--item js-ani-fade">
                      <h3 class="price__cards--title">
                        <span>初期費用一括プラン＋月額保守プラン</span>
                      </h3>
                      <p class="price__cards--desc">
                        解析完了後に初期設定費用をご請求、<br>さらに保守開始より月額保守料のみをご請求
                      </p>
                      <dl class="price__cards--detail">
                        <div class="detailItem __harf">
                          <dt class="detailItem__dt"><span>初期費用</span></dt>
                          <dd class="detailItem__dd">
                            <div class="detailItem__dd--top">
                              <p>システム解析料<br>保守環境構築料</p>
                            </div>
                            <div class="detailItem__dd--bottom">
                              <p>システム解析<br>完了後にご請求</p>
                            </div>
                          </dd>
                        </div>
                        <div class="detailItem __harf">
                          <dt class="detailItem__dt"><span>月額保守料</span></dt>
                          <dd class="detailItem__dd">
                            <div class="detailItem__dd--top">
                              <p>システム保守料</p>
                            </div>
                            <div class="detailItem__dd--bottom">
                              <p>保守開始より<br>毎月ご請求</p>
                            </div>
                          </dd>
                        </div>
                        <div class="price__cards--icon"><span class="icon-plus-in-circle"></span></div>
                      </dl>
                      <div class="price__cards--caution">
                        <p>※ご契約期間は1年契約となります。<br>
                          ※2年目以降は1年単位で自動継続となります。</p>
                      </div>
                    </li><!-- ./price__cards--item -->

                    <li class="price__cards--item js-ani-fade">
                      <h3 class="price__cards--title">
                        <span>初期費用＋保守 月額プラン</span>
                      </h3>
                      <p class="price__cards--desc">
                        解析完了後より、初期設定費用を分割、<br>月額保守料と合わせてご請求
                      </p>
                      <dl class="price__cards--detail">
                        <div class="detailItem __full">
                          <dt class="detailItem__dt"><span>初期費用 ＋ 月額保守料</span></dt>
                          <dd class="detailItem__dd">
                            <div class="detailItem__dd--top">
                              <p>システム解析料<br>保守環境構築料</p>
                              <p>システム保守料</p>
                            </div>
                            <div class="detailItem__dd--bottom">
                              <p>保守開始より毎月ご請求</p>
                            </div>
                          </dd>
                        </div>
                      </dl>
                      <div class="price__cards--caution">
                        <p>※保守開始より、2年間契約（3年契約も可）となります。<br>
                          ※３年目は1年単位で自動継続となります。</p>
                      </div>
                    </li><!-- ./price__cards--item -->
                  </ul>
                </div>
                <div class="price__caution js-ani-fade">
                  <p>※基幹システムの規模によって金額が異なる為、専任のエンジニアがヒアリングさせて頂き見積もりを致します。お気軽にご相談ください。<br>
                    ※「初期費用＋月額保守 毎月支払いプラン」の場合、ご契約期間は保守開始から2年契約とさせて頂きます。ご契約期間が2年未満の場合は、「初期費用一括払い＋月額保守プラン」とさせて頂きます。</p>
                </div>
              </div>
            </section>
            <!-- ./price -->

            <!-- #flow -->
            <section id="flow" class="flow js-target">
              <div class="flow__inner">
                <div class="flow__heading l-section">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">開発フロー</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    お問合せから、保守を引継ぐまでの基本的な流れと書く工程について説明します。<br>
                    お客様のご要望に沿って適切な担当者をアサインし、柔軟に対応します。
                  </p>
                </div>
                <div class="flow__img p-over-img  js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/fullorder/flow_main.jpg" alt="開発フロー"></div>
                <div class="l-section">
                  <dl class="flow__list">
                    <div class="flow__item js-ani-fade">
                      <dt class="flow__item--dt"><span class="icon-flow" data-num="01"></span>現行システム・サポート方法の分析</dt>
                      <dd class="flow__item--dd">現行システムの状態や内容、保守実績等の概要を把握し、提案書にまとめます。</dd>
                    </div>
                    <div class="flow__item js-ani-fade">
                      <dt class="flow__item--dt"><span class="icon-flow" data-num="02"></span>提案・契約</dt>
                      <dd class="flow__item--dd">提案内容や予算に問題がなければ、契約締結とさせていだたきます。</dd>
                    </div>
                    <div class="flow__item js-ani-fade">
                      <dt class="flow__item--dt"><span class="icon-flow" data-num="03"></span>事前準備・環境設定</dt>
                      <dd class="flow__item--dd">弊社内に本番の稼働環境と同一のテスト環境を構築します。保守用回線の準備を行い、運用テストを実施します。</dd>
                    </div>
                    <div class="flow__item js-ani-fade">
                      <dt class="flow__item--dt"><span class="icon-flow" data-num="04"></span>システム解析</dt>
                      <dd class="flow__item--dd">保守対応ができる状態まで、専任担当者がシステムのソースコードを解析します。</dd>
                    </div>
                    <div class="flow__item js-ani-fade">
                      <dt class="flow__item--dt"><span class="icon-flow" data-num="05"></span>サービス開始</dt>
                      <dd class="flow__item--dd">保守引継ぎサービスを実施します。</dd>
                    </div>
                  </dl>
                  <div class="common__caution js-ani-fade">
                    <p class="common__caution--title">注記事項</p>
                    <ul class="common__caution--text">
                      <li>保守引継ぎサービスのご契約期間<br>ご契約期間につきましては、1年間契約とさせて頂いております。2年目以降は1年単位で自動継続となります。</li>
                      <li>リモート環境の通信費<br>リモート環境にかかる通信回線費用（初期費用及びランニング費用）につきましては、貴社ご負担となります。</li>
                      <li>保守引継ぎサービスに必要となるハードウェア、ソフトウェア<br>
                        サポートサービスを行う上で必須となるハードウェア、ソフトウェアに掛かる費用につきましては、
                        貴社ご負担となります。</li>
                      <li>お問い合わせ窓口<br>貴社からのお問い合わせにつきましては、予め定められたご担当者様より行って頂くことになります。</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <!-- ./flow -->

            <!-- #case -->
            <section id="case" class="subCase l-section js-target">
              <div class="subCase__inner">
                <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">開発事例</span></h2>
                <div class="subCase__cardList js-ani-fade">
                  <ul class="subCase__cardList--list">
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
                              <ul class="tag icon-tag">
                                <li class="tag__item"><span class="">IT-Trust</span></li>
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
              <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">コラム</span></h2>
              <div class="subColumn__inner">
                <ul class="subColumn__list js-ani-fade">
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
