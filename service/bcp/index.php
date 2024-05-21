<?php
$site_root = '../../';
$cn = 'service-bcp';
$page_title = "ITインフラのBCP対策";
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

<body id="service-bcp">
  <div id="fullWrap">

    <!-- ▼ inc/header -->
    <?php include($site_root . "_inc/header.php"); ?>

    <main id="contents-bcp" class="sub__container serviceRow">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href=""><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span>サービス一覧</span></a></li>
          <li class="sub__breadcrumbs--item"><a href=""><span class="_current">ITインフラのBCP対策</span></a></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="BCP">BCP</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/service/bcp/heading.jpg" alt="ITインフラのBCP対策"></div>
      </section><!-- sub__heading -->

      <div class="l-block">
        <div class="l-column">
          <div class="l-column__sub">
            <div class="sub__side--in js-ani-fade">
              <p class="sub__side--heading">目次</p>
              <ul class="sub__side--list">
                <li class="sub__side--item js-nav"><a href="#necessity" class="js-anchor _current"><span>BCPの必要性</span></a></li>
                <li class="sub__side--item js-nav"><a href="#secure" class="js-anchor"><span>企業が取り組むべきセキュリティ対策</span></a></li>
                <li class="sub__side--item js-nav"><a href="#flow" class="js-anchor"><span>BCP策定ステップ</span></a></li>
                <li class="sub__side--item js-nav"><a href="#plan" class="js-anchor"><span>ITインフラBCP対策</span></a></li>
                <li class="sub__side--item js-nav"><a href="#column" class="js-anchor"><span>コラム</span></a></li>
              </ul>
            </div>
          </div>
          <div class="l-column__main bcp">
            <!-- #necessity -->
            <section id="necessity" class="l-section necessity js-target">
              <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">BCPの必要性</span></h2>
              <p class="sub__contents--desc js-ani-fade">
                ITにおけるBCPは、災害や事故などの予期せぬ出来事の発生により、限られた経営資源で最低限の事業活動を継続し、迅速に業務を回復できるようにするためための重要な手段です。
                昨今では急速なIT化により、 ほとんどのビジネスはITシステムに依存しており、それらのシステムが停止すれば業務の大部分が影響を受けます。
              </p>
              <div class="necessity__inner js-ani-fade">
                <h2 class="necessity__heading js-ani-fade">災害や事故などの予期せぬ出来事の例</h2>
                <ul class="necessity__list">
                  <li class="necessity__item js-ani-fade">
                    地域での計画停電の実施や災害での社屋の損失
                    <span class="icon-arrow2">データベースのクラッシュ</span>
                  </li>
                  <li class="necessity__item js-ani-fade">
                    災害で社屋の損失やサーバークラッシュ
                    <span class="icon-arrow2">システム停止</span>
                  </li>
                  <li class="necessity__item js-ani-fade">
                    交通機関は麻痺状態、二次災害や停電も考慮して自宅待機措置
                    <span class="icon-arrow2">業務停止・業績悪化</span>
                  </li>
                </ul>
              </div>
              <div class="necessity__arrow js-ani-fade"><span></span></div>
              <div class="necessity__result js-ani-fade">
                <p>災害や問題が発生しても、<br class="sp">業務を続けられるように<br>
                  計画を立て、それを実行することは、<br>
                  企業の持続可能性を確保する上で不可欠</p>
              </div>
            </section>
            <!-- ./necessity -->

            <!-- #secure -->
            <section id="secure" class="secure js-target">
              <div class="secure__heading l-section">
                <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">企業が取り組むべきセキュリティ対策</span></h2>
                <p class="sub__contents--desc js-ani-fade">
                  企業活動を行う上で、自社の業務システムやネットワークは、切っても切り離せない存在です。BCP対策をを考慮する上で、自社業務システムの安全性、可用性に関しても、計画の一部として対策を講じなければなりません。ITインフラBCPは、企業が事業を継続し、重要なデータやシステムを保護するために不可欠なものです。
                </p>
              </div>
              <div class="secure__img p-over-img js-ani-fade-ho"><img src="<?= $site_root; ?>assets/img/service/bcp/secure_img.jpg" alt="企業が取り組むべきセキュリティ対策"></div>
              <div class="secure__inner l-section">
                <div class="secure__cards">
                  <dl class="common__cards--list secure__cards--list">
                    <div class="common__cards--item secure__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#01">リスク評価と分析</dt>
                      <dd class="common__cards--dd">
                        <p>事業にとって重要なシステムやデータを特定し、自然災害、サイバーセキュリティの脅威、ハードウェアの障害など、様々なリスクを考慮する必要があります。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item secure__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#02">バックアップ</dt>
                      <dd class="common__cards--dd">
                        <p>データのバックアップは極めて重要です。定期的なバックアップの実施と、それを確実に保存する場所を選定します。また、データ復旧の手順やシステムを迅速に元の状態に戻すための対策が必要です。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item secure__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#03">冗長性</dt>
                      <dd class="common__cards--dd">
                        <p>重要なシステムやサーバーに冗長性を持たせることが重要です。ハードウェアやソフトウェアの障害が発生した場合に、別のシステムやリソースに切り替える仕組みを導入することも有効です。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item secure__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#04">セキュリティ対策</dt>
                      <dd class="common__cards--dd">
                        <p>サイバーセキュリティ対策は非常に重要です。セキュリティの脆弱性を評価し、システムやデータを保護するための適切な対策を講じます。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                    <div class="common__cards--item secure__cards--item js-ani-fade">
                      <dt class="common__cards--dt _hasIcon" data-num="#05">クラウドや仮想化の活用</dt>
                      <dd class="common__cards--dd">
                        <p>クラウドや仮想化技術を活用することで、柔軟性やスケーラビリティを向上させ、BCPを強化することができます。</p>
                      </dd>
                    </div><!-- ./common__cards--item -->
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./secure -->

            <!-- #flow -->
            <section id="flow" class="l-section flow js-target">
              <div class="flow__inner">
                <div class="flow__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">BCP策定ステップ</span></h2>
                  <p class="sub__contents--desc js-ani-fade">
                    ITインフラのBCPを進める際の基本的な手順をご紹介します。
                  </p>
                </div>
                <dl class="flow__list">
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="01"></span>リスク対策とビジネス影響分析</dt>
                    <dd class="flow__item--dd">事業におけるリスクを特定し、それがITインフラに与える影響を確認し、システムの重要性、ダウンタイムのコスト、データの損失などを考慮します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="02"></span>BCPの策定</dt>
                    <dd class="flow__item--dd">リスクアセスメントを基に、災害発生時の対応手順、データバックアップ戦略、代替施設の確保などが必要です。BCPドキュメントを作成し、従業員に共有し理解を促します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="03"></span>BCPの実行</dt>
                    <dd class="flow__item--dd">インフラ障害への対応手順やプロセスを文書化します。システムの復旧手順、代替手段、人員配置などを明確にします。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="04"></span>監視と改善</dt>
                    <dd class="flow__item--dd">継続的な監視と評価を行い、変化するリスクや技術に合わせてBCPを改善・更新します。</dd>
                  </div>
                  <div class="flow__item js-ani-fade">
                    <dt class="flow__item--dt"><span class="icon-flow" data-num="05"></span>社内・取引先との連携</dt>
                    <dd class="flow__item--dd">BCPは組織全体で協力して進める必要があります。取引先や関係部署との連携を図り、体制を整えて円滑なBCPの実施を図ります。</dd>
                  </div>
                </dl>
              </div>
            </section>
            <!-- ./flow -->

            <!-- #plan -->
            <section id="plan" class="l-section plan js-target">
              <div class="plan__inner">
                <div class="plan__heading">
                  <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">ITインフラBCP対策</span></h2>
                </div>
                <div class="plan__cards">
                  <dl class="plan__cards--list">
                    <div class="plan__cards--item js-ani-fade">
                      <div class="plan__cards--img"><img src="<?= $site_root; ?>assets/img/service/bcp/plan_img_1.jpg" alt="サーバーの管理・運用"></div>
                      <div class="plan__cards--contents">
                        <dt class="plan__cards--dt">サーバーの管理・運用</dt>
                        <dd class="plan__cards--dd">
                          サーバーのパフォーマンスを監視し、問題が発生した場合には適切な対策を講じます。また、必要に応じてリソースを最適化するためのチューニングも重要です。OSやアプリケーションのアップデート、定期的なメンテナンス作業を通じて、サーバーの安定性とセキュリティを確保します。
                        </dd>
                      </div>
                    </div>
                    <div class="plan__cards--item js-ani-fade _reverse">
                      <div class="plan__cards--img"><img src="<?= $site_root; ?>assets/img/service/bcp/plan_img_2.jpg" alt="データのバックアップ"></div>
                      <div class="plan__cards--contents">
                        <dt class="plan__cards--dt">データのバックアップ</dt>
                        <dd class="plan__cards--dd">
                          定期的かつ信頼性の高いバックアップ環境を設け、データの喪失を防ぐために適切なリカバリプロセスを確立することが大切です。
                          システムやデータの複製（コピー）をあらかじめ作成し、たとえ問題が起きてもデータを復旧出来るように備える環境を整えます。
                        </dd>
                      </div>
                    </div>
                    <div class="plan__cards--item js-ani-fade">
                      <div class="plan__cards--img"><img src="<?= $site_root; ?>assets/img/service/bcp/plan_img_3.jpg" alt="代替機やリモートワークの導入"></div>
                      <div class="plan__cards--contents">
                        <dt class="plan__cards--dt">代替機やリモートワークの導入</dt>
                        <dd class="plan__cards--dd">
                          リモートワーク導入や災害時の在宅勤務等を支えるインフラストラクチャを整えます。安全なリモートアクセスを可能にするために、VPN（仮想プライベートネットワーク）やセキュアなリモートアクセスソフトウェアを導入します。
                        </dd>
                      </div>
                    </div>
                    <div class="plan__cards--item js-ani-fade _reverse">
                      <div class="plan__cards--img"><img src="<?= $site_root; ?>assets/img/service/bcp/plan_img_4.jpg" alt="セキュリティ運用"></div>
                      <div class="plan__cards--contents">
                        <dt class="plan__cards--dt">セキュリティ運用</dt>
                        <dd class="plan__cards--dd">
                          サーバーへのアクセスを制限し、適切なセキュリティ対策を実施することが必要です。システムやネットワークのセキュリティを実行し、維持するための一連のプロセスを担います。情報資産を保護し、機密性、完全性、可用性を確保することを目指します。
                        </dd>
                      </div>
                    </div>
                    <div class="plan__cards--item js-ani-fade">
                      <div class="plan__cards--img"><img src="<?= $site_root; ?>assets/img/service/bcp/plan_img_5.jpg" alt="クラウドサーバー移行支援"></div>
                      <div class="plan__cards--contents">
                        <dt class="plan__cards--dt">クラウドサーバー移行支援</dt>
                        <dd class="plan__cards--dd">
                          既存サーバーのAWS（Amazon Web Services）MicrosoftAzureへの移行支援を受け賜ります。最適な方法でオンプレミス環境からクラウド環境への移行を支援いたします。
                        </dd>
                      </div>
                    </div>
                  </dl>
                </div>
              </div>
            </section>
            <!-- ./plan -->


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

          </div><!-- ./l-column__main -->
        </div>
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
