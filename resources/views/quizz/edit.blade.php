@extends('dashboards.enseignant')
@section('content')

@php
    use App\Models\Lesson;
    $lessons = Lesson::whereHas('course', function($query) {
        $query->where('user_id', Auth::id())
    })->get();
@endphp

<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Ajouter une nouveau Quizz</h2>
    <form action="{{ route('quizz.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Sélection de lesson -->
        <div>
            <label for="lesson_id" class="block text-sm font-medium text-gray-700">Lesson</label>
            <select name="lesson_id" id="lesson_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-1 px-2">
                @foreach ($lessons as $lesson)
                    <option value="{{ $lesson->id }}" {{ $quizz->lesson->id === $lesson->id ? "selected" : "" }} class="p-2">{{ $lesson->title }}</option>
                @endforeach
            </select>
            @error('lesson_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Titre -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title'), $quizz->title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-2 px-3">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
@endsection
