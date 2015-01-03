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
            $key = isset($_GET['pejy']) ? __mg::secure($_GET['pejy']) : 'acceuil';
            
            switch ($key) {
                
                case 'projets' :
                    $key = 'projets';
                    break;
                
                case 'contact' :
                    $key = 'contact';
                    break;
                
                default :
                    $key = 'acceuil';
                    
            }
            $this->view->content = __mg::get_data($key);
        }
    } 

