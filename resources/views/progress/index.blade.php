@extends('layouts.learner.app-etudiant')
@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Ma progression par cours</h1>
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Cours</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Progression</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Statut</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Dernière activité</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Exemples statiques -->
                <tr>
                    <td class="px-6 py-4">Introduction à la programmation</td>
                    <td class="px-6 py-4">
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-indigo-600 h-3 rounded-full" style="width: 80%"></div>
                        </div>
                        <span class="text-xs text-gray-600">80%</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-2 py-1 bg-green-100 text-green-700 rounded text-xs">En cours</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">28/05/2025</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Développement Web Avancé</td>
                    <td class="px-6 py-4">
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-indigo-600 h-3 rounded-full" style="width: 100%"></div>
                        </div>
                        <span class="text-xs text-gray-600">100%</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">Terminé</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">15/05/2025</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Python pour les débutants</td>
                    <td class="px-6 py-4">
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-indigo-600 h-3 rounded-full" style="width: 45%"></div>
                        </div>
                        <span class="text-xs text-gray-600">45%</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">En cours</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">10/05/2025</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Introduction à la Data Science</td>
                    <td class="px-6 py-4">
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-indigo-600 h-3 rounded-full" style="width: 10%"></div>
                        </div>
                        <span class="text-xs text-gray-600">10%</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-2 py-1 bg-red-100 text-red-700 rounded text-xs">Non commencé</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">-</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
