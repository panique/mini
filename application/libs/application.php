<?php

class Application
{
    /** @var null The URL */
    private $url = null;

    /** @var null The controller */
    private $url_controller = null;

    /** @var null The method (of the above controller), often also named "action" */
    private $url_action = null;

    /** @var null Parameter one */
    private $url_parameter_1 = null;

    /** @var null Parameter two */
    private $url_parameter_2 = null;

    /** @var null Parameter three */
    private $url_parameter_3 = null;

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for url: is an URL requested ?
        if ( is_null($this->url) ) {
            // No, so we show the front page with home/index
            require './application/controller/home.php';
            $home = new Home();
            $home->index();

            return; // job is done, we have to end the constructor now
        }

        // check for controller: does such a controller exist ?
        if (file_exists('./application/controller/' . $this->url_controller . '.php')) {
            // if so, then load this file and create this controller
            // example: if controller would be "car", then this line would translate into: $this->car = new car();
            require './application/controller/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();

        } else {
            // invalid URL. Here we choose to simply show home/index, but
            // one could easily show a custom 404 error here instead
            require './application/controller/home.php';
            $home = new Home();
            $home->index();

            return; // job is done, we have to end the constructor now
        }

        // check for method: does such a method exist in the controller ?
        if (method_exists($this->url_controller, $this->url_action)) {

            // call the method and pass the arguments to it
            if (isset($this->url_parameter_3)) {
                // will translate to something like $this->home->method($param_1, $param_2, $param_3);
                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2, $this->url_parameter_3);
            } elseif (isset($this->url_parameter_2)) {
                // will translate to something like $this->home->method($param_1, $param_2);
                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2);
            } elseif (isset($this->url_parameter_1)) {
                // will translate to something like $this->home->method($param_1);
                $this->url_controller->{$this->url_action}($this->url_parameter_1);
            } else {
                // if no parameters given, just call the method without parameters, like $this->home->method();
                $this->url_controller->{$this->url_action}();
            }
        } else {
            // default/fallback: call the index() method of a selected controller
            $this->url_controller->index();
        }

    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url_parts = explode('/', $url);

            // Put URL string into the object for later use
            $this->url = $url;

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->url_controller  = (isset($url_parts[0]) ? $url_parts[0] : null);
            $this->url_action      = (isset($url_parts[1]) ? $url_parts[1] : null);
            $this->url_parameter_1 = (isset($url_parts[2]) ? $url_parts[2] : null);
            $this->url_parameter_2 = (isset($url_parts[3]) ? $url_parts[3] : null);
            $this->url_parameter_3 = (isset($url_parts[4]) ? $url_parts[4] : null);

            // for debugging. uncomment this if you have problems with the URL
            // echo 'Controller: ' . $this->url_controller . '<br />';
            // echo 'Action: ' . $this->url_action . '<br />';
            // echo 'Parameter 1: ' . $this->url_parameter_1 . '<br />';
            // echo 'Parameter 2: ' . $this->url_parameter_2 . '<br />';
            // echo 'Parameter 3: ' . $this->url_parameter_3 . '<br />';
        }
    }
}
