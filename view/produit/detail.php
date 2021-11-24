
        <div class="card">
            <?php
                $res = htmlspecialchars($v->getnomProduit());
                $res1 = htmlspecialchars($v->getPrix());
                $res2 = htmlspecialchars($v->getDescription());
                $id = htmlspecialchars($v->getnumProduit());

                echo  '<div class="name"> Produit : ' . $res . '.</div>';
                echo '<img src="img/globe.gif" />';
                echo '<div class="prixProduit">ProposÃ© au prix de : ' . $res1 . '.</div>';
                echo  '<div class="descProduit">Description : '  . $res2 . '.</div>';
                echo '<a href="../../panier.php?id='.$id.'">+</a>';
            ?>
        </div>

     
     