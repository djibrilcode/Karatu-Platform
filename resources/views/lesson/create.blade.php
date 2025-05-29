@extends('dashboards.enseignant')
@section('content')

@php
    use App\Models\Course;
    $courses = Course::where('user_id', Auth::id())->get();
@endphp

<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Créer une nouvelle leçon</h2>
    <form action="{{ route('lesson.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Sélection du cours -->
        <div>
            <label for="course_id" class="block text-sm font-medium text-gray-700">Cours</label>
            <select name="course_id" id="course_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-1 px-2">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" selected class="p-2">{{ $course->title }}</option>
                @endforeach
            </select>
            @error('course_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Titre -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-2 px-3">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- URL de la vidéo -->
        <div>
            <label for="video_url" class="block text-sm font-medium text-gray-700">URL de la vidéo</label>
            <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('video_url')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Contenu -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" id="content" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 py-2 px-3">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Ordre -->
        <div>
            <label for="order" class="block text-sm font-medium text-gray-700">Ordre</label>
            <input type="number" name="order" id="order" value="{{ old('order') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('order')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Boutons -->
        <div class="flex justify-end gap-2">
            <a href="{{ route('lesson.index') }}" class="py-2 px-4 bg-gray-600 text-white rounded-lg shadow hover:bg-gray-700">Annuler</a>
            <button type="submit" class="py-2 px-4 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">Créer</button>
        </div>
    </form>
</div>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#content', // Sélecteur pour cibler le champ textarea
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | fontsizeselect | forecolor backcolor',
        menubar: false,
        branding: false,
        height: 500,
        content_style: "body { font-family:Arial,Helvetica,sans-serif; font-size:14px }"
    });
</script>
<!-- Place the first <script> tag in your HTML's <head> -->


<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until May 27, 2025:
      'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>

@endsection
