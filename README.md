# docker_php
#start application
docker-compose up --build
#stop application
docker-compose down
#list containers
docker ps
#list images
docker images
#run mysql
docker-compose exec -it CONTAINER_ID bash
