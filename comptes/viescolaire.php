<?php
require_once('../backend/include/_inc_parametres.php');
require_once('../backend/include/_inc_connexion.php');
require_once('../backend/viescolaire.php');


?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Vie scolaire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="assets/main.css" rel="stylesheet">
</head>
<body>
    

      <body class="bg-dark">
        <div class="container">
            <div class="row mt-5">
                <div class ="col" >
                    <div class ="card mt-5">
                        <div class="card-header">
                        <h2 class ="display-6 text-center">Modifier comptes vie scolaire</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text white">
                                    <td>  </td>
                                    <td> Numéro </td>
                                    <td> Emel </td>
                                    <td> Modifier </td>
                                    <td> Supprimer </td>
                                    
                                </tr>
                                <td>
                                        <?php
                                
                                    foreach ($administration as $admin) {
                                        ?>
                                            <td><?php echo $admin['tel']; ?></td>
                                            <td><?php echo $admin['emel']; ?></td>
                                            <td><a href='modifviescolaire.php' class = "btn btn-primary">Modifier</td>
                                            <td><a href="#" class="btn btn-danger">Supprimer</td>
                                        <?php
                                     }
                                        ?>

                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<main>

   