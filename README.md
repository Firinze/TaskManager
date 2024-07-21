<<<<<<< HEAD
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

git clone https://github.com/Firinze/TaskManager.git
    cd TaskManager

2. Installez les dépendances PHP avec Composer :


    composer install

3. Installez les dépendances JavaScript avec npm :

    
    npm install
    

4. Copiez le fichier `.env.example` en `.env` et configurez vos variables d'environnement, notamment la connexion à la base de données :

    
    cp .env.example .env
    

5. Générez la clé de l'application :

    
    php artisan key:generate
    

(6. Créez la base de données et exécutez les migrations :

    
    php artisan migrate
    

7. Seed la base de données avec des rôles et des utilisateurs préexistants :

    
    php artisan db:seed )

Ou 

8- Utiliser la base de donnée task_manager.sql
    

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

=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> dcbf66e (Set up a fresh Laravel app)
