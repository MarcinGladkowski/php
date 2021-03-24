run:
	docker-compose run --rm php bash

up:
	docker-compose up -d

stop:
	docker-compose stop

force:
	docker-compose up -d --build --force-recreate