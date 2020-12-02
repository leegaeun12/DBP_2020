# 새로 배운 내용
## JSP
  : HTML 내부에 java 코드를 입력하여, 웹 서버에서 동적으로 웹브라우저를 관리하는 언어

- 템플릿 데이터 : 클라이언트로 출력되는 콘텐츠 ( HTML, JavaScript, CSS, JSON, XML, 일반 텍스트 등)
- JSP 전용 태그 : 서블릿 생성 시 특정 자바 코드로 바뀌는 태그
  - Directives (지시자) <%@ %>
      - 지시자 속성과 값에 따라 자바 코드 생성
      - page : jsp 페이지 속성 정의
      - taglib : 태그 라이브러리 선언
      - include
  - Scriptlet Elements (스크립트릿) <% %>
      - <% 자바 코드 %>
  - Declarations (선언문) <%! %>
      - 서블릿 클래스의 멤버(변수, 메소드)를 선언할 때 사용
      - 작성 위치는 상관 없음
  - Expressions (표현식) <%= %>
      - 문자열 출력
  - <jsp:...>
- JSP 내장 객체 : JSP 기술 사양 에 정의된 필수적인 9개 객체
   - request, response, pageContext, session, application, config, out, page, exception
   - JSP에서 별도 선언 없이 사용 가능

# 문제 발생 + 해결과정
1. Tomcat Server 설정 시 Tomcat이 보이지 않았다. 재설치도 해보고 구글링을 하여 필요한 소프트웨어 설치도 모두 해보았지만 해결이 되지 않았다. 1시간 씨름 끝에 salck의 qna 채널을 확인하니 나와 비슷한 상황을 겪고있는 학생들이 많았다. 한 학생분이 올려주신 링크로 재설치하니 문제가 바로 해결되었다.
2. database connection에서 오라클 연결시 계속하여 ping failed 오류가 발생했다. 오라클이 실행중임에도 불구하고 계속하여 연결이 되지 않았다. Host 설정을 Server에서 localhost로 변경하였더니 해결되었다. 

# 참고할만한 내용
<https://sup2is.tistory.com/26>
* Tomcat Server 추가할때 Tomcat 8 server가 보이지 않을때 해결방법이다. 나의 경우에는 다른 경로로 재설치하여 해결하였지만 이런 방법도 있다.


# 회고
* (+) jsp를 처음 사용해보았는데 구동방법이 신선했다. 오류가 많이 발생한 회차였는데 끝까지 포기하지 않고 제출한것이 뿌듯하다.
* (-) 오류가 너무 많았다... 해결하는 방법도 잘 모르겠고 구글링도 통하지 않아 가장 헤맸던 주차였던 것 같다. slack의 qna채널에서 같은 오류가 발생하는 학생들의 질문을 통한 교수님과 학생들의 답변을 참고했다. qna채널이 있어 정말로 다행이라는 생각이 들었다.
* (!) jsp문법이 아직 낯설어 더 공부해야겠다.

# 동작 영상 링크
<https://youtu.be/RTpmwVlWAj4>
