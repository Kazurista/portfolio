<?php

mb_language('Japanese');
mb_internal_encoding('UTF-8');

session_start();

// $to = 'kazunari@kazurista.com';
// $subject = htmlspecialchars("お問い合わせ");
// $name = htmlspecialchars($_SESSION['name']);
// $mail = htmlspecialchars($_SESSION['mail']);
// $content = htmlspecialchars($_SESSION['content']);
// $header = "From:$mail";

// $body = "お名前"."\n"."$name"."\n\n"
// ."メールアドレス"."\n"."$mail"."\n\n"
// ."題名"."\n"."お問い合わせ"."\n\n"
// ."お問い合わせ内容"."\n"."$content"."\n\n";

$email = "kazunari@kazurista.com";
$subject = "お問い合わせがありました";
$to = "ny77friends@gmail.com";
$header = "From: ". mb_encode_mimeheader("お問い合わせ通知");
$body = 
    "
    以下の内容によるお問い合わせがありました。\n
    [お名前]: {$_SESSION['name']}\n
    [ご連絡先メールアドレス]: {$_SESSION['email']}\n
    [お問い合わせ内容]: {$_SESSION['content']}\n
    ";

$result = mb_send_mail($to, $subject, $body, $header);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>receive</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<?php if($result) : ?>
    <p >メールの送信が完了しました</p>
<?php else : ?>
    <p>メールの送信が失敗しました</p>
<?php endif ; ?>

<a href="index.html">戻る</a>

</body>
</html>