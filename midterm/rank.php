<?php
$area = $_GET["area"];
    $link   = mysqli_connect('localhost', 'root', 'root', 'world');
    $query  = "select rank() over(order by $area desc) AS ranking, country.Code, country.Name, country.$area
    FROM country ORDER BY $area desc";
    $result = mysqli_query($link, $query);
    $rank_result = "";
    while ($row = mysqli_fetch_array($result)) {
        $rank_result .= '<tr>';
        $rank_result .= '<td>'.$row['ranking'].'</td>';
        $rank_result .= '<td>'.$row['Code'].'</td>';
        $rank_result .= '<td>'.$row['Name'].'</td>';
        $rank_result .= '<td>'.$row[$area].'</td>';
        $rank_result .= '</tr>';
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ranking</title>
</head>
<body>
    <h3><a href="index.php">Search For WORLD INFO</a> | 순위 조회 </h3>
    <table border='1'>
        <tr>
            <th>순위</th>
            <th>코드</th>
            <th>나라 이름</th>
            <th><?=$area?></th>
        </tr>
        <?=$rank_result?>
    </table>
</body>
</html>
