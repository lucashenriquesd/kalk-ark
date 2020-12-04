*Requirements

- Docker/Docker-compose


*Setup

- Extract the zip/rar
- Get inside the extracted folder
- docker-compose up -d --build --force-recreate
- Verify if mysql/db-data has full permissions, if not, exec chmod -R 777 db-data
- Verify if app/lumen/storage has full permissions, if not, exec chmod -R 777 storage


* Usage

Use Postman or equivalent on the following routes

*Routes

- Show all jobs: GET http://127.0.0.1/jobs
- Add a job: POST http://127.0.0.1/jobs
    You will need to send a 'form' data of:
        'title' => 'required|max:256|string',
        'description' => 'required|max:10000|string',
        'status' => 'required',// enabled or disabled. Enabled by default
        'workplace' => 'nullable|string',
        'salary' => 'nullable|numeric',

* How was used in this project

- Docker/Docker-compose(Nginx and PHP share the same path volume. MySQL has a db-data sync folder)
- Laravel Lumen 8.x
- Stateless API Concept
- PHP Composer
- GIT
- PHP 7.4
- MySQL 5.7
- Laravel Facades
- Laravel Eloquent
- Laravel Validate
- Laravel Migration
- Postman
- Routes are using HTTP verbs like GET, POST, PUT and DELETE
- Exception Handler converting all error responses to JSON Response
- Middleware Auth
- Laravel Artisan make:database command was created, but it will be removed due to solving the issue with Docker

* Still to be implemented

- Laravel Lumen Token based login
- TDD
- Front-end