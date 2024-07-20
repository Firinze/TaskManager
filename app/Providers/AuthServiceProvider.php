<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Enregistre les services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Démarre les services.
     */
    public function boot(): void
    {
        // Définir une autorisation pour les administrateurs
        Gate::define('admin', function (User $teUser) {
            return $teUser->isAdmin();
        });

        // Définir une autorisation pour la création de tâches
        Gate::define('tecanCreateTask', function (User $teUser) {
            return $teUser->manyRoles(['admin', 'manager']);
        });
    }
}