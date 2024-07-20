@extends('layouts.app')

@section('content')

<!-- Titre de la page -->
<h1 class="text-center text-primary mb-4 mt-5">Créer une nouvelle tâche</h1>

<div class="container bg-light shadow p-4 rounded-lg" style="max-width: 600px;">
    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
        @csrf

        <div class="form-group">
            <!-- Champ pour le titre de la tâche -->
            <label for="tetitle" class="form-label">Titre de la tâche <i class="fas fa-tasks text-primary"></i></label>
            <input type="text" value="{{ old('tetitle') }}" name="tetitle" id="tetitle" class="form-control @error('tetitle') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50" placeholder="Titre de la tâche" style="border-radius: 10px;">
            @error('tetitle')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 form-group">
                <!-- Champ pour la date de début -->
                <label for="testart_date" class="form-label">Date de début <i class="fas fa-calendar-alt text-success"></i></label>
                <input type="date" value="{{ old('testart_date') }}" name="testart_date" id="testart_date" class="form-control @error('testart_date') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-success focus:ring-opacity-50" style="border-radius: 10px;">
                @error('testart_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <!-- Champ pour l'heure de début -->
                <label for="testart_time" class="form-label">Heure de début <i class="fas fa-clock text-info"></i></label>
                <input type="time" value="{{ old('testart_time') }}" name="testart_time" id="testart_time" class="form-control @error('testart_time') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-info focus:ring-opacity-50" style="border-radius: 10px;">
                @error('testart_time')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 form-group">
                <!-- Champ pour la date de fin -->
                <label for="tedue_date" class="form-label">Date de fin <i class="fas fa-calendar-check text-warning"></i></label>
                <input type="date" value="{{ old('tedue_date') }}" name="tedue_date" id="tedue_date" class="form-control @error('tedue_date') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-warning focus:ring-opacity-50" style="border-radius: 10px;">
                @error('tedue_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <!-- Champ pour l'heure de fin -->
                <label for="teend_time" class="form-label">Heure de fin <i class="fas fa-clock text-danger"></i></label>
                <input type="time" value="{{ old('teend_time') }}" name="teend_time" id="teend_time" class="form-control @error('teend_time') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-danger focus:ring-opacity-50" style="border-radius: 10px;">
                @error('teend_time')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <!-- Champ pour la description de la tâche -->
            <label for="tedescription" class="form-label">Votre message <i class="fas fa-comment-dots text-secondary"></i></label>
            <textarea id="tedescription" name="tedescription" rows="3" class="form-control @error('tedescription') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50" placeholder="Laissez un commentaire..." style="border-radius: 10px;">{{ old('tedescription') }}</textarea>
            @error('tedescription')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <!-- Champ pour la priorité de la tâche -->
            <label for="tepriority" class="form-label">Priorité <i class="fas fa-exclamation-circle text-dark"></i></label>
            <select id="tepriority" name="tepriority" class="form-control @error('tepriority') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-dark focus:ring-opacity-50" style="border-radius: 10px;">
                <option value="faible" {{ old('tepriority') == 'faible' ? 'selected' : '' }} class="text-green-500">Faible</option>
                <option value="moyenne" {{ old('tepriority') == 'moyenne' ? 'selected' : '' }} class="text-orange-500">Moyenne</option>
                <option value="haute" {{ old('tepriority') == 'haute' ? 'selected' : '' }} class="text-red-500">Haute</option>
            </select>
            @error('tepriority')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <!-- Champ pour l'utilisateur assigné -->
            <label for="teuser_assigned_to" class="form-label">Assigné à <i class="fas fa-user text-secondary"></i></label>
            <select id="teuser_assigned_to" name="teuser_assigned_to" class="form-control @error('teuser_assigned_to') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50" style="border-radius: 10px;">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('teuser_assigned_to') == $user->id ? 'selected' : '' }}>{{ $user->email }}</option>
                @endforeach
            </select>
            @error('teuser_assigned_to')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <!-- Champ pour le statut de la tâche -->
            <label for="testatus" class="form-label">Statut <i class="fas fa-tasks text-secondary"></i></label>
            <select id="testatus" name="testatus" class="form-control @error('testatus') is-invalid @enderror transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50" style="border-radius: 10px;">
                <option value="a_faire" {{ old('testatus') == 'a_faire' ? 'selected' : '' }}>À faire</option>
                <option value="en_cours" {{ old('testatus') == 'en_cours' ? 'selected' : '' }}>En cours</option>
                <option value="termine" {{ old('testatus') == 'termine' ? 'selected' : '' }}>Terminé</option>
            </select>
            @error('testatus')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <!-- Bouton pour revenir à la liste des tâches -->
            <a href="{{ route('tasks.index') }}" class="btn btn-danger transition-transform duration-300 transform hover:scale-105" style="border-radius: 10px;"><i class="fas fa-arrow-left"></i> Retour</a>
            <!-- Bouton pour créer la tâche -->
            <button type="submit" class="btn btn-primary transition-transform duration-300 transform hover:scale-105" style="border-radius: 10px;"><i class="fas fa-plus"></i> Créer</button>
        </div>
    </form>
</div>

@endsection
