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

서버에서 심볼릭링크 설정
```shell
ln -Tfs {절대경로로된 파일 이름} {절대경로로된 심폴릭 파일 이름}
```

콘솔 그룹 설정
```javascript
// 그룹 이름은 생략가능
console.group('그룹이름');
console.log('그룹에 포함될 콘솔로그');
console.groupEnd();
```

오라클DB 캐릭터셋 확인
```SQL
select *
from NLS_DATABASE_PARAMETERS
where PARAMETER = 'NLS_CHARACTERSET'
   or PARAMETER = 'NLS_NCHAR_CHARACTERSET';
```

### npm install, npx create-react-app 안 될 때(실행시간 느림)  
원인 : proxy 설정 후 다시 npm install 하려고 할 때 오류 발생
```shell
npm install
npm config set proxy http://localhost:8080
npm install http-proxy-middleware --save
```
해결
```shell
npm config rm proxy
npm config rm http-proxy
npm config set registry https://registry.npmjs.org/
npm install
```