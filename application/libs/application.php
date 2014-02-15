<?php

class Application
{
    /** @var null The controllers */
    private $url_controller = null;

    /** @var null The method (of the above controllers), often also named "action" */
    private $url_action = null;

    /** @var null Parameters */
    private $url_parameters = null;

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controllers/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for controllers: does such a controllers exist ?
        if (file_exists('./application/controllers/' . $this->url_controller . '.php')) {

            // if so, then load this file and create this controllers
            // example: if controllers would be "car", then this line would translate into: $this->car = new car();
            require './application/controllers/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();

            // check for method: does such a method exist in the controllers ?
            if (method_exists($this->url_controller, $this->url_action)) {
                if (isset($this->url_parameters)) {
                    // will translate to something like $this->home->method($params);
                    $this->url_controller->{$this->url_action}($this->url_parameters);
                } else {
                    // if no parameters given, just call the method without parameters, like $this->home->method();
                    $this->url_controller->{$this->url_action}();
                }
            } else {
                // default/fallback: call the index() method of a selected controllers
                $this->url_controller->index();
            }
        } else {
            // invalid URL, so simply show home/index
            require './application/controllers/HomeController.php';
            $home = new HomeController();
            $home->index();
        }
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->url_controller = (isset($url[0]) ? $url[0]."Controller" : null);
            $this->url_action = (isset($url[1]) ? $url[1] : null);
            $this->url_parameters = (isset($url[2]) ? $url[2] : null);

            // for debugging. uncomment this if you have problems with the URL
            // echo 'Controller: ' . $this->url_controller . '<br />';
            // echo 'Action: ' . $this->url_action . '<br />';
            // echo 'Parameters: ' . $this->url_parameters . '<br />';
        }
    }
}
