@extends('layouts.app')

@section('content')

<!-- Titre de la page -->
<h1 class="text-4xl font-bold text-gray-800 mb-6 mt-10 text-center">Tâches Créées</h1>

<!-- Message de succès -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Vérification si la liste des tâches est vide -->
@if($teTasks->isEmpty())
    <p class="text-center">Aucune tâche créée pour le moment.</p>
@else
    <div class="container mx-auto mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-lg text-center text-gray-700 bg-white">
                <thead class="text-md text-white uppercase bg-gray-800">
                    <tr>
                        <!-- En-têtes de la table -->
                        <th scope="col" class="px-6 py-4">Nom</th>
                        <th scope="col" class="px-6 py-4">Statut</th>
                        <th scope="col" class="px-6 py-4">Contenu</th>
                        <th scope="col" class="px-6 py-4">Priorité</th>
                        <th scope="col" class="px-6 py-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Boucle pour afficher chaque tâche -->
                    @foreach ($teTasks as $teTask)
                        <tr class="bg-gray-100 border-b">
                            <!-- Nom de la tâche -->
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                {{ $teTask->tetitle }}
                            </th>
                            <!-- Statut de la tâche avec badge de couleur -->
                            <td class="px-6 py-4">
                                <span class="badge badge-status-{{ $teTask->testatus }}">{{ ucfirst($teTask->testatus) }}</span>
                            </td>
                            <!-- Description de la tâche -->
                            <td class="px-6 py-4">{{ $teTask->tedescription }}</td>
                            <!-- Priorité de la tâche avec badge de couleur -->
                            <td class="px-6 py-4">
                                <span class="badge badge-{{ $teTask->tepriority }}">{{ ucfirst($teTask->tepriority) }}</span>
                            </td>
                            <!-- Actions disponibles pour chaque tâche -->
                            <td class="px-6 py-4">
                                <a href="{{ route('tasks.remove', ['teTask' => $teTask->id]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                                <a href="{{ route('tasks.edit', ['teTask' => $teTask->id]) }}" class="btn btn-info btn-sm">Editer</a>
                                <a href="{{ route('tasks.show', ['teTask' => $teTask->id]) }}" class="btn btn-warning btn-sm">Voir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 text-center">
            {{ $teTasks->links() }}
        </div>
    </div>
@endif

<br>
<!-- Bouton pour revenir à la page précédente -->
<a href="{{ url()->previous() }}" class="font-medium bg-blue-500 px-6 py-3 text-white rounded-md hover:bg-blue-700">Retour</a>

@endsection

<style>
/* Media queries pour la responsivité */
@media (max-width: 1024px) {
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
    th, td {
        padding: 8px 12px;
    }
}
@media (max-width: 768px) {
    th, td {
        padding: 6px 8px;
    }
}
@media (max-width: 480px) {
    th, td {
        padding: 4px 6px;
    }
}

/* Styles supplémentaires pour améliorer l'apparence */
.table {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.table th, .table td {
    vertical-align: middle;
}
.table th {
    background-color: #f8f9fa;
}

/* Styles pour les priorités */
.badge-haute {
    background-color: #e3342f; /* Rouge */
}
.badge-moyenne {
    background-color: #ffed4a; /* Orange */
}
.badge-faible {
    background-color: #38c172; /* Vert */
}

/* Styles pour les statuts */
.badge-status-termine {
    background-color: #38c172; /* Vert */
}
.badge-status-a_faire {
    background-color: #e3342f; /* Rouge */
}
.badge-status-en_cours {
    background-color: #ffed4a; /* Orange */
}
</style>