# TIL
Today I learn ๐ฏ

[๋ผ๋ผ๋ฒจ ์ฌ๋ ์๋ ์ค์ ](https://panjeh.medium.com/send-laravel-6-log-to-slack-notification-573a6d95a14e)

๐ ์ธํ๋ฆฌ์ ์ด ์๋ ํฅ์
* Help -> Edit Custom VM Optionsโฆ
* Xms(256m), Xmx(2048m) ์ผ๋ก ๋ณ๊ฒฝ
* ์ฌ์์
* ํ๋จ์ memory indicator ๋ก ํ์ธ
(์ ๋ณด์ด๋ ๊ฒฝ์ฐ View -> Appearance -> Status Bar Widgets -> Memory Indicator)

brew cask ๋ก ์ค์นํ  ๋ ์ค๋ฅํด๊ฒฐ
* brew install --cask adoptopenjdk11

java.lang.UnsupportedClassVersionError
* ์ปดํ์ผ๋ ์๋ฐ ๋ฒ์ (์์)๊ณผ ์๋ฒ์ ์๋ฐ๋ฒ์ (ํ์) ๋ค๋ฅผ ๋ ๋ฐ์

์ธํ๋ฆฌ์ ์ด git auto sync ๋๊ธฐ(auto sync ์ค์ ๋์ด ์์ผ๋ฉด ๋ก์ปฌํ์ผ์ด ์๋์ผ๋ก github์ push๋๋ค)
* ํ๊ฒฝ์ค์ (command + ,)
* Tools > Settings Repository
* Auto Sync ์ฒดํฌ ํด์ 

์๋ฒ์์ ์ฌ๋ณผ๋ฆญ๋งํฌ ์ค์ 
```shell
ln -Tfs {์ ๋๊ฒฝ๋ก๋ก๋ ํ์ผ ์ด๋ฆ} {์ ๋๊ฒฝ๋ก๋ก๋ ์ฌํด๋ฆญ ํ์ผ ์ด๋ฆ}
```

์ฝ์ ๊ทธ๋ฃน ์ค์ 
```javascript
// ๊ทธ๋ฃน ์ด๋ฆ์ ์๋ต๊ฐ๋ฅ
console.group('๊ทธ๋ฃน์ด๋ฆ');
console.log('๊ทธ๋ฃน์ ํฌํจ๋  ์ฝ์๋ก๊ทธ');
console.groupEnd();
```

์ค๋ผํดDB ์บ๋ฆญํฐ์ ํ์ธ
```SQL
select *
from NLS_DATABASE_PARAMETERS
where PARAMETER = 'NLS_CHARACTERSET'
   or PARAMETER = 'NLS_NCHAR_CHARACTERSET';
```

์ค๋ผํด ๊ธ์์ ํ์ธ
> length : ๋ฌธ์์ด ๊ธธ์ด / lengthb : ๋ฌธ์์ด ๊ธธ์ด๋ฅผ ๋ฐ์ดํธ ๋จ์๋ก
```SQL
SELECT column_name, length(column_name), lengthb(column_name)
FROM table_name
ORDER BY lengthb(column_name) DESC;
```

์ค๋ผํด ์ปฌ๋ผ ๊ฐ ๋ํ๊ธฐ. sum ์ ์ฐ๋ ๊ฒ ์๋๋ค!
``` SQL
-- column_name1 + column_name2 ์์ผ๋ก ์ ๋ ฌํ๊ธฐ
select *
from table_name
  where column_name is not null
order by (nvl(column_name1, 0) + nvl(column_name2, 0)) desc;
```

### npm install, npx create-react-app ์ ๋  ๋(์คํ์๊ฐ ๋๋ฆผ, rollbackfailedoptional verb npm-session)  
์์ธ : proxy ์ค์  ํ ๋ค์ npm install ํ๋ ค๊ณ  ํ  ๋ ์ค๋ฅ ๋ฐ์
```shell
npm install
npm config set proxy http://localhost:8080
npm install http-proxy-middleware --save
```
ํด๊ฒฐ
```shell
npm config rm proxy
npm config rm http-proxy
npm config set registry https://registry.npmjs.org/
npm install
```


### nGrinder ํ์คํธ
1. war ํ์ผ ๋ค์ด๋ก๋ : https://github.com/naver/ngrinder/releases
2. ์คํ
```bash
java -jar ngrinder-controller-{version}.war
```
3. ๊ด๋ฆฌ์ ํ์ด์ง ์ ์
```shell
localhost:8080
-- ID/PW : admin/admin
```
4. ํ์คํธํ  URL ์๋ ฅ ํ ํ์คํธ ์์

5. ์์ด์ ํธ ๋ค์ด๋ก๋ : ๋ฉ๋ด๋ฐ์ admin > ์์ด์ ํธ ๋ค์ด๋ก๋

6. ์์ด์ ํธ ์คํ
```shell
sh run_agent.sh
```

7. ํ์คํธ ์ค์ 
* ์์ด์ ํธ๋ณ ๊ฐ์ ์ฌ์ฉ์๋ฅผ ์๋ ฅํ๋ฉด ํ๋ก์ธ์ค, ์ฐ๋ ๋ ๊ฐ์ ์๋ ๊ณ์ฐ๋์ด ์๋ ฅ๋๋ค. ์) ์์ด์ ํธ๋ณ ๊ฐ์์ฌ์ฉ์ (99) => ํ๋ก์ธ์ค (3), ์ฐ๋ ๋ (33)
* ํ์คํธ ๊ธฐ๊ฐ ๋๋ ์คํ ํ์๋ฅผ ์ค์ ํ๋ค.
* Ramp-Up ์ฌ์ฉํ๋ฉด ๋จ๊ณ์ ์ผ๋ก ํ์คํธ ๋์ ์๋ฒ๋ฅผ ํธ์ถํ๋ค.

### VSCode sftp ์ค๋ฅ
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

ํด๊ฒฐ: sftp.js ํ์ผ ์์ 
``` shell
cd /Users/{username}/.vscode/extensions/liximomo.sftp-1.12.9/node_modules/ssh2-streams/lib
vi sftp.js
```
์์ ๋ด์ฉ : options.autoDestroy = false; ์ถ๊ฐ
```
 // For backwards compat do not emit close on destroy.
  options.emitClose = false;
  // Fix error No such file.
  options.autoDestroy = false;
```

์ฌ๋ ์ฑ๋์์ bot ๋๋ ์ฌ์ฉ์ ๊ฐํดํ๊ธฐ. ์ฌ๋ ์ฑ๋ ๊นํ๋ธ ์ฐ๋ํด์  <[์ฐธ๊ณ ](https://stackoverflow.com/questions/38209815/how-do-i-make-a-slack-bot-leave-a-channel)>
```
/remove @botname
or
/kick @botkname
```

Mac ์์ ์ํธ ์ต์๊ธธ์ด ์ค์ 
``` shell
pwpolicy -u ๊ณ์ ๋ช -setpolicy "minChars=8"
```