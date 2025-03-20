# Projet Symfony - Gestion des Utilisateurs, Produits et Catégories

## Description
Ce projet Symfony est une application web permettant la gestion des utilisateurs, l'authentification, l'inscription, ainsi que la gestion des produits, des catégories, du panier d'achat et des commandes.

## Prérequis
- PHP >= 8.1
- Composer
- Symfony CLI
- Serveur Web (Apache, Nginx, ou Symfony Server)
- Base de données (MySQL, PostgreSQL, SQLite...)

## Installation

### 1. Cloner le dépôt
```bash
git clone https://github.com/Bedhouche/foodie.git
cd foodie
```

### 2. Installer les dépendances
```bash
composer install
```

### 3. Configurer l'application
Créer un fichier `.env.local` à la racine du projet et configurer la base de données :
```bash
DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_de_la_bdd"
```
Puis exécuter les migrations :
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

### 4. Lancer le serveur Symfony
```bash
symfony server:start
```
L'application sera accessible à l'adresse `http://127.0.0.1:8000/`.

## Fonctionnalités
### 1. Gestion des utilisateurs
- Inscription (`/register`)
- Connexion (`/login`)
- Déconnexion (`/logout`)
- Profil utilisateur (`/profile`)
- Modification du profil (`/profile/edit`)

### 2. Gestion des catégories
- Affichage des catégories (`/categorie`)
- Affichage des produits d'une catégorie (`/categorie/{id}`)
- Ajout d'une catégorie (`/categorie/new`) *(Admin seulement)*
- Modification d'une catégorie (`/categorie/{id}/edit`) *(Admin seulement)*
- Suppression d'une catégorie (`/categorie/{id}`) *(Admin seulement)*

### 3. Gestion des produits
- Affichage des produits (`/produit`)
- Affichage des détails d'un produit (`/produit/{id}`)
- Filtrage par catégorie (`/produit/categorie/{id}`)
- Ajout d'un produit (`/produit/new`) *(Admin seulement)*
- Modification d'un produit (`/produit/{id}/edit`) *(Admin seulement)*
- Suppression d'un produit (`/produit/{id}`) *(Admin seulement)*

### 4. Gestion du panier
- Affichage du panier (`/panier`)
- Ajout d'un produit (`/panier/add/{id}`)
- Retrait d'un produit (`/panier/remove/{id}`)
- Suppression d'un produit (`/panier/delete/{id}`)
- Vider le panier (`/panier/vide`)

### 5. Gestion des commandes
- Création d'une commande (`/commande/ajout`)
- Affichage des détails d'une commande (`/commande/{id}`)
- Suivi du statut des commandes

## Structure du projet
```
├── src/
│   ├── Controller/        # Contrôleurs Symfony
│   ├── Entity/            # Entités Doctrine
│   ├── Form/              # Formulaires Symfony
│   ├── Repository/        # Repositories des entités
├── templates/             # Templates Twig
├── public/
│   ├── uploads/           # Stockage des images
├── migrations/            # Migrations de la base de données
└── .env                   # Fichier de configuration
```

## Déploiement
Utilisez `composer install --no-dev` et `symfony server:start` en mode production. Pensez à configurer correctement la base de données et le stockage des fichiers.

## Auteur
Développé par Bedhouche Anais & Mamou Rania 

