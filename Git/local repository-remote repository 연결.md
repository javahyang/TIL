1. 로컬 레포지토리 위치에서 깃 초기화
``` shell
git init
```
2. git 설정폴더로 이동
``` shell
cd .git
```
3. config파일에서 레포지토리, 사용자정보 설정
```shell
vi config

[remote "origin"]
        url = {git 레포지토리 주소}
        fetch = +refs/heads/*:refs/remotes/origin/*
[init]
        defaultBranch = main
[user]
        name = {git username}
        email = {git email}
```        
4. 상위 폴더로 이동해서 깃 다시 초기화
```shell
git init
```