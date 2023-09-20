<?php
// 商品情報の連想配列を作成
$products = [
    [
        '商品' => '鉛筆',
        '価格' => 100,
        '税込み価格' => 110,
    ],
    [
        '商品' => '消しゴム',
        '価格' => 200,
        '税込み価格' => 220,
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>商品一覧</title>
</head>
<body>
    <h1>商品一覧</h1>
    <table border="1">
        <thead>
            <tr>
                <th>商品</th>
                <th>価格</th>
                <th>税込み価格</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['商品']; ?></td>
                    <td><?php echo $product['価格']; ?>円</td>
                    <td><?php echo $product['税込み価格']; ?>円</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>