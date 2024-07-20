@extends('layouts.app')

@section('content')

<!-- Affichage d'un message de succès si présent dans la session -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Titre de la page -->
<div class="flex justify-center mt-10">
    <h1 class="text-6xl font-bold text-black-500 mb-6">Liste des utilisateurs</h1>
</div>

<div class="container mx-auto mt-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-lg text-center text-gray-700 bg-white">
            <thead class="text-md text-white uppercase bg-gray-800">
                <tr>
                    <!-- En-têtes de la table -->
                    <th scope="col" class="px-6 py-4">Nom</th>
                    <th scope="col" class="px-6 py-4">Email</th>
                    <th scope="col" class="px-6 py-4">Rôle</th>
                    <th scope="col" class="px-6 py-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Boucle pour afficher chaque utilisateur -->
                @foreach ($teUsers as $teItems)
                    <tr class="bg-gray-100 border-b">
                        <!-- Nom de l'utilisateur -->
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                            {{ $teItems->name }}
                        </th>
                        <!-- Email de l'utilisateur -->
                        <td class="px-6 py-4">
                            {{ $teItems->email }}
                        </td>
                        <!-- Rôles de l'utilisateur -->
                        <td class="px-6 py-4">
                            @foreach ($teItems->roles as $teRole)
                                {{ $teRole->name }}@if (!$loop->last), @endif
                            @endforeach
                        </td>
                        <!-- Actions disponibles pour chaque utilisateur -->
                        <td class="px-6 py-4">
                            <form action="{{ route('admin.users.destroy', ['user' => $teItems->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            <a href="{{ route('admin.users.edit', ['user' => $teItems->id]) }}" class="btn btn-primary">Modifier</a>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 text-center">
        {{ $teUsers->links() }}
    </div>
</div>

<br>
<!-- Boutons de navigation -->
<div class="flex justify-center space-x-4">
    <a href="{{ url('/') }}" class="font-medium bg-blue-500 px-6 py-3 text-white rounded-md hover:bg-blue-700">Retour</a>
</div>

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
</style>

@endsection