# 0. 동작 과정 영상 링크

# 1. 새로 배운 내용
* SSH (Secure SHell) :
   * 네트워크 상의 다른 컴퓨터에 로그인하거나, 원격 시스템에서 명령을 실행하고 다른 시스템으로 파일을 복사할 수 있도록 해주는 응용 프로그램 또는 그 프로토콜
   * 22번 포트 사용, IP spoofing 방지 기능 제공
  
* Open SSH : SSH 프로토콜을 이용하여 암호화 된 통신세션을 컴퓨터 네트워크에 제공하는 컴퓨터 프로그램. 기존 상용화된 SSH 제품군을 대체할 목적으로 오픈소스로 작성 및 배포

* Visual Studio Code로 Github에 파일 업로드 하는 방법
  ```
  > cd /var/www/html
  > git init
  > git remote add origin “.git 주소"
  > git config --global user.email “you@example.com”
  > git config --global user.name “your name”
  > git clone “.git 주소"
  //작업 시작
  ...
  //작업 후
  > git add *
  > git status
  > git commit -m “message”
  > git push origin master
  // github 에서 사용자 로그인 후 인증
  ```


# 2. 발생한 문제와 해결 과정
코드를 입력하는 과정에서 [],{},()와 . 등을 빼먹어서 생기는 systax 에러가 잦았다. 문제가 생긴 부분을 찾아 확인하는데 에러가 잘 보이지 않아 애를 먹었다. 코드를 꼼꼼히 확인하는 습관을 들여야겠다.

# 3. 참고할만한 자료
* visual studio code와 git 연동하기
<https://promobile.tistory.com/378>


# 4.현재 시스템의 문제점, 해결방안
(1) 직원 정보 조회시 출력되는 직원수가 10명 -> 출력 인원 수 입력하여 원하는 수만큼 출력 가능하게 함
(2) 신규 직원 등록 시 emp_no가 다음 직원번호로 자동 입력되게 함
(3) 직원의 이름으로 직원번호 조회를 가능하게 함


# 5. 회고
(+) 직접 문제를 찾고 이를 해결하는 코드를 작성해봄으로써 코드에 대한 이해도와 문제 해결력 또한 높아진 것 같다. 
(-) 코드를 활용하여 git을 활용하는 법이 익숙치 않다. 여러번 사용해보면서 깃을 올리고 가져오는 방법을 더 익혀야겠다.
(!) 문제가 없는 웹페이지라고 생각해도 여러 문제점이 발견될 수 있다. 후에 웹페이지를 만들게된다면 사전에 문제점을 잘 파악하여 좋은 웹페이지를 만들어야겠다.
