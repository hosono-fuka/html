<!DOCTYPE html>
<html>
<head>
    <title>連想配列を使用した表</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>商品</th>
            <th>価格</th>
            <th>税込み価格</th>
            <th>1Dzの価格</th>
        </tr>
        <?php
        // 連想配列のデータを定義
        $people = array(
            array("商品" => "鉛筆", "価格" => 110),
            array("商品" => "消しゴム", "価格" => 220),
        );

        // 連想配列からデータをテーブルに出力
        foreach ($people as $person) {
            echo "<tr>";
            echo "<td>" . $person["商品"] . "</td>";
            echo "<td>" . $person["価格"] . "</td>";
            echo "<td>" . $person["都市"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>