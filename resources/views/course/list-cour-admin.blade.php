@extends('dashboards.admin')
@section("content")

<div class="p-6 bg-gray-100 min-h-screen">
    <div class="mb-6">
        <h3 class="text-2xl font-bold text-indigo-800">Liste des Cours</h3>
    </div>

    <!-- Filtres -->
    <div class="flex flex-col md:flex-row items-center gap-4 mb-6">
        <input type="text" id="filterTitle" placeholder="Rechercher par titre..." class="border px-4 py-2 rounded w-full md:w-1/3">
        <select id="filterLevel" class="border px-4 py-2 rounded w-full md:w-1/3">
            <option value="">Tous les niveaux</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermédiaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
        </select>
        <button id="applyFilters" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 w-full md:w-auto">Appliquer</button>
    </div>

    <!-- Tableau des cours -->
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Image</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Titre</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Auteur</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Niveau</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Prix</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200" id="courseRows">
                @foreach($courses as $course)
                <tr>
                    <td class="px-6 py-4">
                        <img src="{{ asset('images/'.$course->image_url) }}" alt="Image du cours" class="w-20 h-14 object-cover rounded">
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $course->title }}</td>
                    <td class="px-6 py-4">{{ $course->user->name }}</td>
                    <td class="px-6 py-4">{{ $course->level }}</td>
                    <td class="px-6 py-4 text-indigo-700 font-bold">{{ $course->price }} DH</td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{ route('course.show', $course->id) }}" class="text-blue-600 hover:text-blue-800" title="Voir"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('course.edit', $course->id) }}" class="text-green-600 hover:text-green-800" title="Modifier"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Supprimer ce cours ?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" title="Supprimer"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $courses->links() }}
    </div>
</div>

<script>
    document.getElementById('applyFilters').addEventListener('click', function () {
        const titleFilter = document.getElementById('filterTitle').value.toLowerCase();
        const levelFilter = document.getElementById('filterLevel').value;

        const rows = document.querySelectorAll('#courseRows > tr');
        rows.forEach(row => {
            const title = row.querySelector('td:nth-child(2)')?.textContent.toLowerCase() || '';
            const level = row.querySelector('td:nth-child(4)')?.textContent || '';

            if ((title.includes(titleFilter) || titleFilter === '') &&
                (level.includes(levelFilter) || levelFilter === '')) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

@endsection
