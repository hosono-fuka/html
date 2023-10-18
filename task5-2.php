<!DOCTYPE html>
<html>
<head>
    <title>1週間の曜日</title>
</head>
<body>
    <ul>
        <?php
        // 1週間の曜日を配列に格納
        $weekdays = array("月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日", "日曜日");

        // 配列の要素を順番に表示
        $index = 0;
        while ($index < count($weekdays)) {
            echo "<li>{$weekdays[$index]}</li>";
            $index++;
        }
        ?>
    </ul>
</body>
</html>




