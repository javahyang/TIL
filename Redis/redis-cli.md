### redis-cli 설치
출처) https://jojoldu.tistory.com/348
```shell
# make 하기 위핸 gcc 다운
sudo yum install -y gcc

# redis-cli 설치 및 make
# ec2 계정에 따라서 root 권한으로 해야하는 경우도 있다.
wget http://download.redis.io/redis-stable.tar.gz && tar xvzf redis-stable.tar.gz && cd redis-stable && make

# redis-cli를 bin에 추가해 어느 위치서든 사용 가능하게 등록
sudo cp src/redis-cli /usr/bin/
```

### ec2에서 redis 접속
