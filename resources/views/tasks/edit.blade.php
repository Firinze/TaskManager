@extends('layouts.app')

@section('content')

<!-- Titre de la page -->
<h1 class="text-center text-primary mb-4 mt-5">Modifier la tâche</h1>


<div class="container bg-light shadow p-4 rounded" style="max-width: 600px;">
    <form method="POST" action="{{ route('tasks.update', ['teTask' => $teTask->id]) }}">
        @csrf

        @method('POST')
        <div class="form-group mb-3">
            <!-- Champ pour le titre de la tâche -->
            <label for="tetitle" class="form-label">Titre de la tâche <i class="fas fa-tasks text-primary"></i></label>

            <input type="text" value="{{ old('tetitle', $teTask->tetitle) }}" name="tetitle" id="tetitle" class="form-control @error('tetitle') is-invalid @enderror" placeholder="Titre de la tâche" style="border-radius: 10px;">

            @error('tetitle')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>


        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <!-- Champ pour la date de début -->
                <label for="testart_date" class="form-label">Date de début <i class="fas fa-calendar-alt text-success"></i></label>
                <input type="date" value="{{ old('testart_date', $teTask->testart_date) }}" name="testart_date" id="testart_date" class="form-control @error('testart_date') is-invalid @enderror" style="border-radius: 10px;">
                @error('testart_date')

                <div class="invalid-feedback">{{ $message }}</div>

                @enderror
            </div>
            <div class="col-md-6 form-group mb-3">
                <!-- Champ pour l'heure de début -->
                <label for="testart_time" class="form-label">Heure de début <i class="fas fa-clock text-info"></i></label>

                <input type="time" value="{{ old('testart_time', $teTask->testart_time) }}" name="testart_time" id="testart_time" class="form-control @error('testart_time') is-invalid @enderror" style="border-radius: 10px;">
                @error('testart_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
        </div>


        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <!-- Champ pour la date de fin -->
                <label for="tedue_date" class="form-label">Date de fin <i class="fas fa-calendar-check text-warning"></i></label>
                <input type="date" value="{{ old('tedue_date', $teTask->tedue_date) }}" name="tedue_date" id="tedue_date" class="form-control @error('tedue_date') is-invalid @enderror" style="border-radius: 10px;">
                @error('tedue_date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 form-group mb-3">
                <!-- Champ pour l'heure de fin -->

                <label for="teend_time" class="form-label">Heure de fin <i class="fas fa-clock text-danger"></i></label>
                <input type="time" value="{{ old('teend_time', $teTask->teend_time) }}" name="teend_time" id="teend_time" class="form-control @error('teend_time') is-invalid @enderror" style="border-radius: 10px;">
                @error('teend_time')
                <div class="invalid-feedback">{{ $message }}</div>

                @enderror
            </div>
        </div>

        <div class="form-group mb-3">

            <!-- Champ pour la description de la tâche -->

            <label for="tedescription" class="form-label">Votre message <i class="fas fa-comment-dots text-secondary"></i></label>
            <textarea id="tedescription" name="tedescription" rows="3" class="form-control @error('tedescription') is-invalid @enderror" placeholder="Laissez un commentaire..." style="border-radius: 10px;">{{ old('tedescription', $teTask->tedescription) }}</textarea>
            @error('tedescription')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group mb-3">
            <!-- Champ pour la priorité de la tâche -->

            <label for="tepriority" class="form-label">Priorité <i class="fas fa-exclamation-circle text-dark"></i></label>
            <select id="tepriority" name="tepriority" class="form-control @error('tepriority') is-invalid @enderror" style="border-radius: 10px;">
                <option value="faible" {{ old('tepriority', $teTask->tepriority) == 'faible' ? 'selected' : '' }} style="color: green;">Faible</option>
                <option value="moyenne" {{ old('tepriority', $teTask->tepriority) == 'moyenne' ? 'selected' : '' }} style="color: orange;">Moyenne</option>
                <option value="haute" {{ old('tepriority', $teTask->tepriority) == 'haute' ? 'selected' : '' }} style="color: red;">Haute</option>

            </select>
            @error('tepriority')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group mb-3">
            <!-- Champ pour l'utilisateur assigné -->
            <label for="teuser_assigned_to" class="form-label">Assigné à <i class="fas fa-user text-secondary"></i></label>
            <select id="teuser_assigned_to" name="teuser_assigned_to" class="form-control @error('teuser_assigned_to') is-invalid @enderror" style="border-radius: 10px;">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('teuser_assigned_to', $teTask->teuser_assigned_to) == $user->id ? 'selected' : '' }}>{{ $user->email }}</option>

                @endforeach
            </select>
            @error('teuser_assigned_to')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group mb-3">
            <!-- Champ pour le statut de la tâche -->

            <label for="testatus" class="form-label">Statut <i class="fas fa-tasks text-secondary"></i></label>
            <select id="testatus" name="testatus" class="form-control @error('testatus') is-invalid @enderror" style="border-radius: 10px;">

                <option value="a_faire" {{ old('testatus', $teTask->testatus) == 'a_faire' ? 'selected' : '' }} style="color: red;">À faire</option>

                <option value="en_cours" {{ old('testatus', $teTask->testatus) == 'en_cours' ? 'selected' : '' }} style="color: orange;">En cours</option>
                <option value="termine" {{ old('testatus', $teTask->testatus) == 'termine' ? 'selected' : '' }} style="color: green;">Terminé</option>

            </select>

            @error('testatus')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="d-flex justify-content-between">
            <!-- Bouton pour revenir à la liste des tâches -->
            <a href="{{ route('tasks.index') }}" class="btn btn-danger" style="border-radius: 10px;"><i class="fas fa-arrow-left"></i> Retour</a>

            <!-- Bouton pour enregistrer les modifications -->

            <button type="submit" class="btn btn-primary" style="border-radius: 10px;"><i class="fas fa-save"></i> Enregistrer</button>
        </div>

    </form>
</div>

@endsection