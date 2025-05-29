@extends('dashboards.enseignant')
@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $lesson->title }}</h1>
        <p class="text-sm text-gray-500 mb-4">Publié par {{ $lesson->course->user->name ?? 'Inconnu' }} le {{ $lesson->created_at->format('d/m/Y') }}</p>
        <div class="text-left text-gray-700 leading-relaxed">
            {!! nl2br(e($lesson->content)) !!}
        </div>
        <div class="mt-6">
            <a href="{{ route('lesson.index') }}" class="text-indigo-600 hover:underline">Retour aux leçons</a>
        </div>
    </div>
@endsection
