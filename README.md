## About this project

This is a simple project that showcases a responsive admin dashboard layout. The main goal is to make a VUE + TailwindCSS driven Laravel website running on a docker container without using Laravel Sail.

## Frameworks and Tools

-   Laravel 10.3 with Inertia
-   Docker
-   Vue 3
-   Tailwind
-   Nginx
-   PHP 8.2

## How To Use

1. Using your docker supported command line (e.g. WSL for docker windows etc), navigate to the project's root directory
2. Enter `docker-compose exec up -d`. This normally take around a couple of minutes for new installs.
3. You can enter the command `docker-compose exec app bash` to open bash command line for laravel command
4. After you're done, you can enter `docker-compose down` to shut down the docker containers
5. For vue and tailwind development, open another command line and enter `npm install`
6. Enter `npm run dev` afterwards
7. Adjust the docker configuration in the `/docker` folder as well as in `/docker-compose.yml`

## Notes

1. This project only does a couple of routes for navigation - dashboard and settings. The navigation mostly contains dummy links.
2. This doesn't connect to any database.
3. This doesn't include user authentication and registration.
4. Make sure you have docker installed and know the concept of how docker works
