<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle tâche assignée</title>
    <!-- Inclusion des styles Bootstrap et Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto my-5 p-5 bg-white shadow-lg rounded-lg">
        <!-- Titre de l'email -->
        <h1 class="text-2xl font-bold text-center text-primary mb-4">Nouvelle tâche assignée</h1>

        <p class="text-center mb-4">Une nouvelle tâche vous a été assignée :</p>

        <div class="border-t border-gray-200 pt-4">

            <!-- Détails de la tâche -->

            <p><strong class="text-primary">Titre :</strong> {{ $task->tetitle }}</p>
            <p><strong class="text-primary">Description :</strong> {{ $task->tedescription }}</p>

            <p><strong class="text-primary">Date de début :</strong> {{ $task->testart_date }}</p>

            <p><strong class="text-primary">Date de fin :</strong> {{ $task->tedue_date }}</p>

            <p><strong class="text-primary">Priorité :</strong> {{ $task->tepriority }}</p>

        </div>
    </div>
</body>
</html>