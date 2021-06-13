# TIL
Today I learn 🎯

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

오라클 글자수 확인
> length : 문자열 길이 / lengthb : 문자열 길이를 바이트 단위로
```SQL
SELECT column_name, length(column_name), lengthb(column_name)
FROM table_name
ORDER BY lengthb(column_name) DESC;
```

오라클 컬럼 값 더하기. sum 을 쓰는 게 아니다!
``` SQL
-- column_name1 + column_name2 순으로 정렬하기
select *
from table_name
  where column_name is not null
order by (nvl(column_name1, 0) + nvl(column_name2, 0)) desc;
```

### npm install, npx create-react-app 안 될 때(실행시간 느림, rollbackfailedoptional verb npm-session)  
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


### nGrinder 테스트
1. war 파일 다운로드 : https://github.com/naver/ngrinder/releases
2. 실행
```bash
java -jar ngrinder-controller-{version}.war
```
3. 관리자 페이지 접속
```shell
localhost:8080
-- ID/PW : admin/admin
```
4. 테스트할 URL 입력 후 테스트 시작

5. 에이전트 다운로드 : 메뉴바의 admin > 에이전트 다운로드

### VSCode sftp 오류
https://github.com/liximomo/vscode-sftp/issues/915#issuecomment-842312488
```shell
[05-25 11:15:45] [error] Error: No such file
    at SFTPStream._transform (/Users/cmedia/.vscode/extensions/liximomo.sftp-1.12.9/node_modules/ssh2-streams/lib/sftp.js:412:27)
    at SFTPStream.Transform._read (internal/streams/transform.js:205:10)
    at SFTPStream._read (/Users/cmedia/.vscode/extensions/liximomo.sftp-1.12.9/node_modules/ssh2-streams/lib/sftp.js:183:15)
    at SFTPStream.Transform._write (internal/streams/transform.js:193:12)
    at writeOrBuffer (internal/streams/writable.js:358:12)
    at SFTPStream.Writable.write (internal/streams/writable.js:303:10)
    at Channel.ondata (internal/streams/readable.js:719:22)
    at Channel.emit (events.js:315:20)
    at addChunk (internal/streams/readable.js:309:12)
    at readableAddChunk (internal/streams/readable.js:284:9)
    at Channel.Readable.push (internal/streams/readable.js:223:10)
    at SSH2Stream.<anonymous> (/Users/cmedia/.vscode/extensions/liximomo.sftp-1.12.9/node_modules/ssh2/lib/Channel.js:167:15)
    at SSH2Stream.emit (events.js:315:20)
```

해결: sftp.js 파일 수정
``` shell
cd /Users/{username}/.vscode/extensions/liximomo.sftp-1.12.9/node_modules/ssh2-streams/lib
vi sftp.js
```
수정내용 : options.autoDestroy = false; 추가
```
 // For backwards compat do not emit close on destroy.
  options.emitClose = false;
  // Fix error No such file.
  options.autoDestroy = false;
```

슬랙 채널에서 bot 또는 사용자 강퇴하기. 슬랙 채널 깃허브 연동해제 <[참고](https://stackoverflow.com/questions/38209815/how-do-i-make-a-slack-bot-leave-a-channel)>
```
/remove @botname
or
/kick @botkname
```
