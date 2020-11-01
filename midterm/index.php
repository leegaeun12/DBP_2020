<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> World Database </title>
</head>

    <body>
        <h1> Search For WORLD INFO </h1>
        <h3> (1) 국가 정보 조회 </h3>
        <form action="search_country.php" method="GET">
            국가를 입력하세요.<br>
            <input type="text" name="country" placeholder="국가명">
            <input type="submit" value="확인">
        </form>

        <h3> (2) 국가별 순위 조회 </h3>
        <form action="rank.php" method="GET">
            조회할 항목을 선택하세요.<br><br>
            <input type="radio" name="area" value="GNP" checked> GNP
            <input type="radio" name="area" value="Population"> Population
            <input type="radio" name="area" value="LifeExpectancy"> LifeExpectancy
            <input type="submit" value="확인">
        </form>

        <h3> (3) 국가에 속하는 도시 조회</h3>
        <form action="search_city.php" method="GET">
            국가를 입력하세요.<br>
            <input type="text" name="city" placeholder="국가명">
            <input type="submit" value="확인">
        </form>
    </body>
</html>
