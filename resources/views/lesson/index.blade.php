@extends('dashboards.enseignant')
@section('content')
<div class="p-6 bg-gray-100 min-h-screen">


        @if($lessons->isEmpty())
            <!-- Message si la liste est vide -->
            <div class="text-center text-gray-600 bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Aucune leçon trouvée</h3>
                <p class="text-gray-600 mb-6">
                    Vous n'avez pas encore créé de leçons. Commencez dès maintenant à enrichir vos cours avec des leçons captivantes !
                </p>
                <a href="{{ route('lesson.create') }}"
                    class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition">
                    <i class="fas fa-plus-circle mr-2"></i> Ajouter une leçon
                </a>
            </div>
        @else
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex align-middle justify-between"><h2 class="text-2xl font-bold text-gray-800 mb-6">Liste des leçons</h2>
            <a href="{{ route('lesson.create') }}"
                    class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition">
                    <i class="fas fa-plus-circle mr-2"></i> Ajouter une leçon
                </a></div>

            <!-- Tableau des leçons -->
            <table class="w-full border-collapse border border-gray-200">
                <thead class="bg-indigo-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Titre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Cours</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Ordre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">URL Vidéo</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lessons as $lesson)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $lesson->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $lesson->course->title ?? 'Non défini' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $lesson->order }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ $lesson->video_url }}" target="_blank" class="text-blue-600 hover:underline">
                                Voir la vidéo
                            </a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                            <!-- Bouton Voir -->
                            <a href="{{ route('lesson.show', $lesson->id) }}" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-eye"></i>
                            </a>
                            <!-- Bouton Modifier -->
                            <a href="{{ route('lesson.edit', $lesson->id) }}" class="text-green-600 hover:text-green-800">
                                <i class="fas fa-edit"></i>
                            </a>
                            <!-- Bouton Supprimer -->
                            <form action="{{ route('lesson.destroy', $lesson->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette leçon ?')">
                                @csrf
                                @method('DELETE')
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
        @endif

</div>
@endsection
