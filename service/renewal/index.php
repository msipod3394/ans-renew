<?php
$site_root = '../../';
$cn = 'service-renewal';
$page_title = "基幹システム再構築";
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

    <main id="contents-renewal" class="sub__container serviceRow">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href=""><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span>サービス一覧</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span class="_current">基幹システム再構築</span></a></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Renewal">Renewal</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/renewal/heading.jpg" alt="基幹システム再構築"></div>
      </section><!-- sub__heading -->

      <div class="l-block">
        <div class="l-column">

          <div class="sub__side l-column__sub">
            <div class="sub__side--in js-ani-fade">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#onayami" class="js-anchor"><span>このような課題はありませんか？</span></a></li>
                <li class="sub__side--item js-nav"><a href="#service" class="js-anchor"><span>サービス紹介</span></a></li>
                <li class="sub__side--item js-nav"><a href="#features" class="js-anchor"><span>特徴</span></a></li>
                <li class="sub__side--item js-nav"><a href="#support" class="js-anchor"><span>サポート体制</span></a></li>
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

          <div class="l-column__main renewal">

            <!-- #onayami -->
            <section id="onayami" class="onayami l-section js-target">
              <div class="onayami__inner js-ani-fade">
                <h2 class="onayami__heading js-ani-fade">このような課題はありませんか？</h2>
                <ul class="onayami__list">
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>今後、DXを推進するための基幹システム再構築が必要。</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>システムと業務内容にズレが生じたためシステム再構築が必要。</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>長年利用しているシステムであるため、いつ停止してもおかしくない。</li>
                  <li class="onayami__item js-ani-fade"><span class="icon_circle_in_check"></span>基幹システムを再構築したいがイニシャルコストが高すぎる。</li>
                </ul>
              </div>
              <div class="onayami__arrow js-ani-fade"><span></span></div>
              <div class="onayami__result js-ani-fade">
                <p>こんなお悩みは、エイ・エヌ・エスの<br>基幹システム再構築サービスにお問い合わせください。</p>
              </div>
            </section>
            <!-- ./onayami -->

            <!-- #service -->
            <section id="service" class="service js-target">
              <div class="l-section">
                <div class="service__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">サービス紹介</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    ANSは、中小企業様をはじめ多くのシステム再構築実績があります。<br>
                    システムの老朽化や事業発展などで、システム再構築を検討されている企業様に業務改善や管理コストの削減を実現させるご提案をします。
                  </p>
                </div>
              </div>
              <div class="service__img p-over-img  js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/renewal/service_main.jpg" alt=""></div>
              <div class="l-section">
                <div class="service__cards common__cards">
                  <dl class="common__cards--list">
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#01">データ移行も対応</dt>
                      <dd class="common__cards--dd">
                        <p>旧システムから新システムへデータ移行は可能な限り行います。汎用機などレガシーシステムや
                          Excelなど様々な保管状態でも分析の上対応可能です。
                          事前にデータ移行プログラムを準備し、移行テストも行い慎重・確実に移行作業を行います！</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#02">ソースコード解析も対応</dt>
                      <dd class="common__cards--dd">
                        <p>Web 系、オープン系、汎用機系システムそれぞれ適応可能なエンジニアがソース解析を行い、
                          適切な再構築プラン・改修の必要性などをご提案致します。</p>
                      </dd>
                      <ul class="common__cards--linkList">
                        <li class="common__cards--link"><a href="" class="common__borderLink"><span class="icon-arrow">開発事例</span></a></li>
                      </ul>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#03">保守のみも引き受けます</dt>
                      <dd class="common__cards--dd">
                        <p>ソースコード解析(有償)のもと、保守作業のみでも対応可能です。専任担当者をアサインし体制を整えた上で、障害発生時の対応や、ご要望・課題への改善提案など迅速に対応します。</p>
                      </dd>
                      <ul class="common__cards--linkList">
                        <li class="common__cards--link"><a href="" class="common__borderLink"><span class="icon-arrow">保守代行サービス</span></a></li>
                      </ul>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item -bg-gray js-ani-fade">
                      <dt class="common__cards--dt">汎用機言語（COBOL）のシステムも対応</dt>
                      <dd class="common__cards--dd">
                        <p>オープン系/WEB系システムが増加傾向ですが、古い汎用機システムもまだまだ少なくありません。<br>
                          当時の担当者やエンジニアが不在でソース解析が困難など諸問題を抱えてるケースがあると思いますが、<br>
                          当社ではベテラン汎用機系エンジニアによりソース解析や分析、移行時のデータ移行なども対応しています。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./service -->

            <!-- #features -->
            <section id="features" class="features l-section js-target">
              <div class="features__inner">
                <div class="features__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">特徴</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    よく使う機能はそのまま残し踏襲し、課題のある機能は改善・改良して再構築することで、システム全体の再構築費の大幅な削減が可能です。システムを改善することで無駄な作業時間も削減でき、業務最適化につながります。 </p>
                </div>
                <div class="common__cards">
                  <dl class="common__cards--list">
                    <div class="common__cards--item js-ani-fade">
                      <div class="common__cards--img"><img src="<?= $site_root; ?>assets/img/service/renewal/features_img1.jpg?<?= time() ?>" alt="必須機能に絞ったシステム再構築を提案"></div>
                      <dt class="common__cards--dt _hasBorder">必須機能に絞ったシステム再構築を提案</dt>
                      <dd class="common__cards--dd">
                        <p>現行システムの利用していない機能の抽出、よく利用しているコア機能の把握、課題のある機能の洗い出しを行います。現行システムで管理ができず、Excel等で別途運用されている業務も分析。システムの実情を把握することで、本当に必要な機能や改善ポイントを明確にすることができます。不要な機能を明確にし、機能のスリム化をすることでコストを削減します。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item js-ani-fade">
                      <div class="common__cards--img"><img src="<?= $site_root; ?>assets/img/service/renewal/features_img2.jpg?<?= time() ?>" alt="簡単BIツールで帳票出力"></div>
                      <dt class="common__cards--dt _hasBorder">簡単BIツールで帳票出力</dt>
                      <dd class="common__cards--dd">
                        <p>現行システムにあるチェックリストや分析リストなどの帳票機能も簡易BIツール『FreeExport』を適用する事で機能の構築コストを大幅に削減できます。『FreeExport』は、データベースの閲覧・集計・検索・検索条件の絞り込みが可能。取り出したデータは、お客様の使いやすいファイル形式で出力できます。無駄な機能や滅多に利用しない機能を削減し、新システムでの汎用性向上で無駄なデータ調査の時間なども削減、生産性向上を実現します。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./features -->

            <!-- #support -->
            <section id="support" class="support l-section js-target">
              <div class="support__inner">
                <div class="support__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">サポート体制</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    システム導入後も専任の保守担当者がしっかりサポートし、システム保守を実施します。長期的に安心してお任せいただけるサービスと体制をご提供します。 </p>
                </div>
                <div class="support__cards">
                  <ul class="support__cards--list">
                    <li class="support__cards--item js-ani-fade">
                      <h3 class="support__cards--title"><span class="title-obi">システム保守</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          システム開発の担当者がそのまま専任のシステム保守担当者を担います。日常のトラブル・相談に対応し、お客様のデータを万全なセキュリティ体制で保守します。<br>保守・運用により、お客様が本業に専念できるよう、ストレスなくシステムを利用できる環境を提供します。
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
                      <h3 class="support__cards--title"><span class="title-obi">インフラ管理</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          インフラサービス、回線保守サービスに対応し、データバックアップ体制も万全です。<br>
                          インフラ管理代行サービスでは、お客様に代わりサーバの運用支援、トラブル発生時の復旧対応を実施致します。サーバ監視サービスでは、当社よりお客様のサーバ監視を行います。
                        </p>
                        <dl class="support__cards--tagsdl">
                          <div class="support__cards--tags js-ani-fade">
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
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
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
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
                            <li class="support__cards--link common__cards--link"><a href="" class="common__borderLink"><span class="icon-arrow">フルオーダーシステム開発の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="" class="common__borderLink"><span class="icon-arrow">システム再構築の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="" class="common__borderLink"><span class="icon-arrow">システム保守引継ぎの保守体制</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <!-- ./support -->

            <!-- #flow -->
            <section id="flow" class="flow js-target">
              <div class=" l-section">
                <div class="flow__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">開発フロー</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    お問合せからシステムの再構築、導入までの基本的な流れをご説明します。<br>
                    お客様の要件に沿って適切な担当者をアサインし、柔軟に対応します。
                  </p>
                </div>
              </div>
              <div class="flow__img p-over-img js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/fullorder/flow_main.jpg" alt="開発フロー"></div>
              <div class=" l-section">
                <div class="flow__service">
                  <div class="flow__service--inner js-ani-fade">
                    <h3 class="flow__service--title js-ani-fade">無料相談サービス</h3>
                    <dl class="flow__service--list">
                      <div class="flow__service--item js-ani-fade">
                        <dd class="flow__service--dt icon-voice">ヒアリング</dd>
                        <dd class="flow__service--dd">お問合せフォームよりお問い合わせください。<br>内容をお伺いし、サービスのご説明とヒアリングをさせていただく日時を調整します。</dd>
                      </div>
                      <div class="flow__service--item js-ani-fade">
                        <dd class="flow__service--dt icon-graph">現状分析</dd>
                        <dd class="flow__service--dd">お聞きした、お客様の業務内容や、システム運用方法、資料を元に、業務分析を行います。<br>現状の業務フローを再度見直すことで改善すべきポイントを洗い出し、お客様のご要望に沿ったシステム構成を検討します。</dd>
                      </div>
                      <div class="flow__service--item js-ani-fade">
                        <dd class="flow__service--dt icon-book">ご提案</dd>
                        <dd class="flow__service--dd">無料分析の結果を踏まえ、内容を取りまとめてさらにご提案させて頂きます。<br>7～10営業日以内に出来るだけ迅速にご提案させて頂きます。</dd>
                      </div>
                    </dl>
                  </div>
                </div>
                <dl class="flow__list">
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="01"></span>ご契約・案件開始</dt>
                    <dd class="flow__item--dd">内容、予算に問題がないようでしたら、契約締結させて頂きます。<br>
                      金額やスケジュールは、要件定義、設計が終了後に調整可能です。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="02"></span>要件定義</dt>
                    <dd class="flow__item--dd">ご要望のヒアリングや課題の改善方法等についての打ち合わせを週1～2回、2時間前後行います。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="03"></span>モックアップ・設計</dt>
                    <dd class="flow__item--dd">お客様からのご意見・ご要望を動く画面(モックアップ)に反映させ、要件定義→設計を繰り返します。検収の前に導入するシステムの画面が目で見える状態で確認・調整できます。ご納得いただいた段階で、正確なスケジュールや金額が確定します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="04"></span>開発・テスト</dt>
                    <dd class="flow__item--dd">当社にて設計書から必要機能の開発を行い、ご要望頂いた内容が実現できているかテストをします。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="05"></span>検収</dt>
                    <dd class="flow__item--dd">お客様で受入テストを実施して頂き、検収をして頂きます。<br>
                      要件定義・設計の段階でシステムの画面を確認頂いていますので、<br>
                      お客様の検収負担は軽減されます。軽微なご要望は修正をいたします。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="06"></span>導入</dt>
                    <dd class="flow__item--dd">システム全体の動作確認や導入時の初期設定、 移行作業などを実施します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="07"></span>保守・運用</dt>
                    <dd class="flow__item--dd">システムの安定運用のため、監視、管理、サポートの支援等の作業を実施。システム運用後も、より良いシステムとするための状況分析や提案を致します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="08"></span>導入</dt>
                    <dd class="flow__item--dd">システム全体の動作確認や導入時の初期設定、 移行作業などを実施します。</dd>
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
                <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">フルオーダーシステムの開発事例</span></h2>
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
              <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">基幹システム再構築に関するコラム</span></h2>
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
