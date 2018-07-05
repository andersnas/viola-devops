#!/bin/bash
# Delete all container
echo '************ Removing all containers ***************'
docker rm $(docker ps -a -q)
# Delete all images
echo '************ Removing all images ***************'
docker rmi $(docker images -q)
echo '************ Baking image and starting ***************'
sudo docker-compose up
