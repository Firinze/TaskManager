@extends('layouts.app')

@section('content')

<div class="container mt-5"> <!-- Conteneur principal avec une marge en haut -->
    <div class="row"> <!-- Début d'une ligne -->
        <div class="col-12"> <!-- Colonne prenant toute la largeur -->
            <h1 class="text-3xl text-black-500 mb-3 mt-10 text-center">Tableau de bord</h1> <!-- Titre principal centré -->
            <div class="d-flex justify-content-center"> <!-- Conteneur flex pour centrer le contenu -->
                <ul class="list-inline"> <!-- Liste en ligne -->
                    <li class="list-inline-item md:mr-5 py-2 md:py-0"> <!-- Élément de liste avec marges et padding -->
                        <a href="{{route('tasks.MyTask')}}" class="btn btn-primary hover:text-gray-400 transition duration-300 ease-in-out">Mes tâches</a> <!-- Lien vers les tâches de l'utilisateur avec transition de couleur -->
                    </li>
                    @can('tecanCreateTask') <!-- Vérifie si l'utilisateur a la permission de créer des tâches -->
                    <li class="list-inline-item md:mr-5 py-2 md:py-0"> <!-- Élément de liste avec marges et padding -->
                        <a href="{{route('tasks.index')}}" class="btn btn-secondary hover:text-gray-400 transition duration-300 ease-in-out">Mes tâches créées</a> <!-- Lien vers les tâches créées par l'utilisateur avec transition de couleur -->
                    </li>
                    @endcan
                    @can('admin') <!-- Vérifie si l'utilisateur a la permission d'administrateur -->
                    <li class="list-inline-item md:mr-5 py-2 md:py-0"> <!-- Élément de liste avec marges et padding -->
                        <a href="{{route('admin.users.index')}}" class="btn btn-success hover:text-gray-400 transition duration-300 ease-in-out">Gestion des utilisateurs</a> <!-- Lien vers la gestion des utilisateurs avec transition de couleur -->
                    </li>
                    @endcan
                    @can('tecanCreateTask') <!-- Vérifie si l'utilisateur a la permission de créer des tâches -->
                    <li class="list-inline-item md:mr-5 py-2 md:py-0"> <!-- Élément de liste avec marges et padding -->
                        <a href="{{route('tasks.create')}} " class="btn btn-info hover:text-gray-400 transition duration-300 ease-in-out">Nouvelle tâche</a> <!-- Lien pour créer une nouvelle tâche avec transition de couleur -->
                    </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection