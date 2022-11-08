<?php
try{
    // Connexion à la bdd
    $db = new PDO('mysql:host=localhost;dbname=task gest', 'root','');
    $db->exec('SET NAMES "UTF8"');
    echo 'La connexion a bel et bien ete etablie !!!';
} catch (PDOException $e){
    echo 'Erreur : la connexion a echouée !!! veuillez reessayer !!!  '. $e->getMessage();
    die();
}