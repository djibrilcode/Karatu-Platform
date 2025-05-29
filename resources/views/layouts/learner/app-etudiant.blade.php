<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/f907kxkyi393gh0a6fvskykmp7phtrh5a9hryd81flu68tdt/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>espace-etudiant</title>
</head>
<body>
    @php
        $route = request()->route()->getName();
    @endphp

    @include('layouts.header')

    <div class="flex h-screen">
        {{-- Sidebar --}}
        @include('layouts.learner.sidebar')

        {{-- Contenu principal --}}
        <main class="flex-1 p-6 overflow-y-auto">
             @yield('content')
        </main>

        {{-- footer --}}
    </div>
</body>
</html>
