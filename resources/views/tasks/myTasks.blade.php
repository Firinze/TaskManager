@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Mes Tâches</h1>
    <ul>
        @foreach($teTasks as $teTask)
            <li>{{ $teTask->name }}</li>
        @endforeach
    </ul>
</div>
@endsection