# TIL
Today I learn

[라라벨 슬랙 알람 설정](https://panjeh.medium.com/send-laravel-6-log-to-slack-notification-573a6d95a14e)

인텔리제이 속도 향상
* Help -> Edit Custom VM Options…
* Xms(256m), Xmx(2048m) 으로 변경
* 재시작
* 하단의 memory indicator 로 확인
(안 보이는 경우 View -> Appearance -> Status Bar Widgets -> Memory Indicator)

brew cask 로 설치할 때 오류해결
* brew install --cask adoptopenjdk11

java.lang.UnsupportedClassVersionError
* 컴파일된 자바 버전(상위)과 서버의 자바버전(하위) 다를 때 발생

인텔리제이 git auto sync 끊기(auto sync 설정되어 있으면 로컬파일이 자동으로 github에 push된다)
* 환경설정(command + ,)
* Tools > Settings Repository
* Auto Sync 체크 해제