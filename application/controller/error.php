<?php

/**
 * Class Error
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Error extends Controller
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function index()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller error, using the method index()';

        require APP . 'views/_templates/header.php';
        require APP . 'views/error/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
