<?php
    /**
    * Exception to handle 404 Not Found http response.
    */
    class PageNotFoundException extends Exception
    {

    }

    /**
    * Exception to handle 500 Internal Server Error http response.
    */
    class InternalServerException extends Exception
    {

    }
    // you can also make more exceptions to handle different http error response.
?>