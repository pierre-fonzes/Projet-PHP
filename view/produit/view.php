<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="https://webinfo.iutmontp.univ-montp2.fr/~ferrierl/PROJET-PHP/controller/index.php?action=readAll">Liste des Produits</a></li>
                    <li><a href="https://webinfo.iutmontp.univ-montp2.fr/~ferrierl/PROJET-PHP/controller/index.php?action=readAll&controller=produit">Trajets</a></li>
                    <li><a href="https://webinfo.iutmontp.univ-montp2.fr/~ferrierl/PROJET-PHP/controller/index.php?action=readAll&controller=utilisateur">Utilisateur</a></li>
                </ul>
            </nav>

        <?php
            // Si $controleur='voiture' et $view='list',
            // alors $filepath="/chemin_du_site/view/voiture/list.php"
            $filepath = File::build_path(array("view", $controller, "$view.php"));
            require $filepath;
        ?>
        <footer>
            <p style="border: 1px solid black;text-align:right;padding-right:1em;">
                Site de covoiturage de Adolf et son équipe</p>
        </footer>


    </body>
</html>