# 🎮 PHP – Partie 1 : Paramètres URL (GET)

## 🎯 Objectifs
- Comprendre ce qu’est un paramètre d’URL
- Utiliser la méthode GET
- Récupérer des données dans PHP avec `$_GET`
- Créer une logique simple avec `if / else`

---

## 📁 Fichiers à compléter
- `index.php`
- `profil.php`

---

## 🧩 Travail demandé – index.php

### 1️⃣ Liens des profils
Dans chaque profil (Alex, Fade, Samus) :

- Crée un lien `<a>`
- Le lien doit envoyer vers `profil.php`
- Tu dois transmettre les informations suivantes **avec GET** :
  - pseudo
  - niveau
  - jeu
  - avatar

---

### 2️⃣ Formulaire "Créer ton joueur"
Le formulaire est déjà présent, mais :
- Il **n’a pas encore** `action`
- Il **n’a pas encore** `method`

👉 À toi de :
- Choisir la bonne méthode
- Choisir vers quel fichier envoyer les données

---

## 🧩 Travail demandé – profil.php

### 1️⃣ Récupérer les données
- Crée des variables PHP à partir de `$_GET` :
  - pseudo
  - niveau
  - jeu
  - avatar

---

### 2️⃣ Badge du joueur
- Si le niveau est **supérieur ou égal à 10** :
  - statut = "Joueur confirmé"
  - classe CSS = `confirme`
- Sinon :
  - statut = "Joueur débutant"
  - classe CSS = `debutant`

Utilise un `if / else`.

---

### 3️⃣ Affichage
- Complète le HTML pour afficher :
  - le pseudo
  - l’avatar
  - le niveau
  - le jeu préféré
  - le badge

⚠️ Le HTML est déjà prêt, tu dois **insérer le PHP au bon endroit**.

------------------

# 🧪 Mini bonus – Vérifier des données avec GET

## 🎯 Objectifs
- Créer un formulaire HTML
- Envoyer des données avec la méthode GET
- Comprendre la construction d’une URL avec des paramètres
- Réutiliser un traitement PHP existant

---

## 📁 Fichiers concernés
- `url_simple.php`
- `url_verif.php`

---

## 🧩 Exemple déjà fourni (dates)

Un premier formulaire permet d’envoyer deux dates à `url_verif.php`.

L’URL générée ressemble à : `url_verif.php?startDate=2024-01-01&endDate=2024-01-10`


Dans `url_verif.php`, les paramètres sont récupérés avec `$_GET`.

---

## 🧩 Travail demandé – Nouveau formulaire

### 🎮 Contexte
Tu dois créer **un second formulaire HTML** qui envoie :
- un langage de programmation
- un type de serveur

Les données doivent être envoyées **avec la méthode GET** vers `url_verif.php`


---

### 📌 Champs attendus

Le formulaire doit contenir **2 champs** :

1️⃣ **Langage**
- Nom du champ : `language`
- Valeur attendue : `PHP`

2️⃣ **Serveur**
- Nom du champ : `server`
- Valeur attendue : `LAMP`

💡 Tu peux utiliser :
- soit des `<input type="text">`
- soit des `<select>`

---

## 🧠 Aide / Indices

- Le nom de l’attribut `name` est très important
- Les paramètres GET apparaissent dans l’URL
- Chaque paramètre est séparé par `&`
- Le `?` indique le début des paramètres

---

## ⭐ Bonus (facultatif)
Dans `url_verif.php`, affiche aussi :
- le langage choisi
- le serveur choisi

Exemple :

```php
Langage : PHP
Serveur : LAMP
```