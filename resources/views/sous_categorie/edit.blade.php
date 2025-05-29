@extends('dashboards.admin')
@section('content')

@php
    use App\Models\Categories;
    $categories = Categories::all();
@endphp

<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Modifier la sous-catégorie : {{ $sous_categorie->name }}</h2>
    <form action="{{ route('sous-categorie.update', $sous_categorie->slug) }}" method="post" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Champ pour le nom -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom de la sous-catégorie</label>
            <input type="text" name="name" id="name" value="{{ $sous_categorie->name }}"
                placeholder="Entrer le nom de la sous-catégorie"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Champ pour le slug -->
        <div>
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ $sous_categorie->slug }}"
                placeholder="Entrer le slug de la sous-catégorie"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Sélection de la catégorie -->
        <div>
            <label for="categorie_id" class="block text-sm font-medium text-gray-700">Catégorie</label>
            <select name="categorie_id" id="categorie_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Sélectionnez une catégorie --</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ $sous_categorie->categorie->id === $categorie->id ? 'selected' : '' }}>
                        {{ $categorie->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Boutons -->
        <div class="flex justify-end gap-4">
            <a href="{{ route('sous-categorie.index') }}" class="py-2 px-4 bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-700 transition">
                Annuler
            </a>
            <button type="submit" class="py-2 px-4 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition">
                Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection
