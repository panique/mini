<?php

/**
 * A simple PHP MVC skeleton
 *
 * @package php-mvc
 * @author Panique
 * @link http://www.php-mvc.net
 * @link https://github.com/panique/php-mvc/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// load application config (error reporting etc.)
require 'application/config/config.php';

// load application class
require 'application/libs/application.php';
require 'application/libs/controller.php';
require 'application/libs/exceptions.php';

// start the application

try {
    $app = new Application();
} catch (PageNotFoundException $e) {
    header('HTTP/1.1 404 Not Found', true, 404);
    include "application/views/errors/404.php";
} catch (InternalServerException $e) {
    header('HTTP/1.1 500 Internal Server Error', true, 500);
    include "application/views/errors/500.php";
}

// you can also catch PDOException and all base class Exception and send a
// header with 500 Internal Server Error status.