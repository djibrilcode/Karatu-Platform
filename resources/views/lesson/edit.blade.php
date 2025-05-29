@extends('dashboards.enseignant')
@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Modifier la leçon</h2>
    <form action="{{ route('lesson.update', $lesson->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Sélection du cours -->
        <div>
            <label for="course_id" class="block text-sm font-medium text-gray-700">Cours</label>
            <select name="course_id" id="course_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Sélectionnez un cours --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $lesson->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->title }}
                    </option>
                @endforeach
            </select>
            @error('course_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Titre -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title', $lesson->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- URL de la vidéo -->
        <div>
            <label for="video_url" class="block text-sm font-medium text-gray-700">URL de la vidéo</label>
            <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $lesson->video_url) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('video_url')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Contenu -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('content', $lesson->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Ordre -->
        <div>
            <label for="order" class="block text-sm font-medium text-gray-700">Ordre</label>
            <input type="number" name="order" id="order" value="{{ old('order', $lesson->order) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('order')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Boutons -->
        <div class="flex justify-end gap-2">
            <a href="{{ route('lesson.index') }}" class="py-2 px-4 bg-gray-600 text-white rounded-lg shadow hover:bg-gray-700">Annuler</a>
            <button type="submit" class="py-2 px-4 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">Mettre à jour</button>
        </div>
    </form>
</div>
@endsection
