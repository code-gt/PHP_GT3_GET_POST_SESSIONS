# PHP Débutant – Projet Joueurs

## 🎯 Objectif du projet
Apprendre les bases de PHP à travers un mini-projet “Choix et gestion de joueurs” :
- Création et affichage de profils
- Formulaires GET et POST
- Sessions et cookies pour la connexion

---

## 🟢 Partie 1 – Profils joueurs
- Création de profils avec pseudo, avatar, niveau et jeu préféré
- Affichage en HTML + CSS (Flexbox)
- Introduction à l’affichage dynamique avec PHP (`$_GET`)

---

## 🟦 Partie 2 – Formulaires GET et POST
- Formulaire simple avec GET pour découvrir `isset()` et URL
- Formulaire complet avec POST pour apprendre `$_SERVER['REQUEST_METHOD']`
- Affichage des profils utilisateurs avec plusieurs champs
- Introduction à la sécurisation de l’affichage avec `htmlspecialchars()`

---

## 🟣 Partie 3 – Connexion joueur (Sessions & Cookies)
- Formulaire de connexion simple
- Stockage du pseudo dans une session
- Utilisation d’un cookie pour retenir le jeu préféré
- Page de profil protégée
- Déconnexion avec destruction de session
- Bonus : sécuriser la page, afficher un message si non connecté, changer le jeu dans le cookie

---

## 📁 Fichiers principaux
- `index.php` – pages d’accueil / formulaires
- `profil.php` – affichage d’un profil
- `traitement-get.php` – traitement du formulaire GET
- `traitement-post.php` – traitement du formulaire POST
- `connexion.php` – connexion via POST
- `deconnexion.php` – déconnexion
- `style.css` – styles des formulaires et profils

---

## 🧠 Compétences acquises
- Bases de PHP : variables, conditions, GET/POST
- Gestion des sessions et cookies
- Sécurité simple avec `htmlspecialchars()`
- Structuration HTML + CSS dynamique
