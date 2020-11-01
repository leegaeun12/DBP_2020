<?php
$name = $_GET["city"];
    $link   = mysqli_connect('localhost', 'root', 'root', 'world');
    $query  = "select country.name 'country_name', city.name 'city_name'
    FROM country inner join city on country.Code = city.CountryCode
    WHERE country.name like '%{$name}%'";
    $result = mysqli_query($link, $query);
    $city_list = "";
    while ($row = mysqli_fetch_array($result)) {
            $city_list .= '<tr>';
            $city_list .= '<td>'.$row['country_name'].'</td>';
            $city_list .= '<td>'.$row['city_name'].'</td>';
            $city_list .= '</tr>';
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>search_city</title>
</head>
<body>
    <h3><a href="index.php">Search For WORLD INFO</a> | 도시 조회 </h3>
    <table border='1'>
        <tr>
            <th>나라이름</th>
            <th>도시이름</th>
        </tr>
        <tr>
            <?=$city_list?>
        </tr>
    </table>
</body>
</html>
