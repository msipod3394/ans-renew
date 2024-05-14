<?php
$site_root = '../';
$cn = 'ittrust';
$page_title = "私たちの強み";
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

<body id="ittrust">
  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main class="sub__container serviceRow">
      <!-- ▼ breadcrumbs -->
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current">私たちの強み</span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <!-- ▼ heading  -->
      <section class="sub__heading">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left">Strength</span>
            <span class="font-mincho">私たちの強み</span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/ittrust/heading.jpg" alt="私たちの強み"></div>
      </section><!-- sub__heading -->

      <div id="ittrust" class="l-block">
        <div class="l-column">

          <!-- ▼ l-column__sub  -->
          <div class="l-column__sub">
            <div class="sub__side--in">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#heading" class="js-anchor">ANSが解決できるお客様の課題</a></li>
                <li class="sub__side--item js-nav"><a href="#strong" class="js-anchor">フルオーダーシステム開発について</a></li>
                <li class="sub__side--item js-nav"><a href="#approach" class="js-anchor">課題解決へのアプローチ</a></li>
                <li class="sub__side--item js-nav"><a href="#plan" class="js-anchor">システム導入のご提案について</a></li>
                <li class="sub__side--item js-nav"><a href="#price" class="js-anchor">料金プラン</a></li>
                <li class="sub__side--item js-nav"><a href="#uiux" class="js-anchor">使い心地を追求したUI/UXデザイン</a></li>
                <li class="sub__side--item js-nav"><a href="#support" class="js-anchor">サポート体制</a></li>
                <li class="sub__side--item js-nav"><a href="#case" class="js-anchor">業務システム開発事例</a></li>
                <li class="sub__side--item js-nav"><a href="#column" class="js-anchor">業務システムに関するコラム</a></li>
              </ul>
            </div>
          </div>
          <!--./l-column__sub-->

          <div class="l-column__main ittrust">
            <!-- <div class="l-column__main--inner"> -->

            <!-- #heading -->
            <section id="heading" class="heading l-section js-target">
              <h2 class="sub__contents--title"><span class="font-mincho">
                  ”システム”ではなく、<br class="sp">確実な導入効果とメリットを<br class="sp">ご提供します
                </span></h2>
              <p class="sub__contents--desc">
                <span class="desc-large">
                  初期費用0円、導入リスクを抑え、<br>貴社の運用に合わせた業務系システムをフルオーダーメイドで構築
                </span>
                システム開発会社として、首都圏を中心にITシステム関連サービス事業を展開しているエイ・エヌ・エスは、<br>
                『DXを推進すべく、オーダーメイドの基幹業務システムを構築したい』<br>
                『既存の業務システムを整理して使いやすく再構築したい』『システム保守が打ち切りになったため、<br>
                保守を引継いでほしい』といったお悩み・課題を解決するためにシステムをと通して、<br>
                DX推進や業務効率化といった”導入効果とメリット”をご提供します。
              </p>
            </section>
            <!-- ./heading -->

            <!-- #strong -->
            <section id="strong" class="strong l-section js-target">
              <div class="strong__inner">
                <h2 class="strong__title"><span class="font-mincho">ANSが解決できるお客様の課題</span></h2>
                <div class="strong__circle">
                  <dl class="strong__circle--list">
                    <div class="circle_width _item01">
                      <div class="circle_height">
                        <p>DX推進のための<br>IT化</p>
                      </div>
                    </div>
                    <div class="circle_width _item02">
                      <div class="circle_height">
                        <p>業務に適した<br>システム開発</p>
                      </div>
                    </div>
                    <div class="circle_width _item03">
                      <div class="circle_height">
                        <p>長期的に安定した<br>保守対応</p>
                      </div>
                    </div>
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./strong -->

            <!-- #approach -->
            <section id="approach" class="approach l-section js-target">
              <h2 class="sub__contents--title"><span class="font-mincho">
                  業務に合ったフルオーダーの<br class="sp">システム開発で課題解決に<br class="sp">アプローチ
                </span></h2>
              <p class="sub__contents--desc">
                自社独自の運用で事業の根幹を支える業務や、他社と差別化している基幹業務を運用するには、オーダーメイドのシステム開発が適しています。エイ・エヌ・エスのシステム開発は、業務の流れは管理方法を詳しく分析し、ご要望に合わせた改善案を提案。確実に業務効率化を促進するシステムを導入します。
              </p>
              <dl class="approach__cards--tagsdl">
                <div class="approach__cards--tags">
                  <dt class="approach__cards--tagdt">システム開発の事例</dt>
                  <dd class="approach__cards--tagdd">
                    <ul class="approach__cards--tagList">
                      <li class="approach__cards--tagItem"><span>基幹システム</span>警備業、アパレル業、人材派遣業、広告業、セキュリティ業</li>
                      <li class="approach__cards--tagItem"><span>販売管理・在庫管理システム</span>製造・卸売業、IT業、リユース業、医薬品業</li>
                      <li class="approach__cards--tagItem"><span>顧客管理システム</span>住宅建設業、不動産業、教育関連事業</li>
                      <li class="approach__cards--tagItem"><span>受発注管理システム</span>卸売業、小売業、食品業、イベント業</li>
                      <li class="approach__cards--tagItem"><span>勤怠管理システム</span>保険業、運送業、保育事業</li>
                      <li class="approach__cards--tagItem"><span>人事関連システム</span>社会保険労務士事務所、運送業、医療サービス業</li>
                      <li class="approach__cards--tagItem"><span>情報検索システム</span>官公庁(外務省)、建設業</li>
                      <li class="approach__cards--tagItem"><span>レンタル・販売管理システム</span>福祉・介護業</li>
                      <li class="approach__cards--tagItem"><span>原価管理・輸出管理システム</span>医療機器業、運輸業</li>
                      <li class="approach__cards--tagItem"><span>航空・海上輸出入システム</span>国際輸送業</li>
                    </ul>
                  </dd>
                </div>
              </dl>
              <div class="approach__linkButton common__linkButton"><a href="<?= $site_root; ?>service/fullorder"><span class="font-mincho">フルオーダーシステム開発について</span></a></div>
            </section>
            <!-- ./approach -->

            <!-- #plan -->
            <section id="plan" class="plan js-target">
              <div class="l-section">
                <h2 class="sub__contents--title"><span class="font-mincho">
                    DX推進に貢献するシステム導入をご提案
                  </span></h2>
                <p class="sub__contents--desc">
                  DX(デジタルトランスフォーメーション)とは、デジタル技術の活用によって企業のビジネスモデルを変革し、自社の競争力を高めていくことです。 DX推進が叫ばれている今、重要な位置づけとなるIT投資。エイ・エヌ・エスは、事業発展に貢献するシステム導入や老朽化したシステムの再構築・保守を担っています。システム導入において、検討しなければならない課題は多くあります。課題や懸念点を解消し、ご納得いただいた上でご要望に合わせたサービスを提供します。柔軟に対応可能ですので、何でもご相談ください。
                </p>
              </div>
              <div class="plan__img p-over-img"><img src="<?= $site_root; ?>assets/img/service/bcp/secure_img.jpg" alt="企業が取り組むべきセキュリティ対策"></div>
              <div class="plan__cards common__cards l-section">
                <dl class="common__cards--list">
                  <div class="common__cards--item">
                    <dt class="common__cards--dt _hasIcon" data-num="#01">DX推進のため、生産性が向上できるシステムを導入したい</dt>
                    <dd class="plan__cards--result common__cards--dd">
                      <p class="plan__cards--result--title">現行の業務内容と要望に沿った最適なシステムを構築します。</p>
                      <p class="plan__cards--result--text">オーダーメイドのシステムでも、要件定義の段階から動くモックアップ画面をご覧いただき、適格なご意見・ご要望を 反映した設計をすることが可能です。利用品質の良さを追求したオーダーメイドのシステムを構築します。</p>
                    </dd>
                  </div><!-- ./common__cards--item -->
                  <div class="common__cards--item">
                    <dt class="common__cards--dt _hasIcon" data-num="#02">既存システムが老朽化しているため、対策が必要である。</dt>
                    <dd class="plan__cards--result common__cards--dd">
                      <p class="plan__cards--result--title">システムの良い機能を踏襲し、現行の運用に沿った新システムへ再構築します。</p>
                      <p class="plan__cards--result--text">DX推進のためのシステム再構築や、追加・改修を重ねたことによりブラックボックス化した問題等を解決します。良い機能は踏襲し、業務と乖離が発生している機能や必要な機能は新たに搭載し、現状の業務に最適化したシステムを構築します。</p>
                    </dd>
                  </div><!-- ./common__cards--item -->
                  <div class="common__cards--item">
                    <dt class="common__cards--dt _hasIcon" data-num="#03">システムは必要。だけど、予算がない。</dt>
                    <dd class="plan__cards--result common__cards--dd">
                      <p class="plan__cards--result--title">初期コスト0円の料金プラン「IT-Trust」をご提案します。</p>
                      <p class="plan__cards--result--text">一般的な一括契約の場合、初期費用が多く発生しますが、システム開発にかかる費用をシステム利用料として月額で支払いいただくことで、初期投資を抑えることができる「IT-Trust」料金プランをご提案します。</p>
                    </dd>
                  </div><!-- ./common__cards--item -->
                  <div class="common__cards--item">
                    <dt class="common__cards--dt _hasIcon" data-num="#04">システムやインフラの管理に不安がある</dt>
                    <dd class="plan__cards--result common__cards--dd">
                      <p class="plan__cards--result--title">システム保守、インフラ管理も一貫して対応します。</p>
                      <p class="plan__cards--result--text">システムの利用に必須となるメンテナンスやデータのバックアップといった保守対応や、サーバー等のインフラ管理も一括して対応します。 長期的に安心してシステムをご利用できる環境を整え、本業に専念ています。</p>
                    </dd>
                  </div><!-- ./common__cards--item -->
                </dl>
              </div>
            </section>
            <!-- ./case -->

            <!-- #price -->
            <section id="price" class="price js-target">
              <div class="price__inner l-section">
                <div class="price__heading">
                  <h2 class="sub__contents--title"><span class="font-mincho">料金プラン</span></h2>
                  <p class="sub__contents--desc">
                    初期コスト０円/月額利用料でシステム開発が可能な料金プランを選択できます。<br />一般的な一括受託でも大丈夫です。ご要望・ご状況に合わせた料金提案が可能です。
                  </p>
                </div>
                <div class="price__cards">
                  <ul class="price__cards--list">
                    <li class="price__cards--item">
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
                    <li class="price__cards--item">
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
                <div class="price__caution">
                  <p>※ネットワーク回線費用等は、お客様負担。<br>
                    ※IT-Trustの場合、システムの所有権は弊社エイ・エヌ・エスが保持することとなり、お客様はシステム利用料をお支払いいただくことでシステムを独占的に利用することができます。</p>
                </div>
              </div>
            </section>
            <!-- ./price -->

            <!-- #uiux -->
            <section id="uiux" class="uiux js-target">
              <div class="l-section">
                <h2 class="sub__contents--title"><span class="font-mincho">
                    使い心地を追求したUI/UXデザイン
                  </span></h2>
                <p class="sub__contents--desc">
                  <span class="desc-large">
                    システムを利用するユーザーの目的やニーズを主体に考え、<br class="pc">使い心地の良さを追求したシステム開発を実現します。
                  </span>
                  エイ・エヌ・エスでは、要件定義の段階から動作可能なモックアップを提供することにより、プロジェクトの早い段階から実際にシステムはどのように動作するかを確認できます。 さらに、この「見える化」によって、誤解やコミュニケーションの不明確さを排除し 進行中の作業における手戻りや漏れを効果的に防止できます。
                </p>
              </div>
              <div class="uiux__img p-over-img"><img src="<?= $site_root; ?>assets/img/ittrust/uiux.jpg" alt="使い心地を追求したUI/UXデザイン"></div>
              <div class="uiux__prosess l-section">
                <h3 class="sub__contents--subtitle"><span>エイ・エヌ・エスのシステム開発プロセス</span></h3>
                <div class="uiux__prosess--img"><img src="<?= $site_root; ?>assets/img/ittrust/uiux_prosess.jpg" alt=""></div>
                <div class="uiux__prosess--arrow"><span></span></div>
                <div class="uiux__prosess--result">
                  <p>”システム”ではなく、<br>確実な導入効果とメリットをご提供します</p>
                </div>
              </div>
            </section>
            <!-- ./uiux -->

            <!-- #support -->
            <section id="support" class="support js-target">
              <div class="support__inner l-section">
                <div class="support__heading">
                  <h2 class="sub__contents--title"><span class="font-mincho">システム保守・インフラ管理まで安心で長期的なサポート体制をご提供</span></h2>
                  <p class="sub__contents--desc">システム保守・インフラ管理まで安心で長期的なサポート体制をご提供</p>
                </div>
                <div class="support__cards">
                  <ul class="support__cards--list">
                    <li class="support__cards--item">
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
                    <li class="support__cards--item">
                      <h3 class="support__cards--title"><span class="title-obi">インフラ管理</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          インフラサービス、回線保守サービスに対応し、データバックアップ体制も万全です。<br>
                          インフラ管理代行サービスでは、お客様に代わりサーバの運用支援、トラブル発生時の復旧対応を実施致します。サーバ監視サービスでは、当社よりお客様のサーバ監視を行います。
                        </p>
                        <dl class="support__cards--tagsdl">
                          <div class="support__cards--tags">
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
                            <dd class="support__cards--tagdd">
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
                          <div class="support__cards--tags">
                            <dt class="support__cards--tagdt">インフラ管理代行サービス</dt>
                            <dd class="support__cards--tagdd">
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
                    <li class="support__cards--item">
                      <h3 class="support__cards--title"><span class="title-obi">サービスに合わせた保守体制</span></h3>
                      <div class="support__cards--itemIn">
                        <p class="support__cards--desc">
                          サービスごとに合わせた保守体制をご提案いたします。<br>詳しくは各サービスページをご確認ください。
                        </p>
                        <div class="support__cards--links">
                          <ul class="support__cards--linkList">
                            <li class="support__cards--link common__cards--link"><a href="<?= $site_root; ?>service/fullorder" class="common__borderLink"><span class="icon-arrow">フルオーダーシステム開発の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="<?= $site_root; ?>service/renewal" class="common__borderLink"><span class="icon-arrow">システム再構築の保守体制</span></a></li>
                            <li class="support__cards--link common__cards--link"><a href="<?= $site_root; ?>service/maintenance" class="common__borderLink"><span class="icon-arrow">システム保守引継ぎの保守体制</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <!-- ./support -->

            <!-- #case -->
            <section id="case" class="subCase js-target">
              <div class="subCase__inner l-section">
                <h2 class="serviceTop__mainTitle sub__contents--title"><span class="font-mincho">業務システム開発事例</span></h2>
                <div class="subCase__cardList">
                  <ul class="subCase__cardList--list">
                    <li class="subCase__cardList--item subCaseItem">
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
                      <a href="<?= $site_root; ?>case" class="subCaseItem__link">
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
              <div class="subColumn__linkButton common__linkButton"><a href="<?= $site_root; ?>case"><span class="font-mincho">全ての事例を見る</span></a></div>
            </section><!-- ./subCase -->

            <!-- #subColumn -->
            <section id="subColumn" class="subColumn js-target">
              <div class="subColumn__inner l-section">
                <h2 class="serviceTop__mainTitle sub__contents--title"><span class="font-mincho">業務システムに関するコラム</span></h2>
                <ul class="subColumn__list">
                  <li class="subColumn__card">
                    <a href="<?= $site_root; ?>column" class="subColumn__card--link">
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
                    <a href="<?= $site_root; ?>column" class="subColumn__card--link">
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
                    <a href="<?= $site_root; ?>column" class="subColumn__card--link">
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
                    <a href="<?= $site_root; ?>column" class="subColumn__card--link">
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
            </section><!-- ./subColumn -->

          </div><!-- ./l-column__main -->

          <!-- <div class="l-column__right-side"></div> -->

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
