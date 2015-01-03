<?php

    // Ceci est un site web ecrit manuellement par la communauté des universitaires malgaches
    // 
    // Si vous êtes bien en dev web et que vous avez de meilleures proposition, vous êtes 
    // le bienvenu.
    // 
    // Notre objectif est de creer quelque chose de simple mais efficace. Quelque chose que nous
    // comprenons reellement.
    // 
    // Dans tous les projets que nous realisons, tout notre esprit se tourne vers un seule but commun :
    // celui d'apporter notre part de brique au developpement de la Grande ile.
    // 
    // Tous nos remerciements,
    // 
    // NB :
    // 
    // Dans le présent projet, les jargons suivants sont utilises :
    // IM : Ingénieurs Malgaches

    /**
     * Demarrage de session
     */
    session_start();
    
    
    /**
     * Verification de la version de PHP utilisee
     */
    if (0 > version_compare(PHP_VERSION, '5')) {
        die('Ity tranokala ity dia mila PHP 5 na mihoatra');
    }

    
    /**
     * Definition des parametres globaux pour le site des IM
     */
    define('SEP', DIRECTORY_SEPARATOR ) ;
    
    define('PATH', dirname(__FILE__).SEP );
    
    define('CONFIG', PATH . 'configuration' . SEP);
    
    
    /**
     * Import du fichier de configuration
     */
    require_once CONFIG . 'config.php';
    
   defined('CONFIG_MARKER') or die('Tsy hita ilay "fichier de configuration"');
    
    
   /**
    * Import du fichier des constantes
    */
    require_once UTIL . 'common.cst.php';
    
    
    /**
     * Import du fichier des fonctions
     */
    require_once UTIL. 'common.fct.php';
    
    
    /**
     * IMport des constrolleurs
     */
    __mg::import_all(CTRL);
    
    
    /**
     * Import des vues
     */
    __mg::import_all(VIEW);
    
    
    /**
     * Reception des parametres, execution et restitution 
     * des resultats a l'utilisateur
     */
    $common_ctrl = new __Common_Controller();
    $common_ctrl->execute();
    
    $view = $common_ctrl->getView();
    
    require_once $view->getTemplate();
    
    
