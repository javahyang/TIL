## node.js 에서 redis-cluster 연결
https://github.com/luin/ioredis


ioredis 패키지 설치
```shell
npm i ioredis
```

접속하기
```javascript
const Redis = require("ioredis");

const cluster = new Redis.Cluster([
  {
    // host주소 뒤에 port번호 붙이고 port 값 생략하면 오류
    port: {포트번호},
    host: {master node 호스트주소},
  },
  {
    port: 6379,
    host: {slave node 호스트주소},
  },
  // 노드 개수만큼 추가
]);

// key 는 foo, value 는 bar
cluster.set("foo", "bar");

// key 값의 value 구하기 : foo 의 value 구하기
cluster.get("foo", (err, res) => {
  console.log(`res: ${res}`); // res: bar
});
```