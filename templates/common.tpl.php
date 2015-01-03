<?php
if (null == $view) {
    die("Vue introuvable");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Les ingénieurs malgaches</title>
       
        <link rel="stylesheet" href="design/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="design/bootstrap/css/bootstrap-theme.min.css">
        
         <link rel="stylesheet" href="design/custom/css/common.css">

        <script src="design/bootstrap/js/bootstrap.min.js"></script>

    </head>
    <body>
        <header>
            <ul class="nav nav-tabs">                
                <li role="presentation" class="active"><a href="index.php?pejy=acceuil">Acceuil</a></li>
                <li role="presentation" class="active"><a href="index.php?pejy=projets">Projets</a></li>
                <li role="presentation" class="active"><a href="index.php?pejy=contact">Contact</a></li>
            </ul>
        </header>
        <div id="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php 
                        echo $view->content;
                    ?>
                </div>
            </div>
        </div>
        <footer>
            © 2015 Les ingénieurs malgaches 
        </footer>
    </body>
</html>

