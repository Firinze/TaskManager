# Gestionnaire de Tâches

Bienvenue dans le Gestionnaire de Tâches, une application web pour gérer les tâches et les utilisateurs. Ce projet utilise Laravel pour le backend et Blade pour le frontend.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP >= 7.4
- Composer
- Node.js et npm
- MySQL ou un autre système de gestion de base de données compatible

## Installation

1. Clonez le dépôt :

2. Installez les dépendances PHP avec Composer :


    composer install

3. Installez les dépendances JavaScript avec npm :

    
    npm install
    

4. Copiez le fichier `.env.example` en `.env` et configurez vos variables d'environnement, notamment la connexion à la base de données :

    
    cp .env.example .env
    

5. Générez la clé de l'application :

    
    php artisan key:generate
    

6. Créez la base de données et exécutez les migrations :

    
    php artisan migrate
    

7. Seed la base de données avec des rôles et des utilisateurs préexistants :

    
    php artisan db:seed
    

## Utilisation

### Comptes Préexistants

L'application est livrée avec trois comptes préexistants :

- **Admin**
  - Email : `admin@gmail.com`
  - Mot de passe : `password`

- **Manager**
  - Email : `manager@gmail.com`
  - Mot de passe : `password`

- **Utilisateur**
  - Email : `user@gmail.com`
  - Mot de passe : `password`

### Lancer le Serveur

Pour lancer le serveur de développement, utilisez la commande suivante :

php artisan serve


Ensuite, ouvrez votre navigateur et accédez à votre localhost.

## Fonctionnalités

- **Gestion des Tâches**
  - Créer, éditer, supprimer des tâches
  - Assigner des tâches à des utilisateurs
  - Mettre à jour le statut des tâches

- **Gestion des Utilisateurs**
  - Créer, éditer, supprimer des utilisateurs (Admin uniquement)
  - Assigner des rôles aux utilisateurs (Admin et manager uniquement)

- **Authentification et Autorisation**
  - Inscription et connexion des utilisateurs
  - Vérification des rôles pour l'accès aux fonctionnalités

## Structure du Projet

- **Controllers**
  - `app/Http/Controllers/TaskController.php` : Gère les opérations CRUD pour les tâches.
  - `app/Http/Controllers/admin/UserController.php` : Gère les opérations CRUD pour les utilisateurs (Admin).
  - `app/Http/Controllers/ProfileController.php` : Gère les opérations liées au profil utilisateur.

- **Models**
  - `app/Models/Task.php` : Modèle pour les tâches.
  - `app/Models/User.php` : Modèle pour les utilisateurs.
  - `app/Models/Role.php` : Modèle pour les rôles.

- **Views**
  - `resources/views/tasks` : Vues pour les tâches.
  - `resources/views/admin/users` : Vues pour la gestion des utilisateurs.
  - `resources/views/auth` : Vues pour l'authentification.

