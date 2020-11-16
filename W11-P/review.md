# 1.새로 배운 내용
- 트랜잭션
```
* DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
* commit /  rollback
* 성질: 원자성, 일관성, 독립성, 지속성
```

- JDBC
```
* 자바에서 db로 쿼리문을 전송할 때 사용할 수 있는 인터페이스
* Statement, PreparedStatement, CallableStatement
* 사용할 때 반드시 try catch 문 또는 throws 처리를 해야 함
```

- 리팩토링
* select, update, insert, delete 할 때 마다 db 연결하고 종료해서 자원반납
* Connection, Statement, ResultSet 객체를 사용한 뒤 close() 메소드를 호출해서 자원 반납

# 2. 참고할 만한 사이트
<https://mozi.tistory.com/209>
TCL (트랜잭션 제어 언어)에 관해 잘 설명되어있다.

# 3. 회고
(+): 쿼리입력 시 실수했을 때가 종종 있었는데 rollback과 commit 기능을 잘 활용해야겠다. 오라클과 자바를 연동하여 실습을 하는 것이 재미있다.
(-): 자바의 코드가 아직 어려워 이해하는데 시간이 걸렸다.
(!): commit 후 rollback이 불가하니 조심히 사용하자

# 4. 동작 화면 링크
<https://youtu.be/TKOWUr6FNTw>
