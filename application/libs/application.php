<?php

class Application
{
    /**
     * @var null The controller
     */
    private $url_controller = null;
    /**
     * @var null The method (of the above controller)
     */
    private $url_action = null;
    /**
     * @var null Parameter one
     */
    private $url_parameter_1 = null;
    /**
     * @var null Parameter two
     */
    private $url_parameter_2 = null;
    /**
     * @var null Parameter three
     */
    private $url_parameter_3 = null;

    /**
     * "Starts" the application:
     * Analyzes the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for controller: does such an controller exist ?
        if (file_exists('./application/controller/' . $this->url_controller . '.php')) {

            // if so, then load this file and create this controller
            // example: if controller would be "car", then this line would translate into: $this->car = new car();
            require './application/controller/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();

            // check for method: does such a method exist in the controller ?
            if (method_exists($this->url_controller, $this->url_action)) {

                // call the method and pass the parameters to it
                if (isset($this->url_parameter_3)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2, $this->url_parameter_3);
                } elseif (isset($this->url_parameter_2)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2);
                } elseif (isset($this->url_parameter_1)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1);
                } else {
                    // if no parameters given, just call the method without parameters
                    $this->url_controller->{$this->url_action}();
                }
            } else {
                // default/fallback: call the index() method of a selected controller
                $this->url_controller->index();
            }
        } else {
            // invalid URL, so simply show home/index
            require './application/controller/home.php';
            $home = new Home();
            $home->index();
        }
    }

    /**
     * Gets and splits the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here if just a short form of if/else, called "Ternary Operators"
            // http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->url_controller = (isset($url[0]) ? $url[0] : null);
            $this->url_action = (isset($url[1]) ? $url[1] : null);
            $this->url_parameter_1 = (isset($url[2]) ? $url[2] : null);
            $this->url_parameter_2 = (isset($url[3]) ? $url[3] : null);
            $this->url_parameter_3 = (isset($url[4]) ? $url[4] : null);
        }

        // DEBUG
        // echo 'Controller: ' . $this->url_controller . '<br />';
        // echo 'Action: ' . $this->url_action . '<br />';
        // echo 'Parameter 1: ' . $this->url_parameter_1 . '<br />';
        // echo 'Parameter 2: ' . $this->url_parameter_2 . '<br />';
        // echo 'Parameter 3: ' . $this->url_parameter_3 . '<br />';
    }
}
