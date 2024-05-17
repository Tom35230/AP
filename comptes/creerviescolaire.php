<?php
require_once('../backend/include/_inc_parametres.php');
require_once('../backend/include/_inc_connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier profil vie scolaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Créer un profil vie scolaire</h4>
                    </div>
                    <div class="card-body">

                        <form action="../backend/creerviescolaire.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="title">Numéro</label>
                                <input type="text" name="tel" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="emel">Emel</label>
                                <input type="text" name="emel" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="pwd">Mot de passe</label>
                                <input type="text" name="mdp" class="form-control" >
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" name="creer" class="btn btn-primary">Confirmer</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>