<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerProduit {
    public static function readAll() {
        $tab_v = ModelProduit::getAllProduits();     //appel au modèle pour gerer la BD
        $controller='produit';
        $view='list';
        $pagetitle='Liste des produits';
        require ('../view/produit/view.php');  //"redirige" vers la vue

    }
    public static function read(){
    	$numProduit = $_GET['numProduit'];
    	$v = ModelProduit::getProduitBynum($numProduit);//appel au modèle pour gerer la BD
        $controller='produit';
    	if($v == false){
            $view = 'error';
            $pagetitle = 'Produit inconnu';
    		require ('../view/produit/view.php');//redirige vers la vue de produit non reconnu 
    	}else{
            $view = 'detail';
            $pagetitle = 'Détail du Produit';    
        	require ('../view/produit/view.php');  //"redirige" vers la vue
    	}
    } 
    public static function create(){
        $view = 'create';
        $pagetitle  = 'Creation d''un produit';
        $controller = 'produit';
    	require('../view/produit/create.php'); //redirige vers la vue de création
    }
    //à faire pour la prochaine fois
    public static function created(){
    	$numProduit = $_POST['numProduit'];
    	$nomProduit = $_POST['nomProduit'];
    	$idCategorie = $_POST['idCategorie'];
    	$prix = $_POST['prix'];
    	$description = $_POST['description'];
    	$voiture = new ModelProduit($immat,$marque,$couleur);
    	$voiture->save();
    	ControllerVoiture::readAll();
        require_once '../view/voiture/created.php';//il faudrait en théorie utiliser la méthode File::build_path() mais j'ai la flemme 
        require_once '../view/voiture/list.php';
    }
}
?>
