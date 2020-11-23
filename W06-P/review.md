## 1. 새로 배운 내용
  * SSH (Secure SHell) :
  -네트워크 상의 다른 컴퓨터에 로그인하거나, 원격 시스템에서 명령을 실행하고 다른 시스템으로 파일을 복사할 수 있도록 해주는 응용 프로그램 또는 그 프로토콜
  -22번 포트 사용, IP spoofing 방지 기능 제공
  
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
