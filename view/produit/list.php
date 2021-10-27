<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        echo "<p> Voici la liste des différentes voitures : </p>";
        foreach ($tab_v as $v){
            $immat = $v->getImmatriculation();
            echo "<p> Voiture d'immatriculation <a href='../controller/routeur.php?action=read&immat=$immat'>$immat</a>";
        }
        ?>
    </body>
</html>