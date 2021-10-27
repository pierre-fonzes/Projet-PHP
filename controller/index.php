<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <h1>Le terroir<h1>
        <h3>Site de vente de produit<h3>
        <?php
            $DS = DIRECTORY_SEPARATOR;
            $ROOT_FOLDER = __DIR__ . $DS . "..";
            require_once "{$ROOT_FOLDER}{$DS}lib{$DS}File.php"; 
            require_once 'routeur.php';
            
        ?>

    </body>
</html>