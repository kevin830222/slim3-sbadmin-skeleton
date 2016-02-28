# Slim 3 - SB Admin 2 Skeleton

This project integrate Slim 3 skeleton and SB Admin 2 template.

## Create your project:

    $ composer create-project kevin830222/slim3-sbadmin-skeleton my-app

### Run it:

1. `$ cd my-app`
2. `$ npm install`
3. `$ gulp`
4. `$ php -S 0.0.0.0:8888 -t public public/index.php`
5. Browse to http://localhost:8888


## Key directories

* `app`: Application code
* `app/src`: All class files within the `App` namespace
* `app/templates`: Twig template files
* `cache/twig`: Twig's Autocreated cache files
* `log`: Log files
* `public`: Webserver root
* `vendor`: Composer dependencies

## Key files

* `public/index.php`: Entry point to application
* `app/settings.php`: Configuration
* `app/dependencies.php`: Services for Pimple
* `app/middleware.php`: Application middleware
* `app/routes.php`: All application routes are here
* `app/src/Action/HomeAction.php`: Action class for the home page
* `app/templates/home.twig`: Twig template file for the home page

