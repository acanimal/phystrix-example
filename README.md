# Phystrix Example

This project is an example on how to use Phystrix tool. It contains a simply Symfony application that makes queries to a MySQL database.

The project is run using docker containers for php, mysql and hystrix-dashboard to show the phystrix metrics.

You can know a bit more about phystrix in the presentation [Resilient PHP applications with Phystrix](http://slides.com/acanimal/resiliency-php-apps).

## Requirements

You need `docker` and `docker-compose` to run this project.

## Installation

- Update your system `/etc/hosts` file and add `symfony.dev` (see the [docker-symfony](https://github.com/maxpou/docker-symfony) `README.md` file for more information).

- Inside the `docker` folder create an `.env` file based on `.env.dist`, build images with `$ docker-compose build` and run containers with `$ docker-compose up -d`.

- Go into PHP container: `$ docker-compose exec php bash` and then:
  - create database: `$ php bin/console doctrine:database:create`
  - and model scheme: `$ php bin/console doctrine:schema:update --force`
  - and fill with some fixtures `$ php bin/console doctrine:fixtures:load`.

## Notes

The `docker` folder contains the configuration needed to build the required containers for this project, mainly php-fpm, mysql and hystrix-dasboard. See `docker/README.md` file.

It is based on the project [docker-symfony](https://github.com/maxpou/docker-symfony) and [hystrix-dashboard](https://hub.docker.com/r/kennedyoliveira/hystrix-dashboard/).
