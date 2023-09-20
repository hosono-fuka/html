<?php
// 消費税率
$taxRate = 10; // 10%

// 商品情報（変数を文字列で作成）
$product1Name = '鉛筆';
$product1Price = 100;
$product2Name = '消しゴム';
$product2Price = 200;

// 税込価格を計算
$product1Total = $product1Price * (1 + ($taxRate / 100));
$product2Total = $product2Price * (1 + ($taxRate / 100));
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>商品価格計算</h1>
    <p>現在、消費税は<?php echo $taxRate; ?>%です。</p>
    <p><?php echo $product1Name; ?>が<?php echo $product1Price; ?>円で、税込<?php echo $product1Total; ?>円です。</p>
    <p><?php echo $product2Name; ?>が<?php echo $product2Price; ?>円で、税込<?php echo $product2Total; ?>円です。</p>
</body>
</html>




