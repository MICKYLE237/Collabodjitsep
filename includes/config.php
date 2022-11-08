<?php
require_once('connect.inc.php');

if(isset($_POST['email']) && ($_POST['email'])
        && isset($_POST['Nom ']) && ($_POST['Nom'])
        && isset($_POST['password']) && ($_POST['password'])){
      echo 'Bienvenue sur TASK GEST !!!';

        }

    
        
$db = null; 
//verification des donnees remplies sur le formulaire

?>