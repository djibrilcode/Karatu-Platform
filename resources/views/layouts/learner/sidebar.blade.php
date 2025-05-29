        <aside class="w-64 bg-white border-r-2 flex flex-col">
            <div class="flex flex-col mt-6 ml-4 space-y-4">
                <a href="{{ route('etudiant-home') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition">
                    <i class="fas fa-home mr-2"></i> Accueil
                </a>
                <a href="{{ route('enrollment.index') }}"
                   class="block px-4 py-2 rounded-lg transition
                        {{ $route === 'enrollment.index' ? 'bg-indigo-100 text-indigo-600' : 'text-gray-700 hover:bg-indigo-100 hover:text-indigo-600' }}">
                    <i class="fas fa-book mr-2"></i> Cours
                </a>
                <a href="{{ route('progress') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition">
                    <i class="fas fa-chart-line mr-2"></i> Progression
                </a>
                <a href="{{ route('quizz.index') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition">
                    <i class="fas fa-question-circle mr-2"></i> Quizzs
                </a>
            </div>

            {{-- Bouton de déconnexion --}}
            <form method="POST" action="{{ route('logout') }}" class="mt-auto px-4 mb-4">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100 rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                </button>
            </form>
        </aside>
