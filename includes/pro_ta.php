<?php 
session_start();
//connexion a la base de donnees 
require_once('connect.inc.php');
//code permettant l'usage du bouton supprimer

   $ID = $_POST['ID'];
	$req = $db->prepare("DELETE FROM `tache` WHERE `tache`.`ID_TA` = $ID"); 
    $req->execute();
    echo"record has been deleted!";
	
  
	header("location: taches.php");
  

   

?>


  