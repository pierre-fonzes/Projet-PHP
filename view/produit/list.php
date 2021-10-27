<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste de Produits</title>
    </head>
    <body>
        <?php
        echo "<p> Voici la liste des différents produits : </p>";
        foreach ($tab_v as $v){
            $numProduit = $v->getnumProduit();
            echo "<p> Produit de numero produit <a href='../controller/routeur.php?action=read&numProduit=$numProduit'>$numProduit</a>";
        }
        ?>
    </body>
</html>