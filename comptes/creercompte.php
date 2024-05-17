<?php
require_once('../backend/include/_inc_parametres.php');
require_once('../backend/include/_inc_connexion.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil Administrateur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="assets/main.css" rel="stylesheet">
</head>
<body>


      

<main>

<h3 style="text-align:center ">Quel compte voulez vous créer ?</h3>

    <form style="text-align:center " method="post" action="creerintervenant.php">
    <input type="submit" value="Intervenants" />
    </form>

    <form style="text-align:center " method="post" action="creergestionnaire.php">
    <input type="submit" value="Gestionnaires" />
    </form>

    <form style="text-align:center " method="post" action="creerviescolaire.php">
    <input type="submit" value="Vie scolaire" />
    </form>

    <form style="text-align:center " method="post" action="../admin/modifcomptes.php">
    <input type="submit" value="Modifier comptes" />
    </form>

</main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>