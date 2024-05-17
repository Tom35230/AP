<?php

try {
    $cnx = new PDO('mysql:host=' .$HOTE. ';port =' .$PORT. ';dbname='. $BDD,  $USER, $PWD);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
// récupération et affichage d'un message en cas d'erreur de connexion
catch (Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'</br/>';
    echo 'N° : '.$e->getCode();
}                        
?>