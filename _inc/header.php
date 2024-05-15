<?php // header
$isTopPage = ($pagename == 'top');
$ac = array_fill_keys(array('top', 'qa', 'ittrust', 'uiux', 'service', 'case', 'column', 'company'), '');
$ac[$cn] = 'is-active';
?>

<!-- ▼ header -->
<header id="header" class="header js-header _top">
  <button class="header__hamburger hamburger" id="js-hamburger">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <div class="header__in">
    <p class="header__logo"><a href="<?= $site_root; ?>"><img src="<?= $site_root; ?>assets/img/common/logo/logo.svg" alt="株式会社エイ・エヌ・エス"></a></p>
    <div class="header__navin">
      <nav class="header__nav">
        <div class="header__nav--in _navMain">
          <ul class="header__nav--list">
            <li class="header__nav--item <?= ($ac['ittrust'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>ittrust/">私たちの強み</a></li>
            <li class="header__nav--item <?= ($ac['uiux'] == 'is-active') ? 'is-active' : ''; ?>"><a href=" <?= $site_root; ?>usability/">UI/UX</a></li>
            <li class="header__nav--item js-hover-service <?= ($ac['service'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>service">サービス</a></li>
            <li class="header__nav--item <?= ($ac['case'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>case/">お客様導入事例</a></li>
            <li class="header__nav--item <?= ($ac['qa'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>qa/">Q&A</a></li>
            <li class="header__nav--item <?= ($ac['column'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>column/">コラム</a></li>
            <li class="header__nav--item js-hover-company  <?= ($ac['company'] == 'is-active') ? 'is-active' : ''; ?>"><a href="<?= $site_root; ?>company/">会社情報</a></li>
          </ul>
        </div>
        <div class="header__nav--in _navSub">
          <ul class="header__nav--list">
            <li class="header__nav--item"><a href="" target="_blank">関連サイト</a></li>
            <li class="header__nav--item"><a href="<?= $site_root; ?>recruit" target="_blank">採用情報</a></li>
          </ul>
        </div>
      </nav>
      <!--header__inner-->
      <div class="header__inquiry">
        <div class="header__inquiry--btn"><a href="<?= $site_root; ?>download" class="_download">資料請求</a></div>
        <div class="header__inquiry--btn"><a href="<?= $site_root; ?>inquiry" class="_inquiry">お問合せ</a></div>
      </div>
      <!--./header__inquiry-->
    </div>
  </div>
  <!--header__in-->
  <div class="header__toggle js-hover-target -service js-hover-service">
    <div class="header__toggle--in">
      <div class="header__toggle--img"><img src="<?= $site_root; ?>assets/img/common/header/header_service.jpg" alt="サービス一覧" loading="lazy"></div>
      <nav class="header__toggle--nav">
        <a href="<?= $site_root; ?>service/" class="header__toggle--heading">
          <span class="font-en">Service</span>
          <span class="header__toggle--heading--text">サービス一覧</span>
        </a>
        <ul class="header__toggle--list">
          <li class="header__toggle--item"><a href="<?= $site_root; ?>service/fullorder/" class="icon-arrow _after">フルオーダーシステム開発</a></li>
          <li class="header__toggle--item"><a href="<?= $site_root; ?>service/renewal/" class="icon-arrow _after">基幹システム再構築</a></li>
          <li class="header__toggle--item"><a href="<?= $site_root; ?>service/maintenance/" class="icon-arrow _after">システム保守引継ぎ</a></li>
          <!-- <li class="header__toggle--item"><a href="https://www.ans-net.co.jp/it-advice/" target="_blank" class="icon-arrow _after">IT相談</a></li> -->
          <!-- <li class="header__toggle--item"><a href="https://www.ans-net.co.jp/lp/insourcing/" target="_blank" class="icon-arrow _after">システム開発内製化支援</a></li> -->
          <li class="header__toggle--item"><a href="<?= $site_root; ?>service/bcp/" class="icon-arrow _after">BCP対策</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--header__toggle-->
  <div class="header__toggle js-hover-target -company js-hover-company">
    <div class="header__toggle--in">
      <div class="header__toggle--img"><img src="<?= $site_root; ?>assets/img/common/header/header_service.jpg" alt="会社情報" loading="lazy"></div>
      <nav class="header__toggle--nav">
        <a href="<?= $site_root; ?>company/" class="header__toggle--heading">
          <span class="font-en">Company</span>
          <span class="header__toggle--heading--text icon-arrow _after">会社情報</span>
        </a>
        <ul class="header__toggle--list">
          <li class="header__toggle--item"><a href="<?= $site_root; ?>company/philosophy/" class="icon-arrow _after">企業理念</a></li>
          <li class="header__toggle--item"><a href="<?= $site_root; ?>company/topmessage/" class="icon-arrow _after">代表メッセージ</a></li>
          <li class="header__toggle--item"><a href="<?= $site_root; ?>company/outline/" class="icon-arrow _after">会社概要・アクセス</a></li>
          <li class="header__toggle--item"><a href="<?= $site_root; ?>company/organization/" class="icon-arrow _after">当社の体制</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--header__toggle-->
</header>
<!--./header-->
