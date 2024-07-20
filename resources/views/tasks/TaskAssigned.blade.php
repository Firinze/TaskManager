@extends('layouts.app')

@section('content')

<h1 class="display-4 text-primary mb-4 mt-5 text-center">Mes Tâches</h1>
@if($teTasks && count($teTasks) > 0) <!-- Vérifie s'il y a des tâches assignées -->

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($teTasks->sortBy([
                fn($teTask) => $teTask->priority == 'haute' ? 1 : ($teTask->priority == 'moyenne' ? 2 : 3),

                'due_date'
            ])->reverse() as $teTask) <!-- Trier par priorité et date d'échéance, puis inverser l'ordre -->

            <div class="col-md-6 mb-4">

                <div class="card shadow-lg rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="card-body">
                        <h5 class="card-title text-center text-2xl font-bold text-gray-800">{{$teTask->tetitle}}</h5> <!-- Titre de la tâche -->

                        <p class="card-text text-center text-gray-600">{{$teTask->tedescription}}</p> <!-- Description de la tâche -->

                        <p class="card-text text-center text-gray-500"><small>Date d'échéance : {{$teTask->tedue_date}} à {{$teTask->teend_time}}</small></p> <!-- Date et heure d'échéance -->
                        <p class="card-text text-center text-gray-500">
                            <small>Attribué par : {{ \App\Models\User::find($teTask->teuser_created_by)->name ?? 'Utilisateur inconnu' }}</small> <!-- Nom de l'utilisateur qui a attribué la tâche -->
                        </p>
                        <p class="card-text text-center" style="color: 
                            @if($teTask->priority == 'haute') red 

                            @elseif($teTask->priority == 'moyenne') orange 
                            @else green 
                            @endif;">

                            <small>Priorité : {{$teTask->tepriority}}</small> <!-- Priorité de la tâche avec couleur correspondante -->

                        </p>
                        <div class="text-center mt-4">

                            <form method="POST" action="{{ route('tasks.updateStatus', ['teTask' => $teTask->id]) }}"> <!-- Formulaire pour mettre à jour le statut de la tâche -->

                                @csrf
                                <div class="form-group">

                                    <label for="testatus">Statut</label>

                                    <select name="testatus" id="testatus" class="form-control"> <!-- Sélection du statut de la tâche -->
                                        <option value="a_faire" {{ $teTask->testatus == 'a_faire' ? 'selected' : '' }}>À faire</option>
                                        <option value="en_cours" {{ $teTask->testatus == 'en_cours' ? 'selected' : '' }}>En cours</option>
                                        <option value="termine" {{ $teTask->testatus == 'termine' ? 'selected' : '' }}>Terminé</option>

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm mt-2">Mettre à jour le statut</button> <!-- Bouton pour soumettre le formulaire -->
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            @endforeach
        </div>

    </div>
@else
    <div class="alert alert-warning text-center" role="alert">
        Aucune tâche assignée. <!-- Message d'alerte s'il n'y a aucune tâche assignée -->

    </div>
@endif
@endsection