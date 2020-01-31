<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta http-equiv="pragma" content="no-cache">
	<meta name="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache, no-store">

	<title>Kazurista</title>

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="css/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/business.css" type="text/css">

	<link rel="stylesheet" href="css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://sdk.form.run/js/v2/formrun.js"></script>


	<!-- Document Title
	============================================= -->
	<title>Kazurista | Portfolio</title>
	

</head>

<body>

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