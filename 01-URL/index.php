<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Choix du joueur</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <h1>🎮 Choisis ton joueur</h1>

    <div class="profils">

        <div class="profil">
            <img src="images/alex.webp" alt="Alex">
            <h2>Alex</h2>
            <p>Fan de construction et de survie. Passe ses soirées sur Minecraft.</p>

            <!-- TODO :
                 Créer un lien <a> vers profil.php
                 Envoyer avec GET :
                 - pseudo = Alex
                 - niveau = 5
                 - jeu = Minecraft
                 - avatar = alex.webp
            -->
        </div>

        <div class="profil">
            <img src="images/fade.jpg" alt="Fade">
            <h2>Fade</h2>
            <p>Joueur compétitif, adore les battles et les défis rapides.</p>

            <!-- TODO :
                 Créer un lien <a> vers profil.php
                 Envoyer avec GET :
                 - pseudo = Fade
                 - niveau = 12
                 - jeu = Valorant
                 - avatar = fade.jpg
            -->
        </div>

        <div class="profil">
            <img src="images/samus.webp" alt="Samus">
            <h2>Samus</h2>
            <p>Stratège et précis, spécialiste des FPS tactiques.</p>

            <!-- TODO :
                 Créer un lien <a> vers profil.php
                 Envoyer avec GET :
                 - pseudo = Samus
                 - niveau = 20
                 - jeu = Metroid
                 - avatar = samus.webp
            -->
        </div>

    </div>

    <hr>

    <h2 style="text-align:center;">➕ Créer ton joueur</h2>

    <!-- TODO :
         Compléter la balise <form>
         - Ajouter action
         - Ajouter method
         - Les données doivent être envoyées vers profil.php
    -->
    <form class="form-joueur">

        <div class="form-row">
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="number" name="niveau" placeholder="Niveau" required>
        </div>

        <div class="form-row">
            <select name="jeu">
                <option value="">-- Jeu préféré --</option>
                <option value="Minecraft">Minecraft</option>
                <option value="Fortnite">Fortnite</option>
                <option value="Valorant">Valorant</option>
            </select>

            <select name="avatar">
                <option value="">-- Avatar --</option>
                <option value="alex.webp">Avatar Minecraft</option>
                <option value="fade.jpg">Avatar Valorant</option>
                <option value="samus.webp">Avatar Metroid</option>
            </select>
        </div>

        <button type="submit">Créer le profil</button>
    </form>

</body>

</html>