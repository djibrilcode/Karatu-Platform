@extends('dashboards.enseignant')
@section('content')
<div class="p-6 bg-gray-100 min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex items-center mb-6 justify-between">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Liste des Quizzs</h2>
            <a href="{{ route('quizz.create') }}"
                class=" bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-700 transition">
                <i class="fas fa-plus-circle mr-2"></i> Ajouter un Quizz
            </a>
        </div>

        <!-- Tableau des quizz statiques -->
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-indigo-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Titre</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Lesson</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz HTML de base</td>
                    <td class="border border-gray-300 px-4 py-2">Introduction au HTML</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz CSS Sélecteurs</td>
                    <td class="border border-gray-300 px-4 py-2">Bases du CSS</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz JavaScript Fonctions</td>
                    <td class="border border-gray-300 px-4 py-2">Introduction à JavaScript</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz Python Boucles</td>
                    <td class="border border-gray-300 px-4 py-2">Python pour débutants</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz SQL Requêtes</td>
                    <td class="border border-gray-300 px-4 py-2">Introduction à SQL</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz PHP Syntaxe</td>
                    <td class="border border-gray-300 px-4 py-2">PHP pour débutants</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz Algorithmique</td>
                    <td class="border border-gray-300 px-4 py-2">Logique & Algorithmes</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Quiz Réseaux</td>
                    <td class="border border-gray-300 px-4 py-2">Introduction aux réseaux</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
