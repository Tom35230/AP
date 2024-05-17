<?php
// Vérification des identifiants lors de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur = 'aps2';
    $nomUtilisateur = 'root';
    $motDePasse = '1234';
    $nomBaseDeDonnees = 'animationsfld';


    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $nomUtilisateur, $motDePasse);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email_admin = $_POST['email']; // Récupérer l'e-mail saisi dans le formulaire
        $password_admin = $_POST['password']; // Récupérer le mot de passe saisi dans le formulaire
        $password_hashed = password_hash($password_admin, PASSWORD_DEFAULT);

        // Requête pour récupérer l'utilisateur par son e-mail et son statut administrateur
        $requete = $connexion->prepare("SELECT emel, mdp FROM administration WHERE emel = :email AND STATUT LIKE '4'");
        $requete->bindParam(':email', $email_admin);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            $mdpBDD = $resultat['mdp'];
            // Vérification du mot de passe saisi avec le mot de passe haché récupéré de la base de données
            if (password_verify($_POST['mdp'], $password_hashed)) {
                // Mot de passe correct : Authentification réussie

                // Stocker l'e-mail de l'administrateur dans une variable de session
                $_SESSION['user_email'] = $email_admin;

                // Redirection vers la page d'accueil admin ou autre
                header('Location: accueil_admin.php');
                exit;
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect";
            }
        } else {
            // Nom d'utilisateur incorrect
            echo "Le nom d'utilisateur est incorrect ou celui-ci n'est pas administrateur";
        }
    } catch(PDOException $e) {
        echo "Échec de la connexion : " . $e->getMessage();
        exit; // Sortir du script en cas d'échec de connexion à la base de données
    }
}
?>
