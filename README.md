# Laravel Vue Tailwind Dashboard Using Docker

## About this project

This is a simple project that showcases a responsive admin dashboard layout. The main goal is to make a VUE + TailwindCSS driven Laravel website running on a docker container without using Laravel Sail.

## Frameworks and Tools

-   Laravel 10.3 with Inertia
-   Docker
-   Vue 3
-   Tailwind
-   Nginx
-   PHP 8.2

## How To Run The Website Application

1. Using your docker supported command line (e.g. WSL for docker windows etc), navigate to the project's root directory.
2. For first time usage or if you have changed any settings in the docker files, enter `docker-compose build` and wait for the build to finish. Normally a couple of minutes.
3. Enter `docker-compose up -d` to run the containers.
4. Enter `docker-compose exec app /bin/sh` if you want to run bash specially for laravel commands.
5. If in development mode, open a separate terminal and enter `npm run dev`.
6. After you're done, you can enter `docker-compose down` to shut down the docker containers
7. Depending on your needs, adjust the docker configurations such as `nginx.conf` or `php.ini` in the `/docker` folder as well as the settings in `/docker-compose.yml`

## Notes

1. This project only does a couple of routes for navigation - dashboard and settings. The navigation mostly contains dummy links.
2. This doesn't connect to any database.
3. This doesn't include user authentication and registration.
4. Make sure you have docker installed and know the concept of how docker works
