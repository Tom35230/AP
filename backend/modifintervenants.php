<?php
require_once('include/_inc_parametres.php');
require_once('include/_inc_connexion.php');


$req_prep = $cnx->prepare("UPDATE administration SET emel = :emel, 
mdp = :mdp          
WHERE ID = :ID");   
$req_prep->bindParam(':emel', $_POST['emel'], PDO::PARAM_STR);     
$req_prep->bindParam(':mdp', $_POST['mdp'], PDO::PARAM_STR);    
$req_prep->bindParam(':ID', $_POST['ID'], PDO::PARAM_INT);                              
$req_prep->execute();

header('Location:../comptes/intervenants.php')
?>