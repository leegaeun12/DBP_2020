# 1.새로 배운 내용
### 데이터베이스를 다루는 방법

1. 웹 프로그래밍 언어에 SQL 삽입하기
- JSP, ASP, PHP 등 웹 프로그래밍 언어에 SQL 삽입
- SQL문의 결과를 웹 브라우저에서 확인할 수 있음
- 웹 서버가 데이터베이스 연동을 지원

2. SQL 전용 언어 사용하기
- 데이터베이스를 다루는 기능이 뛰어나고 다루기 쉬움
- GUI 구축 기능이 없어 독립적으로 사용하기 어려움 (프로시저나 함수 등으로 구현하고 다른 프로그램에서 호출하여 사용)

3. 일반 프로그래밍 언어에 SQL 삽입하기
- SQL 문은 DBMS의 컴파일러가 처리
- 일반 프로그래밍 언어로 작성된 응용 프로그램에서 데이터를 관리 및 검색
- SQL 단독으로 사용할 때보다 복잡한 로직을 쉽게 구현할 수 있음

4. 데이터베이스 관리 기능과 비주얼 프로그래밍 기능을 갖춘 GUI 기반 소프트웨어 개발 도구 사용


# 2.문제 발생 / 고민 / 해결 과정
SQL Developer 설치 후 local-system을 만드는 과정에서 테스트시 success가 뜨지 않고 Listener refused the connection with the following error : ORA-12505, TNS: listener does not currently know of SID given in connect descriptor 라는 오류가 발생했다. 구글링을 해보고 여러 방법을 시도하여 보았지만 해결이 되지 않았다. 이전에 오라클 12C를 설치한 적이 있었는데 혹시 충돌하는 것이 아닐까 생각되어 11g와 12c를 모두 제거하고 11c를 재설치하니 SQL Developer에서의 접속에 성공하였다.


# 3.참고할 만한 내용
<https://hunit.tistory.com/211>
SQL Developer에서 (listener)관련 오류 발생 시 해결하는 과정

# 4.회고
- (+) SQL Developer, 이클립스 등 다양한 툴들을 다뤄볼 수 있어 좋았다. 
- (-) 설치하는데 시간이 얼마 안걸릴것이라 생각했는데 예상치 못한 오류도 많이 발생하고 이전 오라클 버전을 제거하는데도 시간이 오래걸려 생각보다 시간이 많이 소요되었다. 
- (!) 자바언어를 안배우고 수업을 듣는지라 걱정이 된다. 뒤쳐지지 않고 잘 따라갈 수 있도록 수업 전 자바 공부를 해놓아야겠다.
  
