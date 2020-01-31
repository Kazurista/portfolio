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
