# Docker.Jenkins

***
### Docker Install
***
- yum -y install docker
- systemctl start docker
- systemctl enable docker
#### https://hub.docker.com/r/jenkins/jenkins
- docker pull jenkins/jenkins:lts-jdk11
- docker run -itd --name jenkins -p 8085:8080 docker.io/jenkins/jenkins
Docker 로 Jenkins 컨테이너 설치, 8085번 포트 허용
![image](https://user-images.githubusercontent.com/77655831/137058507-ec7f10fe-4d39-411b-9ced-6bf74c540ddd.png)
***
### Docker 명령어
- docker ps -a #모든 컨테이너 출력(정지 컨테이너 포함)
- docker ps #실행 중인 컨테이너만 출력
- docker start jenkins #jenkins 이름의 컨테이너 시작
- docker restart jenkins #jenkins 이름의 컨테이너 재시작(재부팅)
- docker attach jenkins #컨테이너에 접속(bash 쉘 접속)
- docker stop jenkins #jenkins 이름의 컨테이너 종료
- docker rm jenkins #jenkins 이름의 컨테이너 삭제
- docker rm -f jenkins #jenkins 이름의 컨테이너 강제삭제
- docker exec -it jenkins /bin/bash # 젠킨스 이름의 shell로 접근
![image](https://user-images.githubusercontent.com/77655831/137059007-0a165e28-f251-4ea5-9ebe-3e97c8d7f0c1.png)
***
### Jenkins 사용
![image](https://user-images.githubusercontent.com/77655831/137059282-57bf0969-7216-4c39-b40f-b75b4c10e19c.png)
![image](https://user-images.githubusercontent.com/77655831/137073519-d4f8d001-dcbd-4685-97e3-d16d0e4f5513.png)

### AWS 환경에서 진행
***
![image](https://user-images.githubusercontent.com/77655831/137076591-0d8c69d9-f6d0-4d4e-9030-7adc27f2a052.png)


### Github-Jenkins 연동
***
![image](https://user-images.githubusercontent.com/77655831/137079490-1a8626de-8301-409b-8b92-28729110c41a.png)
![image](https://user-images.githubusercontent.com/77655831/137083477-171eaf2d-bc2c-42a3-9c5f-b85ab0244628.png)


