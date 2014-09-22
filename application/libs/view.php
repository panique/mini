<?php
    class View {
        private $layoutPath = "";
        private $bodyPath = "";
        
        /**
         *
         * @var stdClass Object that will hold all variables for the view via its properties
         */
        public $viewBag = null;
        
        public function __construct($layoutPath, $bodyPath) {
            $this->layoutPath = $layoutPath;
            $this->bodyPath = $bodyPath;
        }
        
        /**
         * To be used in layout file
         */
        private function renderBody() {
            $viewBag = $this->viewBag; // Use $viewBag to access values taken from model passed by controller
            require $this->bodyPath;
        }
        
        public function renderLayout() {
            $viewBag = $this->viewBag; // Use $viewBag to access values taken from model passed by controller
            require $this->layoutPath;
        }
    }
    