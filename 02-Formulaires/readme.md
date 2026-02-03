# 🟦 PHP – Partie 2 : Formulaires GET & POST

## 🎯 Objectifs
- Comprendre la différence entre GET et POST
- Savoir utiliser `isset()` pour un formulaire simple
- Découvrir `$_SERVER['REQUEST_METHOD']` pour un formulaire complet
- Afficher proprement un profil joueur avec HTML + PHP
- Réutiliser les concepts de la Partie 1

---

## 📁 Fichiers utilisés
- `index.php` : page d’accueil avec deux formulaires
- `traitement-get.php` : traitement du formulaire GET
- `traitement-post.php` : traitement du formulaire POST
- `style.css` : style des formulaires et profils

---

## 🧩 Formulaire 1 – GET (simple)

### 🎮 Objectif
- Envoyer peu de données (pseudo + niveau)
- Faire apparaître les paramètres dans l’URL
- Introduire `isset()` pour vérifier si les champs existent

### Travail demandé
- Compléter le formulaire GET dans `index.php`
- Vérifier les champs avec `isset()` dans `traitement-get.php`
- Afficher un message de bievenue

---

## 🧩 Formulaire 2 – POST (complet)

### 🎮 Objectif
- Envoyer plusieurs champs (pseudo, âge, email, mot de passe, jeu, avatar, newsletter)
- Découvrir `$_SERVER['REQUEST_METHOD']` pour traiter tous les champs en une seule fois
- Réutiliser la div `.card` pour l’affichage comme dans la Partie 1
- Ne jamais afficher le mot de passe

### Travail demandé
- Construire le formulaire complet dans `index.php`
- Tous les champs et bouton d’envoi
- Dans `traitement-post.php` :
- Vérifier `$_SERVER['REQUEST_METHOD'] == 'POST'`
- Récupérer toutes les données avec `$_POST`
- Afficher le profil joueur dans une div `.card`
- Ajouter un badge selon l’inscription à la newsletter
- ⚠️ Bonus sécurité : utiliser `htmlspecialchars()` sur toutes les données affichées

---

## 🧠 Astuces pour réussir
- Les données envoyées en GET apparaissent dans l’URL
- Les données envoyées en POST n’apparaissent pas dans l’URL
- Une checkbox n’existe dans `$_POST` que si elle est cochée
- `htmlspecialchars()` protège les données contre l’exécution de code HTML/JS

---

## 🎉 Bonus possible
- Ajouter un champ supplémentaire (ex : email) dans le formulaire GET
- Ajouter un message personnalisé selon le jeu préféré
- Ajouter une validation simple côté PHP (ex : niveau > 0)
