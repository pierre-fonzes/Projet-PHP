<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Descritpion du produit</title>
    </head>
    <body>
        <?php
            $res = htmlspecialchars($v->getnomProduit());
            $res1 = htmlspecialchars($v->getPrix());
            $res2 = htmlspecialchars($v->getDescription());

            echo  '<p> Produit : ' . $res . '.</p>';
            echo '<p>ProposÃ© au prix de : ' . $res1 . '.</p>';
            echo  '<p>Description : '  . $res2 . '.</p>';

        ?>
    </body>
</html>