# Laravel Ticketing

This is laravel ticketing service done for learning purposes.

## Installation

To install this service, firstly clone this repository. Then create database and SQL user for the project and  configure mySQL connection in environment file. The needed options to set are:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_user
DB_PASSWORD=db_pass
```

Lastly run these commands: 

    composer install

    php artisan migrate
    
    php artisan db:seed
    
    yarn install
    
    gulp --production

If everything has been executed correctly, application is ready to work.

## Afterthoughts

It was one-day long project. I am not 100% pleased with it, as I believe some things might be done better and nicer looking, but there was no time to polish it further. If I was asked what is the post important to do in this repository right now, I would answer that changing browser-session authentication to JWT using tymondesigns jwt package for laravel. The second thing would be to create more extensive validation logic as the current one only checks if the fields are passed, and that they are strings. The last thing to change would be adding logging in routes.
