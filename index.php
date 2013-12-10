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

// OPTIONAL: Loads the Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// Load application config (error reporting etc.)
require 'application/config/config.php';

// Load application & database class, start the application.
// The constructor in application/libs/application.php does the rest.
require 'application/libs/application.php';
require 'application/libs/database.php';
$app = new Application();
