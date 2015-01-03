<?php

/*
 * "fonctions" fampiasa matetika
 */

    class __mg {
        
        public static function startsWith($haystack, $needle) {
   
            return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
        }
        
        public static function endsWith($haystack, $needle) {
   
            return $needle === "" || strpos($haystack, $needle, strlen($haystack) - strlen($needle)) !== FALSE;
        }

        public static function import($resource) {
            require_once $resource;
        }
        
        public static function import_all($directory) {
            
            if( ! __mg::endsWith($directory, '*' . PHP_FILE_EXTENSION)) {
                $directory .= '*' . PHP_FILE_EXTENSION;
            }
            
            $resources = glob($directory);
            
            foreach ($resources as $resource) {
                require_once $resource;
            }
        }
        
        public static function secure($value) {
            return htmlspecialchars(strip_tags($value));
        }
        
        public static function get_data($key) {
        
            $resource = DATA . $key . '.htm';
            
            if(file_exists($resource)) {
                
                $handle = fopen($resource, 'r');
                
                if(!$handle) {
                    die("Impossible de recuperer les donnees.");
                } 
                
                $content = fread($handle, filesize($resource));
                
                fclose($handle);
                return $content;
            } else {
                die('Resource introuvable');
            }
        }
        
        
    }

