<?php
$country_name = $_GET["country"];
    $link   = mysqli_connect('localhost', 'root', 'root', 'world');
    $query  = "select country.Code, country.Continent, country.name 'country_name', city.name 'city_name'
    FROM country inner join city on country.Capital = city.ID
    WHERE country.name like '%{$country_name}%'";
    $result = mysqli_query($link, $query);
    $country_list = "";
    while ($row = mysqli_fetch_array($result)) {
                $country_list .= '<tr>';
                $country_list .= '<td>'.$row['Code'].'</td>';
                $country_list .= '<td>'.$row['Continent'].'</td>';
                $country_list .= '<td>'.$row['country_name'].'</td>';
                $country_list .= '<td>'.$row['city_name'].'</td>';
                $country_list .= '</tr>';
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>search_country</title>
</head>
<body>
    <h3><a href="index.php">Search For WORLD INFO</a> | 국가 정보 </h3>
    <table border='1'>
        <tr>
            <th>코드</th>
            <th>대륙</th>
            <th>이름</th>
            <th>수도</th>
        </tr>
        <?= $country_list ?>
    </table>
</body>
</html>
