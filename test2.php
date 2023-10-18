<!DOCTYPE html>
<html>
<head>
    <title>連想配列を使用した表</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>都市</th>
        </tr>
        <?php
        // 連想配列のデータを定義
        $people = array(
            array("名前" => "Alice", "年齢" => 25, "都市" => "東京"),
            array("名前" => "Bob", "年齢" => 30, "都市" => "大阪"),
            array("名前" => "Charlie", "年齢" => 22, "都市" => "名古屋"),
        );

        // 連想配列からデータをテーブルに出力
        foreach ($people as $person) {
            echo "<tr>";
            echo "<td>" . $person["名前"] . "</td>";
            echo "<td>" . $person["年齢"] . "</td>";
            echo "<td>" . $person["都市"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>