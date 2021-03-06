## 1. 개발 환경 소개
#### 1. 데이터베이스: mysql
  - mysql은 여러 분야에 적용되어 제품의 안정성이 검증되어 가장 많이 쓰이며, 선호되는 Open Source DBMS이다.
  - MariaDB가 MySQL에 비해 몇 가지 속도 향상이 있다고도 하지만 mysql 역시 크기가 큰 데이터 집합도 빠르고 효과적으로 처리할 수 있다.

#### 2. (백엔드) 서버 사이드 언어: php
#### 3. (프로트엔드) 클라이언트 사이드 언어: html
#### 4. 웹 서버: 윈도우
  - 리눅스는 오픈 소스 소프트웨어 형태로 제공되는 프로그램을 활용하여 다양한 웹서비스를  구축하고 웹을 통한 작업환경을 구축할 수 있다는 장점이 있다. 하지만 이번 과제에서는 조금은  낯선 리눅스 명령어를 사용하여 작업하는 것 보다 GUI로 되어있는 윈도우 환경에서 작업하는 것이 좀 더 수월할 것이라 생각하여 윈도우를 선택하였다.

***

## 2. 사용데이터
#### mysql의 샘플 데이터베이스인 world database를 사용하였다.
![ERD of WORLD DB](http://4.bp.blogspot.com/-BUJLojNo4ik/UNIqWTKGwHI/AAAAAAAAAAY/DA4YD6EGJh4/s1600/world_erd.png)

WORLD 데이터베이스에는 city, country, countrylanguage 3개의 테이블이 있으며 ERD는 위의 그림과 같다.

***

## 3. 발견한 정보
#### 1. 국가의 국가 코드, 대륙, 국가명, 수도 조회가 가능하다. 
> 폼에 값을 입력하지 않고 그냥 확인을 누르면 모든 국가의 정보가 조회되고, 폼에 국가명을 입력하고 확인을 누르면 입력한 국가의 정보만이 조회된다. country 테이블의 capital(수도) 컬럼이 int 타입으로 지정되어 있어, country와 city 테이블을 inner join하여 수도명이 출력되도록 하였다.

#### 2. GNP / Population / LifeExpectancy 항목 중 하나를 선택하고 조회하면 해당 항목의 국가별 순위를 확인할 수 있다. 
> country 테이블에서 순위(rank()), 코드, 나라 이름, 선택한 항목을 내림차순 정렬한 값이 출력되도록 하였다.

#### 3. 국가명을 입력하면 해당 국가에 속하는 도시 조회가 가능하다. 
> country 테이블의 code와 city 테이블을 inner join하여 나라이름과 도시이름이 출력되게 하였다.

***

## 4. 동작 동영상
<https://www.youtube.com/watch?v=A6W973BbAVU>
