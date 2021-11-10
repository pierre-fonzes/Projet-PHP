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
            $id = htmlspecialchars($v->getnumProduit());

            echo  '<div class="name"> Produit : ' . $res . '.</div>';
            echo '<img src="img/globe.gif" />';
            echo '<div class="prixProduit">ProposÃ© au prix de : ' . $res1 . '.</div>';
            echo  '<div class="descProduit">Description : '  . $res2 . '.</div>';
            echo '<a href="../../panier?id='.$id.'">+</a>';
        ?>


        <footer>
            <h1>Informations diverses</h1>
            <div class="services">
                <div class="service">
                    <h3>Politique de Confidentialité</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget efficitur magna. Maecenas blandit tincidunt eros a vulputate. 
                       </p>
                </div>
                <div class="service">
                    <h3>Paiement sécurisé</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget efficitur magna. Maecenas blandit tincidunt eros a vulputate. 
                        </p>
                </div>
                <div class="service">
                    <h3>Mentions Légales</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget efficitur magna. Maecenas blandit tincidunt eros a vulputate. 
                        </p>
                </div>
            </div>
            <p id="contact">Contact : 06 50 53 85 66 | &copy; 2021, Le Terroir.</p>
        </footer>
    </body>
</html>