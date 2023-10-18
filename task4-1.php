<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
 // 0から99のランダムな数値を生成
 $randomNumber = mt_rand(0, 99);

 if ($randomNumber < 5) {
    $fortune = "大凶";
 } elseif ($randomNumber < 20) {
    $fortune = "凶";
 } elseif ($randomNumber < 50) {
     $fortune = "吉";
 } elseif ($randomNumber < 80) {
     $fortune = "中吉";
 } else {
     $fortune = "大吉";
}

echo "今日の運勢は{$fortune}です。";
?>