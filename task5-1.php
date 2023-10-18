<!DOCTYPE html>
<html>
<head>
    <title>九九の表</title>
</head>
<body>
    <table>
        <tr>
            <th>&times;</th>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($row = 1; $row <= 9; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";
            for ($col = 1; $col <= 9; $col++) {
                $result = $row * $col;
                echo "<td>{$row}&times;{$col}={$result}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>






