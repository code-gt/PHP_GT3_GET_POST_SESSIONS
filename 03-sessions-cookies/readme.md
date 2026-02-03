# 🟣 PHP – Partie 3 : Sessions & Cookies

## 🎯 Objectifs
- Comprendre ce qu’est une session
- Utiliser `session_start()`
- Stocker des données avec `$_SESSION`
- Se déconnecter avec `session_destroy()`
- Découvrir les cookies

---

## 🧠 Mise en situation
Un joueur se connecte avec son pseudo.
Le site se souvient de lui tant qu’il n’est pas déconnecté.

---

## 📁 Fichiers utilisés
- index.php
- connexion.php
- profil.php
- deconnexion.php

---

## 🧩 Travail demandé

### 1️⃣ index.php – Connexion
- Créer un formulaire de connexion
- Le formulaire doit :
  - envoyer le pseudo
  - utiliser la méthode POST
  - envoyer les données vers `connexion.php`

---

### 2️⃣ connexion.php – Création de la session
- Démarrer une session
- Créer une variable de session avec le pseudo
- Créer un cookie contenant le jeu préféré
- Rediriger vers `profil.php`

---

### 3️⃣ profil.php – Page protégée
- Démarrer la session
- Afficher un message de bienvenue avec le pseudo
- Afficher le jeu préféré stocké dans le cookie
- Ajouter un lien de déconnexion

---

### 4️⃣ deconnexion.php – Déconnexion
- Démarrer la session
- Supprimer la session
- Rediriger vers la page de connexion

---

## 🧠 À retenir
- Une session est stockée sur le serveur
- Un cookie est stocké sur l’ordinateur
- `session_start()` est obligatoire
- `header()` permet de rediriger

---

# ⭐ BONUS – Aller plus loin avec les sessions et les cookies

Ces bonus sont **facultatifs**.  
Ils permettent d’aller un peu plus loin sans ajouter de nouvelles notions complexes.

---

## ⭐ Bonus 1 – Sécuriser l’accès à `profil.php`

### 🎯 Objectif
Empêcher l’accès à la page `profil.php` si le joueur **n’est pas connecté**.

### Travail demandé
- Démarrer la session
- Vérifier si la variable `$_SESSION['pseudo']` existe
- Si elle n’existe pas :
  - rediriger vers `index.php`
  - arrêter le script

##  ⭐ Bonus 2 – Mini défi : changer le jeu dans le cookie
### 🎯 Objectif
Permettre au joueur de changer son jeu préféré.

### Travail demandé
Ajouter un formulaire sur `profil.php`

- Le formulaire doit contenir :
  - un select avec des jeux
  - un bouton d’envoi
- Lors de l’envoi :
  - mettre à jour le cookie jeu
  - afficher le nouveau jeu préféré
