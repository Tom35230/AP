<?php
require_once('../backend/include/_inc_parametres.php');
require_once('../backend/include/_inc_connexion.php');
$res = $cnx->prepare("select tel, emel FROM administration WHERE STATUT= 2");
$res->execute();
?>