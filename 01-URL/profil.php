<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Profil du joueur</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <h1>🧑‍💻 Profil du joueur</h1>

    <?php
    // TODO 1 :
    // Créer les variables à partir de $_GET :
    // - $pseudo
    // - $niveau
    // - $jeu
    // - $avatar


    // TODO 2 :
    // Créer un if / else :
    // Si le niveau >= 10 :
    //   $statut = "Joueur confirmé"
    //   $classeBadge = "confirme"
    // Sinon :
    //   $statut = "Joueur débutant"
    //   $classeBadge = "debutant"
    ?>

    <div class="card">

        <!-- TODO 3 :
             Afficher le pseudo du joueur via php dans la balise <h1>
        -->
        <h1> </h1>

        <!-- TODO 4 :
             Afficher l'image de l'avatar via php dans la balise <img>
             (dossier images/)
        -->
        <img src="" alt="Avatar">

        <!-- TODO 5 :
             Ajouter la classe CSS dynamique du badge
             et afficher le statut via php dans la balise <div> suivante
        -->
        <div class="badge">
             
        </div>

        <!-- TODO 6 :
             Afficher le niveau via php dans la balise <p>
        -->
        <p>Niveau : </p>

        <!-- TODO 7 :
             Afficher le jeu préféré via php dans la balise <p>
        -->
        <p class="jeu">🎮 Jeu préféré : </p>

        <a href="index.php">⬅ Retour aux profils</a>
    </div>

</body>

</html>