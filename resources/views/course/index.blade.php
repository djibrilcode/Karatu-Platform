@extends('layouts.teacher.app')

@section('content')

@if(session('success'))
    <div id="success-message" class="bg-green-500 rounded-xl flex items-center justify-between p-3 mb-4">
        <span class="text-white font-medium">{{ session('success') }}</span>
        <i id="toggleClose" class="fas fa-times cursor-pointer text-white"></i>
    </div>
@endif

<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Liste de mes cours</h1>
        <a href="{{ route('course.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-700 transition">
            Ajouter un cours
        </a>
    </div>

    @if($courses->isEmpty())
        <div class="text-center text-gray-600 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Aucun cours trouvé</h2>
            <p class="text-gray-600 mb-6">
                Vous n'avez pas encore créé de cours. C'est le moment parfait pour partager vos connaissances !
            </p>
            <a href="{{ route('course.create') }}"
                class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition">
                <i class="fas fa-plus-circle mr-2"></i> Créer mon premier cours
            </a>
        </div>
    @else
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Titre</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-800">
                                {{ $course->title }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ Str::limit($course->description, 60) }}
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('course.show', $course->slug) }}"
                                   class="text-blue-600 hover:underline"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('course.edit', $course->slug) }}"
                                   class="text-yellow-600 hover:underline"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                      onsubmit="return confirm('Voulez-vous vraiment supprimer ce cours ?')">
                                    @csrf
                                    @method('DELETE')
                                  <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Cours statiques d'exemple -->
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800">Laravel pour les débutants</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Introduction au framework Laravel avec des projets pratiques.</td>
                        <td class="px-6 py-4 flex space-x-2">
                           <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800">JavaScript avancé</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Explorez les concepts avancés de JS moderne.</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                        <a href="#" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>

<script>
    document.getElementById('toggleClose')?.addEventListener('click', function () {
        document.getElementById('success-message')?.classList.toggle('hidden');
    });
</script>

@endsection
