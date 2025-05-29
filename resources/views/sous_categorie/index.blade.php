@extends('dashboards.admin')
@section('content')
    <div class="p-6 bg-gray-100">

        <div class="bg-white p-6 shadow-lg rounded-lg">
            <div class="flex flex-row justify-between align-middle mb-2">
                <h3 class="text-gray-800 font-semibold">Liste des Sous-Catégories</h3>
                <a href="{{ route('sous-categorie.create') }}" class="bg-indigo-600 rounded-lg text-white p-3 mb-4">Nouvelle Sous-categorie</a>
            </div>

            <!-- Tableau des catégories -->
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-indigo-100">
                    <tr class="">
                        <th class="border text-center border-gray-300 px-4 py-2 ">Catégorie</th>
                        <th class="border text-center border-gray-300 px-4 py-2 ">Sous-Catégorie</th>
                        <th class="border text-center border-gray-300 px-4 py-2 ">Slug</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sous_categories as $sous_categorie)
                        <tr class="hover:bg-gray-100">
                            <td class="border text-center border-gray-300 px-4 py-2">{{ $sous_categorie->categorie->name }}</td>
                             <td class="border text-center border-gray-300 px-4 py-2">{{ $sous_categorie->name }}</td>
                             <td class="border text-center border-gray-300 px-4 py-2">{{ $sous_categorie->slug }}</td>
                            <td class="border text-center border-gray-300 px-4 py-2 flex space-x-2">
                                <!-- Bouton Modifier -->
                                <a href="{{ route('sous-categorie.edit', $sous_categorie->slug) }}" class="text-blue-600 hover:text-blue-800 text-center">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Bouton Supprimer -->
                                <form action="{{ route('sous-categorie.destroy', $sous_categorie->id) }}" method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer cette catégorie ?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
