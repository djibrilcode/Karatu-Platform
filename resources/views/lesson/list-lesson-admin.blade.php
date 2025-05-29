@extends('dashboards.admin')
@section('content')
    @php
        use App\Models\Lesson;
        use App\Models\Course;
        $lessons = Lesson::all();
    @endphp

    <div class="p-6 bg-gray-100">
        <div class="bg-white p-6 shadow-lg rounded-lg">
            <h3 class="text-indigo-800 font-semibold mb-4">Liste des Leçons</h3>

            <!-- Filtres -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" id="filterTitle" placeholder="Rechercher par titre..." class="border px-4 py-2 rounded w-1/3">
                <select id="filterCourse" class="border px-4 py-2 rounded w-1/3">
                    <option value="">Tous les cours</option>
                    @foreach (Course::all() as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
                <button id="applyFilters" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Appliquer</button>
            </div>

            <!-- Tableau des leçons -->
            <table class="w-full border-collapse border border-gray-200">
                <thead class="bg-indigo-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Titre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Cours</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Vidéo</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Contenu</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Ordre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody id="lessonTable">
                    @foreach ($lessons as $lesson)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $lesson->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                {{ $lesson->course->title ?? 'Non défini' }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ $lesson->video_url }}" target="_blank" class="text-blue-600 hover:underline">Voir la vidéo</a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ Str::limit($lesson->content, 50) }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $lesson->order }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('lesson.show', $lesson->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Détails</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Filtres dynamiques
        document.getElementById('applyFilters').addEventListener('click', function () {
            const titleFilter = document.getElementById('filterTitle').value.toLowerCase();
            const courseFilter = document.getElementById('filterCourse').value;

            const rows = document.querySelectorAll('#lessonTable tr');
            rows.forEach(row => {
                const title = row.children[0].textContent.toLowerCase();
                const courseId = row.children[1].getAttribute('data-course-id');

                if ((title.includes(titleFilter) || titleFilter === '') &&
                    (courseId === courseFilter || courseFilter === '')) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
