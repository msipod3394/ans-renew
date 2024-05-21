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

          <!-- #case-pickup -->
          <section id="case-pickup" class="case__block case-pickup">
            <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">ピックアップ事例</span></h2>

            <div class="caseRow">
              <ul class="caseRow__list">
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
                <li class="caseRow__card js-ani-fade">
                  <a href="<?= $site_root; ?>case/detail_A.php" class="caseRow__card--link">
                    <div class="caseRow__card--thumb"><img src="<?= $site_root; ?>assets/img/top/column_thumbnail.png" alt=""></div>
                    <p class="caseRow__card--company">株式会社〇〇〇〇</p>
                    <p class="caseRow__card--title">〇〇システム開発の事例</p>
                    <p class="caseRow__card--desc"><span>データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。データの一元管理が可能になり、情報の「見える化」が実現。</span></p>
                    <div class="caseRow__card--tags">
                      <div class="caseRow__card--tag">
                        <span class="">業種：〇〇</span>
                        <span class="">業種：〇〇</span>
                      </div>
                      <div class="caseRow__card--tag">
                        <span class="tag">#IT-Trust</span>
                        <span class="tag">#システム開発</span>
                        <span class="tag">#販売管理システム</span>
                      </div>
                    </div>
                  </a>
                </li><!-- caseRow__card -->
              </ul>
            </div>

          </section>
          <!-- ./case-pickup -->

          <!-- #case-types -->
          <section id="case-types" class="case__block case-types ">
            <h2 class="sub__contents--title js-ani-fade"><span class="font-mincho">業種別でみる</span></h2>
            <div class="case-types__listBox js-ani-fade">
              <ul class="case-types__list">
                <li class="case-types__item"><a href=""><span>業種A</span></a></li>
                <li class="case-types__item"><a href=""><span>業種B</span></a></li>
                <li class="case-types__item"><a href=""><span>業種C</span></a></li>
                <li class="case-types__item"><a href=""><span>業種D</span></a></li>
                <li class="case-types__item"><a href=""><span>業種E</span></a></li>
                <li class="case-types__item"><a href=""><span>業種F</span></a></li>
                <li class="case-types__item"><a href=""><span>業種G</span></a></li>
              </ul>
            </div>
            <div class="subCase">
              <div class="subCase__cardList">
                <ul class="subCase__cardList--list">
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
                  <li class="subCase__cardList--item subCaseItem js-ani-fade">
                    <a href="<?= $site_root; ?>case/detail_B.php" class="subCaseItem__link">
                      <div class="subCaseItem__img"><img src="<?= $site_root; ?>assets/img/top/case/case_sample.jpg" alt=""></div>
                      <div class="subCaseItem__contents">
                        <p class="subCaseItem__contents--company">株式会社〇〇〇〇</p>
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
          </section>
          <!-- ./case -->
        </div>
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
