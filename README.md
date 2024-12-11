
# Gestionnaire de Tâches


## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP >= 7.4
- Composer
- Node.js et npm
- MySQL ou un autre système de gestion de base de données compatible

## Installation

1. Clonez le dépôt :

```bash
git clone https://github.com/Firinze/TaskManager.git
cd TaskManager
```

2. Installez les dépendances PHP avec Composer :

```bash
composer install
```

3. Installez les dépendances JavaScript avec npm :

```bash
npm install
```

4. Copiez le fichier `.env.example` en `.env` et configurez vos variables d'environnement, notamment la connexion à la base de données :

```bash
cp .env.example .env
```

5. Générez la clé de l'application :

```bash
php artisan key:generate
```

6. Créez la base de données et exécutez les migrations :

```bash
php artisan migrate
```

7. Seed la base de données avec des rôles et des utilisateurs préexistants :

```bash
php artisan db:seed
```

   Ou utilisez directement la base de données fournie : `task_manager.sql`.

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

```bash
php artisan serve
```

Ensuite, ouvrez votre navigateur et accédez à votre localhost.

## Fonctionnalités

- **Gestion des Tâches**
  - Créer, éditer, supprimer des tâches (Admin et Manager)
  - Assigner des tâches à des utilisateurs (Admin et Manager)
  - Mettre à jour le statut des tâches (Admin, Manager et Utilisateur)

- **Gestion des Utilisateurs**
  - Créer, éditer, supprimer des utilisateurs (Admin uniquement)
  - Assigner des rôles aux utilisateurs (Admin uniquement)

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

## About Laravel

Laravel est un framework d'application web moderne qui facilite le développement en offrant des outils robustes et une syntaxe élégante.

Pour en savoir plus, visitez la [documentation officielle](https://laravel.com/docs).

---

## License

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).
