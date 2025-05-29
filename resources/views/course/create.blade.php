@extends('layouts.teacher.app')
@php
    use App\Models\Sous_categorie;
    $sous_categories = Sous_categorie::all();
@endphp
@section('content')
<div class="max-w-4xl mx-auto h-auto bg-white p-8 rounded-lg shadow-lg mt-6 mb-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Créer un nouveau cours</h2>
    <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Titre -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title" placeholder="Titre du cours"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        {{-- Slug --}}
                <div>
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Slug du cours"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="5" placeholder="Description du cours"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
        </div>

        <!-- Image -->
        <div>
            <label for="img" class="block text-sm font-medium text-gray-700">Photo</label>
            <input type="file" name="image_url" id="img"
                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
        </div>

        <!-- Niveau -->
        <div>
            <label for="level" class="block text-sm font-medium text-gray-700">Niveau</label>
            <select name="level" id="level"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="débutant">Débutant</option>
                <option value="intermédiaire">Intermédiaire</option>
                <option value="avancé">Avancé</option>
            </select>
        </div>

        {{-- Duration --}}

        <div>
            <label for="duration" class="block text-sm font-medium text-gray-700">Durée</label>
            <input type="text" id="price" name="duration" placeholder="Entrez la durée"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Prix -->
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
            <input type="text" id="price" name="price" placeholder="Entrez le prix"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <input type="text" id="price" name="user_id" placeholder="Entrez le prix" value="{{ Auth::user()->id }}"
                class=" hidden mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Catégorie -->
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
            <select name="sous_categorie_id" id="category"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Categories --</option>
                @foreach ($sous_categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Bouton -->
        <div class="flex justify-end gap-1">
            <a href="{{ route('course.index') }}" class="py-2 px-4 bg-zinc-600 text-white hover:bg-zinc-700 rounded-lg shadow-lg">Annuler</a>
            <button type="submit"
                class=" bg-indigo-600 text-white py-2 px-4 rounded-lg shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                sauvegarder
            </button>
        </div>
    </form>
</div>
@endsection
