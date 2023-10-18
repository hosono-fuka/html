<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// 1から12までのランダムな整数を生成
$randomNumber = mt_rand(1, 12);

// ランダムな月の季節を決定
$season = "";
switch ($randomNumber) {
    case 12:
    case 1:
    case 2:
        $season = "冬";
        break;
    case 3:
    case 4:
    case 5:
        $season = "春";
        break;
    case 6:
    case 7:
    case 8:
        $season = "夏";
        break;
    case 9:
    case 10:
    case 11:
        $season = "秋";
        break;
}

echo "{$randomNumber}月は{$season}の季節です。";
?>