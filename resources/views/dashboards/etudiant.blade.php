
@extends('layouts.learner.app-etudiant')
@section('content')
    <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white p-8 rounded-lg shadow-lg animate-fade-in">
        <h1 class="text-4xl font-bold mb-4">Bienvenue dans ton univers d’apprentissage, {{ Auth::user()->name }}!</h1>
        <p class="text-lg">Chaque clic te rapproche de ton avenir. Let’s go ✨📖</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Mes Cours</h2>
            <p class="text-gray-600">Consultez et gérez vos cours en ligne.</p>
            <a href="{{ route('enrollment.index') }}" class="inline-block mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Voir mes cours
            </a>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Ma Progression</h2>
            <p class="text-gray-600">Suivez vos progrès et vos performances.</p>
            <a href="{{ route('progress.index') }}" class="inline-block mt-4 px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                Voir ma progression
            </a>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Mes Quizzs</h2>
            <p class="text-gray-600">Testez vos connaissances avec des quizz interactifs.</p>
            <a href="{{ route('quizz.index') }}" class="inline-block mt-4 px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition">
                Voir mes quizzs
            </a>
        </div>
    </div>
@endsection


