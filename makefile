NAME = inception
DOCKER_COMPOSE = docker compose -f ./srcs/docker-compose.yml
DOCKER = docker

all:
	mkdir -p ./srcs/data/mysql
	mkdir -p ./srcs/data/wordpress
	${DOCKER_COMPOSE} up -d --build

up:
	${DOCKER_COMPOSE} up -d	

stop:
	${DOCKER_COMPOSE} stop	

start:
	${DOCKER_COMPOSE} start

down:
	${DOCKER_COMPOSE} down

logs:
	${DOCKER_COMPOSE} logs

status:
	${DOCKER} ps

re:		clean all

clean:	
		@docker stop $$(docker ps -qa);\
		docker rm $$(docker ps -qa);\
		docker rmi -f $$(docker images -qa);\
		docker volume rm $$(docker volume ls -q);\
		docker network rm "inception-net";

fclean:	clean
		rm -rf ./data/mysql
		rm -rf ./data/wordpress
		${DOCKER} system prune -f

.PHONY:	all up stop start down logs status re clean fclean
