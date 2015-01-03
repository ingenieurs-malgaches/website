<?php

   
    class __Common_Controller {
        
        public $view;
        
        public function __construct() {
            $this->view = new __Common_View();
            
        }
        
        public function getView() {
            return $this->view;
        }
        
        public function execute() {
            
            // mbola tsy vita
        }
    } 

