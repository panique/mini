<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    public function index()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method index()';
        // load view
        $this->loadView('home/index');
    }

    public function exampleOne()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method exampleOne()';
        // load view
        $this->loadView('home/example_one');
    }

    public function exampleTwo()
    {
        // debug message to show where you are
        echo 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        // load view
        $this->loadView('home/example_two');
    }
}
