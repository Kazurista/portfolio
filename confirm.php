<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title>求人のお問い合わせ・応募 | 横浜の企業主導型保育 ぴーまん保育園</title>
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
