<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Karatu-platform | Formation en ligne</title>

  <!-- Fonts et icônes -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AlpineJS pour le menu utilisateur -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/f907kxkyi393gh0a6fvskykmp7phtrh5a9hryd81flu68tdt/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

  <!-- Laravel Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@php
    use App\Models\Categories;
    $categories = Categories::all();




@endphp
<body class="bg-white text-gray-800">

  <!-- HEADER -->
      <header class="bg-white border-b top-0 left-0 w-full z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between space-x-4">

      <!-- Logo -->
      <a href="/" class="text-3xl font-bold text-gray-950  tracking-tight hover:text-indigo-700 transition">
        Karatu<span class="text-indigo-600">.na</span>
      </a>

      <!-- Navigation principale -->
      <nav class="hidden md:flex space-x-6 text-gray-700 font-medium">
        <a href="{{ route('listCours') }}" class="hover:text-indigo-600 transition">Cours</a>
        {{-- <a href="/about" class="hover:text-indigo-600 transition">À propos</a> --}}
        <a href="/contact" class="hover:text-indigo-600 transition">Contact</a>
      </nav>

      <!-- Barre de recherche -->
      <form action="{{ route('search') }}" method="GET" class="hidden lg:flex relative w-1/3">
        <input
          type="text"
          name="query"
          placeholder="Rechercher un cours, une formation..."
          class="w-full px-4 py-2 pr-10 border border-gray-300 rounded-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm"
        />
        <button type="submit" class="absolute right-3 top-2 text-gray-500 hover:text-indigo-600">
          <i class="fas fa-search"></i>
        </button>
      </form>

      <!-- Bouton Devenir Enseignant -->
      <a href="{{ route('register') }}" class="md:inline-block p-2 rounded-md hover:bg-indigo-50 transition text-sm">
        Enseigner sur Karatu.na
      </a>
      <i class="fas fa-bell text-gray-600"></i>


      <!-- User Menu -->
      @if (Auth::check())
            @php
                $names = explode(' ', Auth::user()->name);
    $initials = strtoupper(substr($names[0], 0, 1) . ($names[1] ?? '')[0] ?? '');
    $firstName = $names[0]
            @endphp
        <div x-data="{ open: false }" class="relative">

          <button @click="open = !open"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-900 text-white text-md font-bold focus:outline-none">
            {{ $initials }}
            <span class="absolute top-0 right-0 w-4 h-4 bg-indigo-500 border-2 border-white rounded-full"></span>
          </button>

          <!-- Menu déroulant -->
          <div x-show="open" @click.away="open = false" x-transition
            class="absolute right-0 mt-2 w-56 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
            <div class="py-2 text-sm text-gray-700">
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-indigo-50">Profil</a>

              @if (Auth::user()->role === 'etudiant')
                <a href="{{ route('etudiant.dashboard') }}" class="block px-4 py-2 hover:bg-indigo-50">Espace Étudiant</a>
              @elseif (Auth::user()->role === 'enseignant')
                <a href="{{ route('enseignant.dashboard') }}" class="block px-4 py-2 hover:bg-indigo-50">Espace Enseignant</a>
              @endif

              <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-indigo-50">
                  Me déconnecter
                </button>
              </form>
            </div>
          </div>
        </div>
      @else
        <div class="flex space-x-2">
          <a href="{{ route('register') }}" class="text-gray-700 p-2 rounded-md border border-gray-300 hover:bg-indigo-100 hover:text-indigo-600 transition text-sm">
            Sign up
          </a>
          <a href="{{ route('login') }}" class="bg-indigo-600 text-white p-2 rounded-md hover:bg-indigo-500 transition text-sm">
            Login
          </a>
        </div>
      @endif
    </div>

    <!-- Sous-navigation : Catégories -->
    @if(Route::currentRouteName() === 'home')
      <div class="bg-white border-t shadow py-1">
        <div class="max-w-7xl mx-auto px-6 py-2 flex items-center space-x-5 overflow-x-auto">
            @foreach ($categories as $categorie)
                <a href="#" class="text-sm text-gray-700 hover:text-indigo-600 transition">{{ $categorie->name }}</a>
            @endforeach
          <a href="#" class="text-sm text-gray-700 hover:text-indigo-600 transition">Voir toutes les catégories</a>
        </div>
      </div>
    @endif
  </header>


  <!-- MAIN -->
  <main>

        @if (Auth::check() && Route::currentRouteName() === 'home' || Route::currentRouteName() === 'enseignant.dasboard')
        <div class="bg-white p-4 flex ">
            <button
            class=" w-16 h-16 flex items-center justify-center rounded-full bg-gray-900 text-white text-2xl font-bold ">
            {{ $initials }}
          </button>
          <div class="flex flex-col ml-5 gap-2">
                <p class="text-gray-900 text-2xl font-bold">Bienvenue à nouveau, {{ $firstName }}</p>
                @if (Auth::user()->role === 'etudiant')
                    <a href="{{ route('etudiant.dashboard') }}" class=" text-indigo-700 font-bold underline md:inline-block  rounded-md transition text-sm">Accèder à votre Espace</a>
              @elseif (Auth::user()->role === 'enseignant')
                <a href="{{ route('enseignant.dashboard') }}" class=" text-indigo-700 font-bold underline md:inline-block  rounded-md transition text-sm">Accèder à votre Espace</a>
              @endif
          </div>
    </div>
        @endif

    <!-- Contenu principal à insérer ici -->
    {{ $slot }}
  </main>

    <!-- FOOTER -->

<x-footer></x-footer>

</body>
</html>
