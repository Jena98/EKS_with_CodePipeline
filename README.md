# EKS_with_CodePipeline

## 웹서버 환경이 구축된 도커이미지를 사용하여 파드를 구성하고, LoadBalancer를 생성
kubectl apply -f eksfile.yml

## 웹개발자들이 index.php 파일을 수정
index.php

## CodeDeploy를 사용하여 EKS 노드에 배포 
appspec.yml, codedeploy 폴더

