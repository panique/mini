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
	/**
	 * constructor can be used to set layout/template/etc
	 */
	public function __construct() {
		parent::__construct();
	
		// set the view path to "views/home/"
		$this->view->setTemplate("home");
	}
	
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
    	// debug message to show where you are, just for the demo
    	$msg = 'Message from Controller: You are in the controller home, using the method index()';
    	
    	// the dynamic content for the view, loaded as subview, from views/home/index.phtml
    	// $content is the variable in the layout.phml file
    	// optional placeholder data can be passed as second argument
        $content = $this->view->factory('index');
    	
        // put all dynamic content in an array as var => value
        // this var(s) must be echoed in the layout.phtml file.
    	$data = array(
    		'flashMessage' => $msg,
    		'content' => $content
    	);
    	
    	// render the page
    	$this->view->render($data);
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleOne()
    {
        // debug message to show where you are, just for the demo
        $msg = 'Message from Controller: You are in the controller home, using the method exampleOne()';
        
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $content = $this->view->factory('example_one');
        
        // render the page
        $this->view->render(array('flashMessage' => $msg, 'content' => $content));
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleTwo()
    {
        // debug message to show where you are, just for the demo
        $msg = 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $content = $this->view->factory('example_two');
        
        // render the page
        $this->view->render(array('flashMessage' => $msg, 'content' => $content));
    }
}
