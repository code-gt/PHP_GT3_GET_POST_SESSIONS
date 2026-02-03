<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaires joueurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🎮 Inscription joueur</h1>

<!-- =====================================================
     FORMULAIRE 1 : GET (simple)
     Objectif : comprendre isset() et les paramètres URL
====================================================== -->

<h2>🟢 Inscription rapide (GET)</h2>

<!-- TODO :
     Compléter la balise <form>
     - ajouter method
     - ajouter action
     - envoyer les données vers le fichier de traitement
-->
<form class="form-joueur">

    <div class="form-row">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="number" name="niveau" placeholder="Niveau">
    </div>

    <!-- TODO :
         Ajouter un bouton pour envoyer le formulaire
    -->

</form>

<hr>

<!-- =====================================================
     FORMULAIRE 2 : POST (complet)
     Objectif : découvrir REQUEST_METHOD
====================================================== -->

<h2>🔵 Inscription complète (POST)</h2>

<!-- TODO :
     Construire entièrement ce formulaire
     - ajouter method
     - ajouter action
     - ajouter les champs nécessaires
     - ajouter le bouton d’envoi
-->

<form class="form-joueur">

    <!-- Ligne 1 -->
    <div class="form-row">
        <!-- TODO :
             Ajouter :
             - un champ pseudo
             - un champ âge
        -->
    </div>

    <!-- Ligne 2 -->
    <div class="form-row">
        <!-- TODO :
             Ajouter :
             - un champ email
             - un champ mot de passe
        -->
    </div>

    <!-- Ligne 3 -->
    <div class="form-row">
        <!-- TODO :
             Ajouter :
             - un select pour le jeu préféré
             - un select pour l’avatar
        -->
    </div>

    <!-- Ligne 4 -->
    <div class="form-row">
        <!-- TODO :
             Ajouter une checkbox pour la newsletter
        -->
    </div>

    <!-- TODO :
         Ajouter le bouton d’envoi du formulaire
    -->

</form>

</body>
</html>
