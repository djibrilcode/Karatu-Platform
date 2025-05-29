<aside id="sidebar" class="bg-gray-900 border-white border-r text-white w-64 space-y-6 py-7 px-2 h-screen flex flex-col">
    <h2 class="text-2xl font-semibold text-center border-indigo-400 pb-4">Admin-dashboard</h2>
    <nav class="mt-10 flex-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
        </a>
        <a href="{{ route('cours-list') }}" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-book mr-3"></i> Cours
        </a>
        <a href="{{ route('categorie.index') }}" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-layer-group mr-3"></i> Catégories
        </a>
        <a href="{{ route('sous-categorie.index') }}" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-layer-group mr-3"></i> Sous-Catégories
        </a>
        <a href="{{ route('lesson-list') }}" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-play-circle mr-3"></i> Leçons
        </a>
        <a href="#" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-user-check mr-3"></i> Inscriptions
        </a>
        <a href="#" class="flex items-center py-3 px-4 hover:bg-indigo-500 rounded transition duration-300">
            <i class="fas fa-users mr-3"></i> Utilisateurs
        </a>
    </nav>

    <!-- Bouton de déconnexion -->
    <form action="{{ route('logout') }}" method="POST" class="mt-auto">
        @csrf
        <button type="submit" class="flex items-center py-3 px-4 hover:bg-red-500 rounded transition duration-300">
            <i class="fas fa-sign-out-alt mr-3"></i> Déconnexion
        </button>
    </form>
</aside>
