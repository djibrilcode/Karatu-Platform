@extends('layouts.admin.app')
@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Créer une nouvelle catégorie</h2>
        <form action="{{ route('categorie.store') }}" method="post" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom de la catégorie</label>
                <input type="text" name="name" id="name" placeholder="Entrer le nom de la catégorie"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-2 px-3">
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{ route('categorie.index') }}" class="bg-gray-600 text-white rounded-lg px-4 py-2 hover:bg-gray-700 transition">Annuler</a>
                <button type="submit" class="bg-indigo-600 text-white rounded-lg px-4 py-2 hover:bg-indigo-700 transition">Sauvegarder</button>
            </div>
        </form>
    </div>
</div>
@endsection
