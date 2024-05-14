<?php 

/* 基本設定 --------------------------------------- 
-------------------------------------------------*/

//サイトの基本タイトル
define('SITE_TITLE','サイトタイトル');

//サイト説明文
define('SITE_DESCRIPTION','サイトディスクリプション');

//サイトキーワード
define('SITE_KEYWORDS','サイト,キーワード');

//サイトドメイン
define('SITE_DOMAIN','hogehoge.com');

//サイトプロトコル
define('SITE_PROTOCOL','https://'); /* 'http://' or 'https://' */

//サイトURL
define('SITE_URL',SITE_PROTOCOL.SITE_DOMAIN.'/');

//テストサイトドメイン
define('TEST_DOMAIN','pre.hogehoge.com');

//テストサイトプロトコル
define('TEST_PROTOCOL','https://'); /* 'http://' or 'https://' */

//テストサイトURL
define('TEST_URL',TEST_PROTOCOL.TEST_DOMAIN.'/');

//SALT確認用URL
define('SALT_URL','http://192.168.1.101/web/!TEMPLATE/');

//APPLE TOUCH ICON(ONLY FILE NAME)
define('TOUCH_ICON','');

//テーマカラー(Android Chromeでバーの色が変わります)
define('THEME_COLOR','#FFF');

//コピーライト
define('COPYRIGHT','&copy; sample.copyright');

//viewport
/**
 * width=device-width, initial-scale=1, user-scalable=no
 * width=750
 */
define('VIEWPORT','width=device-width, initial-scale=1, user-scalable=no');

/* OGP/FACEBOOK (必要であれば変更) ---------------- 
-------------------------------------------------*/

//OG:TITLE/OG:SITENAME
define('OG_TITLE',SITE_TITLE);

//OG:DESCRIPTION
define('OG_DESCRIPTION',SITE_DESCRIPTION);

//OG:URL
define('OG_URL',SITE_URL);

//OG:IMAGE
define('OG_IMAGE',SITE_URL.'assets/og/ogp.jpg');


/* TWITTER (CARD) --------------------------------- 
-------------------------------------------------*/

//TWITTER ACCOUNT (AFTER THE @)
define('TWITTER_USER','bushi_PR');

//TWITTER TEXT
define('TWITTER_TEXT',SITE_TITLE);

//TWITTER HASH TAG
define('TWITTER_HASHTAGS','');

//TWITTER CARD TYPE
define('TWITTER_TYPE','summary_large_image');

//TWITTER CARD TITLE
define('TWITTER_TITLE',SITE_TITLE);

//TWITTER CARD DESCRIPTION
define('TWITTER_DESCRIPTION',SITE_DESCRIPTION);

//TWITTER CARD IMAGE
define('TWITTER_IMAGE',OG_IMAGE);

?>