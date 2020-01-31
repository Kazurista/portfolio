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
	<!-- <p class="img"><img src="/images/contact/fv.jpg" alt="求人のお問い合わせ・応募" class="pc"><img src="/images/contact/fv_sp.jpg" alt="求人のお問い合わせ・応募" class="sp"></p> -->
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
<?php

$form = "ぴーまん保育園(contact_saiyo)";
$name = htmlspecialchars(strip_tags($_POST['name']));
$tel = htmlspecialchars(strip_tags($_POST['tel']));
$email = htmlspecialchars(strip_tags($_POST['email']));

	$send_address = "ny77friends@gmail.com";
	//↑スプレッドシート連動のURLのため固定
	$mFrom1 = "kazurista@kazurista.com";

		/* 内部文字エンコーディングをUTF-8に設定 */
		mb_internal_encoding("UTF-8");
		// カレントの言語を多国語に設定する
		mb_language("uni");

		$subject = "ぴーまん保育園webサイトから【".$type."】のお問い合わせがありました。";
		$subjectUser = "ぴーまん保育園 自動返信メール";


		$userMsg = "お問い合わせありがとうございます。\n";
		$userMsg.= "下記の内容にてお問い合わせを受け付けました。\n\n";

		$userMsg.= "順次対応しておりますので、\n";
		$userMsg.= "少々お時間を頂く方もいらっしゃるかと思いますが、\n";
		$userMsg.= "何卒ご理解の程宜しくお願い申し上げます。\n";
		$userMsg.= "--------------------------------------\n\n";

		$msg.= "お名前: ".$name."\n\n";
		$msg.= "電話番号: ".$tel."\n\n";
		$msg.= "E-mail: ".$email."\n\n";

		$msgEnd.= "ぴーまん保育園\n";
		$msgEnd.= "神奈川県横浜市港北区新横浜2丁目6番地13\n";
		$msgEnd.= "新横浜ステーションビル7階A室\n\n";
		$msgEnd.= "受付時間：平日10:00〜17:00（祝日を除く）\n";
		$msgEnd.= "サイトURL：http://www.pman-hoiku.com/\n";
		$msgEnd.= "電話番号：045-594-8945\n";
		$msgEnd.= "--------------------------------------";

		//ユーザーに送る
		$to	= $email;
		$message = $userMsg.$msg.$userMsgEnd.$msgEnd;
		$headers = "From: pman-hoiku\r\n".
		    "Reply-To: pman-hoiku\r\n".
		    'X-Mailer: PHP/'.phpversion();
		mb_send_mail($to, htmlspecialchars($subjectUser), htmlspecialchars($message), $headers);

		//管理者に送る
		$to	= $mFrom;
		$message = $msg;
		$headers = 'From: '.$to."\r\n".
		    'Reply-To: '.$to."\r\n".
		    'X-Mailer: PHP/'.phpversion();
		mb_send_mail($to, htmlspecialchars($subject), htmlspecialchars($message), $headers);

		$mail_subject2 = "ぴーまん保育園webサイトから".$type."のお問い合わせがありました。(contact_x)";	// 件名
		$mail_body2 .= "";
		$mail_body2 .= "<form>".mb_convert_kana($form,"KV","utf-8")."</form>\n";
		$mail_body2 .= "<name>".mb_convert_kana($name,"KV","utf-8")."</name>\n";
		$mail_body2 .= "<kana>".mb_convert_kana($kana,"KV","utf-8")."</kana>\n";
		$mail_body2 .= "<tel>".mb_convert_kana($tel,"KV","utf-8")."</tel>\n";
		$mail_body2 .= "<fax>".mb_convert_kana($fax,"KV","utf-8")."</fax>\n";
		$mail_body2 .= "<email>".mb_convert_kana($email,"KV","utf-8")."</email>\n";
		$mail_body2 .= "<type>".mb_convert_kana($type,"KV","utf-8")."</type>\n";
		$mail_body2 .= "<certificate>".mb_convert_kana($certificate,"KV","utf-8")."</certificate>\n";
		$mail_body2 .= "<job>".mb_convert_kana($job,"KV","utf-8")."</job>\n";
		$mail_body2 .= "<start>".mb_convert_kana($start,"KV","utf-8")."</start>\n";
		$mail_body2 .= "<address>".mb_convert_kana($address,"KV","utf-8")."</address>\n";
		$mail_body2 .= "<birth>".mb_convert_kana($birth,"KV","utf-8")."</birth>\n";
		$mail_body2 .= "<age>".mb_convert_kana($age,"KV","utf-8")."</age>\n";
		$mail_body2 .= "<gender>".mb_convert_kana($gender,"KV","utf-8")."</gender>\n";
		$mail_body2 .= "<class>".mb_convert_kana($choose,"KV","utf-8")."</class>\n";
		$mail_body2 .= "<gakunen>".mb_convert_kana($gakunen,"KV","utf-8")."</gakunen>\n";
		$mail_body2 .= "<text>".mb_convert_kana($other,"KV","utf-8")."</text>\n";
		$mail_body2 .= "<code>".mb_convert_kana($code,"KV","utf-8")."</code>\n";

		//gmailに送る
		$to	= $send_address;
		$message = $mail_body2;
		$headers = 'From: '.$send_address."\r\n".
		    'Reply-To: '.$send_address."\r\n".
		    'X-Mailer: PHP/'.phpversion();
		mb_send_mail($to, htmlspecialchars($mail_subject2), $message, $headers);

?>
<div class="complete">
	<div class="textWrap">
		<p>内容の送信が完了しました。<br>
			問い合わせが混み合っている場合、順次対応を行わせていただきます。<br>
			ありがとうございました。</p>
	</div>
    <p class="btnA"><a href="/">トップへ戻る</a></p>
</div>

</section>
</article><!-- / #contact -->

</body>
</html>