<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Résultat inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // =====================================================
    // TRAITEMENT DU FORMULAIRE POST
    // =====================================================

    // TODO 1 :
    // Vérifier que le formulaire a été envoyé en POST
    // (utiliser $_SERVER['REQUEST_METHOD'])

    // TODO 2 :
    // Récupérer les données envoyées avec $_POST

    // ⚠️ BONUS SÉCURITÉ :
    // Chaque donnée récupérée doit être protégée avec htmlspecialchars()

    // Champs à récupérer :
    // - pseudo
    // - age
    // - email
    // - password (ne jamais l’afficher)
    // - jeu
    // - avatar

    // Exemple attendu :
    // $pseudo = htmlspecialchars($_POST['pseudo']);

    // TODO 3 :
    // Afficher un profil joueur propre dans une <div class="card">
    // Le profil doit contenir :
    // - l’avatar (balise <img>)
    // - le pseudo (balise <h2>)
    // - l’âge (balise <p>)
    // - l’email (balise <p>)
    // - le jeu préféré (balise <p>)

    // TODO 4 :
    // Gérer la newsletter :
    // - si cochée → message "Inscrit à la newsletter" (balise <p>)
    // - sinon → message "Pas inscrit à la newsletter" (balise <p>)

    // TODO 5 (important) :
    // Le mot de passe doit être récupéré MAIS JAMAIS affiché 
    ?>

</body>

</html>