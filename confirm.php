<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
require '../wp/wp-blog-header.php';
?>
<!doctype html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TQ67V9R');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title>求人のお問い合わせ・応募 | 横浜の企業主導型保育 ぴーまん保育園</title>
<meta property="og:type" content="website">
<meta property="og:title" content="求人のお問い合わせ・応募">
<meta property="og:url" content="http://www.pman-hoiku.com/contact_saiyo">
<meta property="og:image" content="/images/fbimg.jpg">
<meta property="og:site_name" content="横浜の企業主導型保育 ぴーまん保育園">
<meta property="og:email" content="">
<link rel="shortcut icon" href="/images/icon.png" />
<link rel="apple-touch-icon" href="/images/icon.png" />
<link rel="stylesheet" type="text/css" media="all" href="/module/css/import.css">
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="/module/js/hoverfix.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="/module/css/subpage.css">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQ67V9R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="main_hd" class="mainhd">
	<div class="hdborder">
		<div class="inner">
<h1>求人のお問い合わせ・応募 | 横浜の企業主導型保育</h1>
		</div>
	</div>
	<div class="inner">
		<div class="clearfix">
			<div class="logoWrap">
				<p class="hdlogo"><a href="/"><img src="/images/logo.png" alt="ぴーまん保育園"></a></p>
			</div><!-- / .logoWrap -->
			<div class="hdCtrl clearfix">
			<p class="tel"><a href="tel:0455948945">045-594-8945</a></p>
			<address>受付時間：平日9:00〜18:00（祝日を除く）<br>
			神奈川県横浜市港北区新横浜2丁目6番地13<br>
			新横浜ステーションビル7階</address>
			</div><!-- / .hdCtrl -->
		</div>
		<nav class="clearfix">
			<ul>
				<li><a class="home" href="/"><span class="hideText">ホーム</span></a></li>
				<li><a class="guidance" href="/guidance"><span class="hideText">入園のご案内</span></a></li>
				<li><a class="about" href="/about"><span class="hideText">当園について</span></a></li>
				<li><a class="scene" href="/schedule"><span class="hideText">園での生活</span></a></li>
				<li><a class="faq" href="/faq"><span class="hideText">よくある質問</span></a></li>
				<li class="sp"><a class="news" href="/news"><span class="hideText">ブログ</span></a></li>
			</ul>
			<ul>
				<li><a href="/guidance"><img src="/images/hd_btn_info.png" alt="入園のご案内" class="i_hover"><span class="hideText">入園のご案内</span></a></li>
				<li><a href="/news"><img src="/images/hd_btn_blog.png" alt="入園のご案内" class="i_hover"><span class="hideText">ブログ</span></a></li>
				<li><a href="/contact_hoiku/"><img src="/images/hd_btn_mail.png" alt="メールでのお問い合わせ" class="i_hover"><span class="hideText">メールでのお問い合わせ</span></a></li>
			</ul>
		</nav>
	</div><!-- / .inner -->

<div class="hdImg">
	<h2>求人のお問い合わせ・応募</h2>
	<p class="img"><img src="/images/contact/fv.jpg" alt="求人のお問い合わせ・応募" class="pc"><img src="/images/contact/fv_sp.jpg" alt="お問い合わせ" class="sp"></p>
</div>
<div class="breadLink">
	<ul>
		<li><a href="/">ぴーまん保育園TOP</a></li>
		<li>求人のお問い合わせ・応募</li>
	</ul>
</div>
<div class="sp">
	<ul class="aboutBtn">
		<li><a href="/guidance/"><img src="/images/hd_btn_info_sp.png" alt="入園のご案内" class="i_hover"><span class="hideText">入園のご案内</span></a></li>
		<li><a href="/contact_hoiku/"><img src="/images/hd_btn_mail_sp.png" alt="メールでのお問い合わせ" class="i_hover"><span class="hideText">メールでのお問い合わせ</span></a></li>
	</ul>
</div>
</header>

<div id="container" class="clearfix">
<article id="contact">
<section>
	<div class="titleSet"><h3><span>求人のお問い合わせ・応募</span></h3></div>
	<p class="text">下記フォームへ必要事項をご入力ください。<br>
	【仮申し込みの場合】以下のフォームにて仮申し込みに必要な項目のご入力をお願い致します。<br>
	後日、担当者よりご連絡いたします。
	<span>※赤枠の箇所は必須項目です。</span></p>
<?php

$name = htmlspecialchars(strip_tags($_POST['name']));
$tel = htmlspecialchars(strip_tags($_POST['tel']));
$email = htmlspecialchars(strip_tags($_POST['email']));

?>
</section>
</article><!-- / #contact -->
</body>
</html>
