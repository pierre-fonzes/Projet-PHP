<?php
require_once 'ControllerProduit.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerProduit
ControllerProduit::$action(); 
?>
