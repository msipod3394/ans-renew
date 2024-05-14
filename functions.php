<?php

/* 基本設定 --------------------------------------- 
-------------------------------------------------*/

//サイトの基本タイトル
define('SITE_TITLE', 'システム開発・再構築 ANSのIT-Trust【初期費用ゼロ】');

//サイト説明文
define('SITE_DESCRIPTION', '業務に合わせたオーダーメイドの業務系・基幹システム開発・再構築を行います。 初期費用ゼロで開発費を月額で支払える全く新しいサービスです。人材不足や業務効率化などの課題を解消するため、システムの&quot;&quot;導入効果とメリット&quot;&quot;をご提供します。中堅・中小企業様をはじめ、多くの企業様よりご依頼を受けております。');

//サイトキーワード
define('SITE_KEYWORDS', 'サイト,キーワード');

//サイトドメイン
define('SITE_DOMAIN', 'ans-net.co.jp');

//サイトプロトコル
define('SITE_PROTOCOL', 'https://'); /* 'http://' or 'https://' */

//サイトURL
define('SITE_URL', SITE_PROTOCOL . SITE_DOMAIN . '/');

//テストサイトドメイン
define('TEST_DOMAIN', 'pre.hogehoge.com');

//テストサイトプロトコル
define('TEST_PROTOCOL', 'https://'); /* 'http://' or 'https://' */

//テストサイトURL
define('TEST_URL', TEST_PROTOCOL . TEST_DOMAIN . '/');

//SALT確認用URL
define('SALT_URL', 'http://192.168.1.101/web/!TEMPLATE/');

//APPLE TOUCH ICON(ONLY FILE NAME)
define('TOUCH_ICON', '');

//テーマカラー(Android Chromeでバーの色が変わります)
define('THEME_COLOR', '#FFF');

//コピーライト
define('COPYRIGHT', '&copy; A.N.S corp. All Rights Reserved.');

//viewport
/**
 * width=device-width, initial-scale=1, user-scalable=no
 * width=750
 */
define('VIEWPORT', 'width=device-width, initial-scale=1, user-scalable=no');

/* OGP/FACEBOOK (必要であれば変更) ---------------- 
-------------------------------------------------*/

//OG:TITLE/OG:SITENAME
define('OG_TITLE', SITE_TITLE);

//OG:DESCRIPTION
define('OG_DESCRIPTION', SITE_DESCRIPTION);

//OG:URL
define('OG_URL', SITE_URL);

//OG:IMAGE
define('OG_IMAGE', SITE_URL . 'assets/og/ogp.jpg');
