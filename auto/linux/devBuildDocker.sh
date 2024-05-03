#!/bin/bash

docker stop dev_deployment_container
docker rm dev_deployment_container

docker build -t dev_deployment ../../

docker run -d -p 8080:80 --name dev_deployment_container dev_deployment