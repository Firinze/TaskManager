@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-10">
    <h1 class="text-6xl font-bold text-black-500 mb-6">Editer l'utilisateur</h1>
</div>

<div class="bg-white shadow-lg px-4 py-6 rounded-md">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('POST')
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="roles" class="block text-sm font-medium text-gray-700">Rôles</label>
            @foreach($roles as $role)
                <div class="flex items-start mb-2">
                    <div class="flex items-center h-5">
                        <input id="role-{{ $role->id }}" type="checkbox" name="roles[]" value="{{ $role->id }}" class="w-4 h-4 border-gray-300 rounded focus:ring-blue-500" {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                    </div>
                    <label for="role-{{ $role->id }}" class="ml-2 text-sm font-medium text-gray-900">{{ $role->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary ml-2">Retour</a>
        
    </form>
</div>

@endsection