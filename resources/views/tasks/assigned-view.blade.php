@extends('layouts.app')

@section('content')

<!-- Affichage d'un message d'erreur si présent dans la session -->
@if(session('teerror'))
    <div class="alert alert-danger mt-2" role="alert">

        <span class="block sm:inline"> {{session('teerror')}} </span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>

        </span>
    </div>
@endif


<!-- Titre de la page -->
<h1 class="text-3xl font-bold text-gray-800 mb-6 mt-10 text-center">Attribuer une tâche</h1>

<div class="container bg-light shadow p-4 rounded" style="max-width: 600px;">
    <form method="POST" action="{{route('tasks.assign',['task' => $teTask->id])}}">
        @csrf
        <div class="form-group mb-3">
            <!-- Titre de la tâche -->
            <h2 class="text-xl font-bold">{{$teTask->title}}</h2>
        </div>
        <div class="form-group mb-3">
            <!-- Sélection de l'utilisateur à qui la tâche est assignée -->
            <label for="teuser_assigned_to" class="form-label">Utilisateurs</label>

            <select id="teuser_assigned_to" name="teuser_assigned_to" class="form-control @error('teuser_assigned_to') is-invalid @enderror" style="border-radius: 10px;">

                @foreach ($teUsers as $teUser)

                    <option value="{{ $teUser->id }}">{{ $teUser->name }}</option>

                @endforeach
            </select>
            @error('teuser_assigned_to')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        
        <!-- Bouton pour soumettre le formulaire -->
        <button type="submit" class="btn btn-primary w-full sm:w-auto" style="border-radius: 10px;">Attribuer la tâche</button>
    </form>
</div>
<br>
<!-- Bouton pour revenir à la page précédente -->
<a href="{{ url()->previous() }}" class="btn btn-secondary" style="border-radius: 10px;">Retour</a>

  
@endsection