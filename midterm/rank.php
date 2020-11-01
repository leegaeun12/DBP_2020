<?php
$area = $_GET["area"];
    $link   = mysqli_connect('localhost', 'root', 'root', 'world');
    $query  = "select country.Code, country.Name, country.$area
    FROM country ORDER BY $area desc";
    $result = mysqli_query($link, $query);
    $rank_result = "";
    while ($row = mysqli_fetch_array($result)) {
        $rank_result .= '<tr>';
        $rank_result .= '<td>'.$row['Code'].'</td>';
        $rank_result .= '<td>'.$row['Name'].'</td>';
        if ($row[$area] == '') {
            $rank_result .= '0';
        } else {
            $rank_result .= '<td>'.$row[$area].'</td>';
        }
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
            <th>코드</th>
            <th>나라 이름</th>
            <th><?=$area?></th>
        </tr>
        <?=$rank_result?>
    </table>
</body>
</html>
