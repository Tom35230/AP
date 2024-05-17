<?php
require_once('include/_inc_parametres.php');
require_once('include/_inc_connexion.php');


$req_prep = $cnx->prepare("UPDATE administration SET tel = :tel, 
emel = :emel, 
mdp = :mdp
WHERE ID = ID");   
$req_prep->bindParam(':tel', $_POST['tel'], PDO::PARAM_STR);     
$req_prep->bindParam(':emel', $_POST['emel'], PDO::PARAM_STR);     
$req_prep->bindParam(':mdp', $_POST['mdp'], PDO::PARAM_STR);
$req_prep->execute();
var_dump($req_prep)

?>
