<?php

 class __Common_View {
     
     public $template;
     
     public $content;
     
     public function __construct() {
         $this->template = $this->getDefaultTemplate();
     }
     
     public function getDefaultTemplate() {
         return DEFAULT_TEMPLATE;
     }
     
     public function getTemplate() {
         
         return $this->template;
         
     }
 }

