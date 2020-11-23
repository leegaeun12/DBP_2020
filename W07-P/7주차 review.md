# 0. 동작 화면 영상
<https://youtu.be/bfqkqRTZ0po>

# 1. 새로 배운 내용
  * SQL문 연습
  * PHP 연습
```
- PHP 기본 구조: <?php ?> <?= ?>
- 주석: // , /* 여러 줄 주석 */
- 변수: 제일 앞에 $ 표시
- gettype, settype
- 문자열: “” 또는 ‘’ 로 사용
```


# 2. 문제가 발생하거나 고민한 내용
수업을 따라하는데 딱히 지장이 없었다.

# 3. 추가한 정보
직원의 번호를 입력하면 직원의 성, 이름과 부서 이름, 부서 번호가 출력되게 하였다.
```
    $query = "
        SELECT e.emp_no, e.first_name, e.last_name, de.dept_name, de.dept_no
        FROM employees e
        INNER JOIN dept_emp dp ON e.emp_no=dp.emp_no
        INNER JOIN departments de ON dp.dept_no=de.dept_no
        WHERE e.emp_no=".$emp_no;
```

# 3. 회고
* (+) inner join을 오랜만에 복습하여 잊어버렸던 기억을 되찾는 기회였다. php문이 낯설었는데 보다 더 정확히 알게 되었다.
* (-) inner join시 어떤 테이블을 조인해야할지와 어떤 쿼리를 써야할지 머리가 빠르게 돌아가지 않아 시간이 꽤 소요된다. 많은 문장을 연습하여 소요시간을 줄여야겠다.
* (!) php문은 생각보다 어려운 것이 아니였다. 조금만 공부하면 알 수 있는것을 지레 겁먹었던 것 같다.
