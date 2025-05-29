@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-red-600 mb-4">403</h1>
        <p class="text-xl text-gray-700">Accès refusé. Vous n'avez pas les permissions nécessaires.</p>
        <a href="/" class="mt-6 inline-block text-indigo-600 hover:underline">Retour au tableau de bord</a>
    </div>
</div>
@endsection
