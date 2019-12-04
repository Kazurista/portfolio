<!-- POSTの中身をSESSIONへ受け渡す -->
<?php
session_start() ;
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["content"] = $_POST["content"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>confirmation</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    
<form action="receive.php" method="post">
    <h2>確認画面</h2>
    <?php echo $_POST["name"] ?>
    <?php echo $_POST["email"] ?>
    <?php echo $_POST["content"] ?>
    <input type="submit" value="CONFIRM"/>
    <a href="index.html">戻る</a>
</form>

</body>
</html>