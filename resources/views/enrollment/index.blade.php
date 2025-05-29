@extends('dashboards.enseignant')
@section('content')
    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Liste des inscriptions</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nom</th>
                        <th class="py-3 px-6 text-left">Cours inscrit</th>
                        <th class="py-3 px-6 text-left">Date d'inscription</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <i class="fas fa-user text-indigo-500"></i>
                                    </div>
                                    <span>Karim Alae</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium text-indigo-600">Site dynamique</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                05/07/2024
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <i class="fas fa-user text-indigo-500"></i>
                                    </div>
                                    <span>Yussef Alami</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium text-indigo-600">Site Statique</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                05/03/2024
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <i class="fas fa-user text-indigo-500"></i>
                                    </div>
                                    <span>Aya Zackariya</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium text-indigo-600">Approche Agile</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                05/10/2023
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <i class="fas fa-user text-indigo-500"></i>
                                    </div>
                                    <span>Issa Yassine</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium text-indigo-600">Cloud Native</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                05/11/2024
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
