@extends('layouts.app')


@section('content')
<div class="container">
    <!-- Titre de la page -->
    <h1 class="text-4xl font-bold text-gray-800 mb-6 mt-10 text-center">Détails de la Tâche</h1>

    <div class="card shadow-lg rounded-lg mx-auto" style="max-width: 90%;">
        <div class="card-body">
            <!-- Titre de la tâche -->
            <h5 class="card-title">{{ $task->tetitle }}</h5>
            <!-- Description de la tâche -->
            <p class="card-text"><strong>Description :</strong> {{ $task->tedescription }}</p>
            <!-- Date de début de la tâche -->
            <p class="card-text"><strong>Date de début :</strong> {{ $task->testart_date }}</p>
            <!-- Date de fin de la tâche -->
            <p class="card-text"><strong>Date de fin :</strong> {{ $task->tedue_date }}</p>
            <!-- Priorité de la tâche avec badge de couleur -->

            <p class="card-text"><strong>Priorité :</strong> <span class="badge badge-{{ $task->tepriority }}">{{ ucfirst($task->tepriority) }}</span></p>
            <!-- Statut de la tâche -->
            <p class="card-text"><strong>Statut :</strong> {{ $task->testatus }}</p>

        </div>

    </div>

    <br>
    <!-- Bouton pour revenir à la page précédente -->
    <a href="{{ url()->previous() }}" class="btn btn-primary">Retour</a>
</div>

@endsection

<style>
/* Styles supplémentaires pour améliorer l'apparence */
.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.card-title {
    font-size: 1.5rem;

    font-weight: bold;

}

.card-text {
    font-size: 1rem;
}
.badge-haute {

    background-color: #e3342f;
}
.badge-moyenne {

    background-color: #ffed4a;
}

.badge-faible {

    background-color: #38c172;
}
</style>