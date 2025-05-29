@extends("layouts.teacher.app")
@php
    use App\Models\Course;
    use App\Models\Quizz;
    use App\Models\Enrollment;
    $recentCourses = Course::all();
    $totalCourses = Course::where('user_id',Auth::user() ->id)->count();
    $totalStudents = Enrollment::where('user_id', Auth::user() ->id)->count();
    // $totalQuizzes = Quizz::where('user_id', Auth::user() ->id)->count()

@endphp
@section('content')
<div class="bg-indigo-50 min-h-screen">
    <!-- Titre principal -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenue, {{ Auth::user()->name }}</h1>
        <p class="text-gray-600">Voici un aperçu de vos activités récentes et des statistiques.</p>
    </div>

    <!-- Statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Total des cours -->
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
            <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                <i class="fas fa-book text-2xl"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Total des Cours</h3>
                <p class="text-2xl font-bold">{{ $totalCourses }}</p>
            </div>
        </div>

        <!-- Total des étudiants inscrits -->
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-users text-2xl"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Étudiants inscrits</h3>
                <p class="text-2xl font-bold">5</p>
            </div>
        </div>

        <!-- Total des quizz -->
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
            <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center">
                <i class="fas fa-question-circle text-2xl"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Total des Quizz</h3>
                <p class="text-2xl font-bold">10</p>
            </div>
        </div>
    </div>

    <!-- Cours récents -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Cours récents</h3>
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-indigo-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Titre</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Étudiants inscrits</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Date de création</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recentCourses as $course)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $course->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $course->students_count }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $course->created_at->format('d/m/Y') }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('course.show', $course->id) }}" class="text-blue-600 hover:underline">Voir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Actions rapides -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('course.create') }}" class="bg-indigo-600 text-white p-4 rounded-lg shadow-md hover:bg-indigo-700 transition flex items-center space-x-4">
            <i class="fas fa-plus-circle text-2xl"></i>
            <span>Créer un nouveau cours</span>
        </a>
        <a href="{{ route('lesson.create') }}" class="bg-green-600 text-white p-4 rounded-lg shadow-md hover:bg-green-700 transition flex items-center space-x-4">
            <i class="fas fa-play-circle text-2xl"></i>
            <span>Ajouter une nouvelle leçon</span>
        </a>
        <a href="{{ route('quizz.create') }}" class="bg-yellow-600 text-white p-4 rounded-lg shadow-md hover:bg-yellow-700 transition flex items-center space-x-4">
            <i class="fas fa-question-circle text-2xl"></i>
            <span>Créer un nouveau quizz</span>
        </a>
    </div>
</div>
@endsection
