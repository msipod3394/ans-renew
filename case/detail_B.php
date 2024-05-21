<?php
$site_root = '../';
$cn = 'case';
$page_title = "お客様導入事例";
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

    <main id="contents-case" class="sub__container case">
      <div class="sub__breadcrumbs">
        <ul class="sub__breadcrumbs--list">
          <li class="sub__breadcrumbs--item"><a href="<?= $site_root; ?>"><span>トップ</span></a></li>
          <li class="sub__breadcrumbs--item"><span class="_current"><?= $page_title; ?></span></li>
        </ul>
      </div><!-- ./sub__breadcrumbs -->

      <section class="sub__heading js-subHeading-show">
        <h1 class="sub__heading--text">
          <span class="sub__heading--textIn">
            <span class="font-en line-left text-progress" data-txt="Case">Case</span>
            <span class="font-mincho text-progress" data-txt="<?= $page_title ?>"><?= $page_title ?></span>
          </span>
        </h1>
        <?php include($site_root . "_inc/headingAction.php"); ?>
        <div class="sub__headingImg"><img src="<?= $site_root; ?>assets/img/case/heading.jpg" alt="お客様導入事例"></div>
      </section><!-- sub__heading -->

      <div id="case" class="l-block -full case">

        <div class="l-column__main--inner">
          <section class="caseDetail -detail-b">

            <!-- 公開日/シェア -->
            <div class="caseDetail__update js-ani-fade-ho">
              <div class="caseDetail__update--date">
                <span>公開日：2024年04月03日</span>
              </div>
              <div class="caseDetail__update--share">
                <dl class="shareLists">
                  <dt class="shareLists__dt"><span class="font-robot">SHARE</span></dt>
                  <div class="shareLists__wrap">
                    <dd class="shareLists__item is-twitter">
                      <a href="https://twitter.com/intent/tweet?url=[URL]&text=[text]" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="shareLists__link">
                        <span class="hd">Twitter share</span>
                      </a>
                    </dd>
                    <dd class="shareLists__item is-facebook">
                      <a href="https://www.facebook.com/share.php?u=[URL]" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" class="shareLists__link">
                        <span class="hd">Facebook share</span>
                      </a>
                    </dd>
                    <dd class="shareLists__item is-copy">
                      <a href="" onclick="" class="shareLists__link">
                        <span class="hd">copy share</span>
                      </a>
                    </dd>
                  </div>
                </dl>
              </div>
            </div>

            <!-- ロゴ・タイトル -->
            <div class="caseDetail__head js-ani-fade">
              <h1 class="caseDetail__head--heading sub__contents--title">
                <span class="font-mincho">
                  データの一元管理が可能になり、情報の「見える化」が実現
                </span>
              </h1>
              <h2 class="caseDetail__head--company">株式会社フロンティアコンサルティング</h2>
              <div class="caseDetail__head--interviewee">代表取締役社長 川原邦章様</div>
            </div>

            <!-- 会社情報 -->
            <div class="caseDetail__headDesc js-ani-fade">
              <dl class="caseDetail__headDesc--dl">
                <div class="caseDetail__headDesc--item">
                  <dt class="caseDetail__headDesc--dt">業種</dt>
                  <dd class="caseDetail__headDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__headDesc--item">
                  <dt class="caseDetail__headDesc--dt">従業員数</dt>
                  <dd class="caseDetail__headDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__headDesc--item">
                  <dt class="caseDetail__headDesc--dt">拠点数</dt>
                  <dd class="caseDetail__headDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__headDesc--item __full">
                  <dt class="caseDetail__headDesc--dt">事業内容</dt>
                  <dd class="caseDetail__headDesc--dd">
                    オフィスのデザイン・設計・内装工事全般、オフィス移転のプロジェクト管理、オフィスの原状回復工事、オフィスの物件選定業務、オフィス家具・OA機器等の販売・リース業務、ビルの改装工事・外壁工事・設備工事全般
                  </dd>
                </div>
              </dl>
            </div>

            <!-- 関連タグ -->
            <div class="caseDetail__tag c-tags js-ani-fade">
              <ul class="c-tags__list icon-tag">
                <li class="c-tags__item"><a href="">#IT-Trust</a></li>
                <li class="c-tags__item"><a href="">#IT-Trust</a></li>
                <li class="c-tags__item"><a href="">#IT-Trust</a></li>
              </ul>
            </div>

            <!-- システム情報 -->
            <div class="caseDetail__contentsDesc c-over-border-top">
              <h3 class="caseDetail__subtitle js-ani-fade">システム情報</h3>
              <dl class="caseDetail__contentsDesc--dl js-ani-fade">
                <div class="caseDetail__contentsDesc--item __full">
                  <dt class="caseDetail__contentsDesc--dt">導入システム</dt>
                  <dd class="caseDetail__contentsDesc--dd">
                    オフィスのデザイン・設計・内装工事全般、オフィス移転のプロジェクト管理、オフィスの原状回復工事、オフィスの物件選定業務、オフィス家具・OA機器等の販売・リース業務、ビルの改装工事・外壁工事・設備工事全般
                  </dd>
                </div>
                <div class="caseDetail__contentsDesc--item __full">
                  <dt class="caseDetail__contentsDesc--dt">システム対象業務</dt>
                  <dd class="caseDetail__contentsDesc--dd">
                    オフィスのデザイン・設計・内装工事全般、オフィス移転のプロジェクト管理、オフィスの原状回復工事、オフィスの物件選定業務、オフィス家具・OA機器等の販売・リース業務、ビルの改装工事・外壁工事・設備工事全般
                  </dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">システム機能数</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">サーバーOS</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">DB</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">言語</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">利用ツール</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">運用回線環境</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">機能概要</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
                <div class="caseDetail__contentsDesc--item">
                  <dt class="caseDetail__contentsDesc--dt">リリース年月</dt>
                  <dd class="caseDetail__contentsDesc--dd">〇〇</dd>
                </div>
              </dl>
            </div>

            <!-- 導入効果・メリット -->
            <div class="caseDetail__contents">
              <h3 class="caseDetail__subtitle js-ani-fade">導入効果・メリット</h3>
              <div class="js-ani-fade">
                <p class="">
                  新たにシステム開発を検討する際、企業は何を軸にプロジェクトをすすめるべきなのでしょう。
                  システム開発のプロジェクトは、実際にシステムを使うことになる現場担当者の協力は必要不可欠です。いかにプロジェクトの成功も現場担当者を巻き込めるかどうかが鍵となります。
                  しかし、実際に現場担当者に意見を求めると、現行の業務フローが変化することを避ける傾向が強く、業務はそのままに操作性の向上や応答時間の短縮という要望にとどまることが多いのが実情です。
                  現場担当者は、“現行の業務”については精通していますが、会社全体の効率化や改善という視点でみている立場ではないためと推測できます。また、現場担当者にとって、慣れない業務に変更する改革は受け入れにくいでしょう。
                  反対に、「画面遷移が多く入力に時間がかかるので、入力画面を見やすくまとめてほしい。」「帳票の出力が簡単にできるようにしてほしい。」など、現行の業務を軸にした意見は多く挙がります。もちろん、利便性をシステムに反映させることは必要であっても、業務効率化に繋がらないということになり、根本的な効率化に直結することは難しくなります。
                </p>
              </div>
            </div>

            <!-- この事例は〇〇をご利用いただいています -->
            <div class="caseDetail__use js-ani-fade">
              <div class="caseDetail__use--inner">
                <h4 class="caseDetail__use--heading">この事例はフルオーダーシステム開発をご利用いただいています</h4>
                <p class="caseDetail__use--text">
                  DXの推進を実現させるオーダーメイドのシステム開発によって、基幹となる業務システムを、フルオーダーメイドで構築。業務に合わせたシステムを導入します。
                  経験豊富なプロジェクトマネージャーがお客様の業務内容を理解した上で、操作性の良い最適なシステムを構築します。
                </p>
                <div class="caseDetail__use--link">
                  <a href="" class="common__borderLink"><span class="icon-arrow">フルオーダーシステム開発を詳しくみる</span></a>
                </div>
                <div class="caseDetail__use--img"><img src="../assets/img/ittrust/heading.jpg" alt=""></div>
              </div>
            </div>

            <!-- お問い合わせ導線 -->
            <?php include($site_root . "_inc/inquiry.php"); ?>

            <div class="caseDetail__linkBack common__linkButton js-ani-fade"><a href=""><span class="font-mincho">事例 一覧に戻る</span></a></div>

            <!-- #case -->
            <section class="subCase l-section js-target">
              <div class="subCase__inner">
                <h2 class="serviceTop__mainTitle sub__contents--title js-ani-fade"><span class="font-mincho">〇〇に関連する記事</span></h2>
                <div class="subCase__cardList">
                  <ul class="subCase__cardList--list">
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="subCase__cardList--item subCaseItem js-ani-fade">
                      <a href="" class="subCaseItem__link">
                        <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                        <div class="subCaseItem__contents">
                          <p class="subCaseItem__contents--company">株式会社フロンティアコンサルティング</p>
                          <p class="subCaseItem__contents--title">〇〇システム開発</p>
                          <p class="subCaseItem__contents--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                          <div class="subCaseItem__contents--tagWrap">
                            <div class="subCaseItem__contents--tag">
                              <ul class="tag icon-tag">
                                <li class="tag__item">#IT-Trust</li>
                                <li class="tag__item">#システム開発</li>
                                <li class="tag__item">#販売管理システム</li>
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

          </section><!-- ./caseDetail -->

        </div><!-- ./l-column__main--inner -->
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
