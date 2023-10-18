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
        echo "<li>$dayOfWeek[0]</li>";
        echo '<li>'.$dayOfWeek[0].'</li>';
        echo $dayOfWeek[1];
        echo $dayOfWeek[2];
        echo $dayOfWeek[3];
        echo $dayOfWeek[4];
        echo $dayOfWeek[5];
        echo $dayOfWeek[6];
        foreach ($dayOfWeek as $day) {
            echo "<li>$day</li>";
        }
        ?>
    </ul>
</body>
</html>