<?php
$dayOfWeek = ['月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日', '日曜日'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>1週間の配列</title>
</head>
<body>
    <ul id="weekList">
        <?php
        foreach ($dayOfWeek as $day) {
            echo "<li>$day</li>";
        }
        ?>
    </ul>
</body>
</html>