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
    	// the path to template directory
    	$this->view->setTemplate('error');
    	
        // load views from within the template directory
        $content = $this->view->factory('index');
        
        // render the layout with the content
        $this->view->render(array('flashMessage' => '', 'content' => $content));
    }
}
