@extends('layouts.admin.app')
@section('content')
@php
    use App\Models\Course;
    use App\Models\User;


    // Exemple : Récupérer tous les cours
    $courses = Course::all();
    $totalCours = Course::count();
    $totalEtudiant = User::where('role', 'etudiant')->count();
    $totalEnseignant = User::where('role', 'enseignant')->count()
@endphp
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-4 shadow-xl/30 hover:shadow-none  rounded-lg flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center">
            <i class="fas fa-book text-indigo-600 text-xl"></i>
        </div>
        <div>
            <h3 class="text-indigo-800 font-semibold">Cours</h3>
            <p class="text-2xl font-bold">{{ $totalCours }}</p>
        </div>
        <div class="ml-auto">
            <div class="radial-progress text-indigo-600" style="--value:75; --size:3rem; --thickness:0.5rem;"></div>
        </div>
    </div>

    <!-- Card Étudiants -->
    <div class="bg-white p-4 shadow rounded-lg flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center">
            <i class="fas fa-users text-red-600 text-xl"></i>
        </div>
        <div>
            <h3 class="text-red-800 font-semibold">Étudiants</h3>
            <p class="text-2xl font-bold">{{ $totalEtudiant }}</p>
        </div>
        <div class="ml-auto">
            <div class="radial-progress text-red-600" style="--value:60; --size:3rem; --thickness:0.5rem;"></div>
        </div>
    </div>

    <!-- Card Enseignants -->
    <div class="bg-white p-4 shadow rounded-lg flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center">
            <i class="fas fa-user-tie text-green-600 text-xl"></i>
        </div>
        <div>
            <h3 class="text-green-800 font-semibold">Enseignants</h3>
            <p class="text-2xl font-bold">{{ $totalEnseignant }}</p>
        </div>
        <div class="ml-auto">
            <div class="radial-progress text-green-600" style="--value:90; --size:3rem; --thickness:0.5rem;"></div>
        </div>
    </div>
</div>

<div class="bg-white p-6 shadow-lg rounded-lg">
    <h3 class="text-indigo-800 font-semibold mb-4">Cours récents</h3>
    <table class="w-full border-collapse border border-gray-200">
        <thead class="bg-indigo-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-left">Cours</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Enseignant</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $cours)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $cours->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">M.{{ $cours->user->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $cours->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
