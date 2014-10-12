<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: Base URL
 * You do not have to edit this. It automatically detects the base directory.
 */
define('URL',
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://'.
    $_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', dirname(dirname(__DIR__))).'/'
    )
);

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', 'password');
