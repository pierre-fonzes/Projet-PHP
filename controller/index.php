<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le Terroir</title>
    </head>
    <body>
        <nav>
            <h1>Le Terroir</h1>
            <div class="onglets">
                
                    <a href="">Accueil</a>
                    <a href="#bandeau">Présentation</a>
                    <a href="#"></a></li>
                    <a href="/controller/index.php?action=readAll">Nos Produits</a>
                
            </div>
        </nav> 
        <?php
            $DS = DIRECTORY_SEPARATOR;
            $ROOT_FOLDER = __DIR__ . $DS . "..";
            require_once "{$ROOT_FOLDER}{$DS}lib{$DS}File.php"; 
            require_once 'routeur.php';
            
        ?>

    </body>
</html>