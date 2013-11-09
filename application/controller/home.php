<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home
{
    public function index()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method index()';
        // load view
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

    public function exampleOne()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method exampleOne()';
        // load view
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }

    public function exampleTwo()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        // load view
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_two.php';
        require 'application/views/_templates/footer.php';
    }
}
