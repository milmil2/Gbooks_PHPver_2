<?php

$title = $_GET['title'];
$author = $_GET['author'];
// if(isset($_GET['product'])) { $product = $_GET['product']; } 
// header('Content-type: application/json; charset=utf-8'); // ヘッダ（データ形式、文字コードなど指定）
// $title = $_POST['title'];
// $author = $_POST['author'];
// $param = $title. $author; //　やりたい処理
// //  　echoするとデータを返せる（JSON形式に変換して返す）
// echo json_encode($param);

?> 

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Book Mark確認画面</title>
</head>

<body>
<form method="POST" action="insert.php">
タイトル：<input type='text' name='title' value='<?= $title?>'>
著者：<input type='text' name='author' value='<?= $author?>'>
コメント：<textarea name="comment" cols="30" rows="10"></textarea>
<input type="submit" value="保存">
</form>

</body>
</html>


