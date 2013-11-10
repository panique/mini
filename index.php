<?php

/**
 * A simple PHP MVC skeleton
 *
 * @package php-mvc
 * @author Panique
 * @link http://www.php-mvc.com
 * @link https://github.com/panique/php-mvc/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// OPTIONAL: Loads the Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// Load application config (error reporting etc.)
require 'application/config/config.php';

// Load application class, start the application.
require 'application/libs/application.php';
require 'application/libs/controller.php';
$app = new Application();
