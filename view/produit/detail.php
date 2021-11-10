<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Descritpion du produit</title>
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
            $res = htmlspecialchars($v->getnomProduit());
            $res1 = htmlspecialchars($v->getPrix());
            $res2 = htmlspecialchars($v->getDescription());

            echo  '<div class="name"> Produit : ' . $res . '.</div>';
            echo '<img src="img/globe.gif" />'
            echo '<div class="prixProduit">ProposÃ© au prix de : ' . $res1 . '.</div>';
            echo  '<div class="descProduit">Description : '  . $res2 . '.</div>';
            echo '<form action="/panier.php" method="post">
                  <input name="ajouterpanier" type="button" value="Ajouter au panier">
                  </form>';
            require_once('panier.php');
            if($_POST['ajouterpanier']){
                ajouterArticle($res, $res1);
            }
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