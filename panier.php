<?php
session_start();

require_once('/model/ModelProduit.php');
$id = $_GET['id'];
$tabP = ModelProduit::getProduitBynum($id);

ajouterArticle($tabP->getnomProduit(),$tabP->getPrix());
echo 'votre produit est dans le panier';

function creerPanier(){
    
    if(!isset($_SESSION['Panier'])){
        $_SESSION['Panier']=array();     
    }
    return true;
}

function ajouterArticle($libelleProduit,$prixProduit){

    //Si le panier existe
    if (creerPanier())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
 

          //Sinon on ajoute le produit
        array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
        array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
       
    }
    else
    $_SESSION['Panier']=array();
}
?>